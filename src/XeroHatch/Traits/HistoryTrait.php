<?php

namespace XeroHatch\Traits;

use XeroHatch\Helpers;
use XeroHatch\Exception;
use XeroHatch\Remote\URL;
use XeroHatch\Remote\Request;
use XeroHatch\Models\Accounting\History;

trait HistoryTrait
{
    public function addHistory(History $history)
    {
        /**
         * @var \XeroHatch\Remote\Model
         */
        $uri = sprintf('%s/%s/History', $this::getResourceURI(), $this->getGUID());

        $url = new URL($this->_application, $uri);
        $request = new Request($this->_application, $url, Request::METHOD_POST);

        $request->setBody(Helpers::arrayToXML(['HistoryRecords' => [($history->toStringArray())]]));
        $request->send();

        $response = $request->getResponse();

        return $this;
    }

    public function getHistory()
    {
        /**
         * @var \XeroHatch\Remote\Model
         */
        if ($this->hasGUID() === false) {
            throw new Exception(
                'History/Notes are only available to objects that exist remotely.'
            );
        }

        $uri = sprintf(
            '%s/%s/History',
            $this::getResourceURI(),
            $this->getGUID()
        );

        $url = new URL($this->_application, $uri);
        $request = new Request($this->_application, $url, Request::METHOD_GET);
        $request->send();

        $historyEntries = [];
        foreach ($request->getResponse()->getElements() as $element) {
            $history = new History($this->_application);
            $history->fromStringArray($element);
            $historyEntries[] = $history;
        }

        return $historyEntries;
    }
}
