<?php
// Copyright 1999-2021. Plesk International GmbH.

namespace PleskX\Api\Struct\EventLog;

class Event extends \PleskX\Api\Struct
{
    /** @var string */
    public $type;

    /** @var int */
    public $time;

    /** @var string */
    public $class;

    /** @var string */
    public $id;

    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'type',
            'time',
            'class',
            'id',
        ]);
    }
}
