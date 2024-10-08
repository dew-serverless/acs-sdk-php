<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: row.proto

namespace Dew\Acs\Tablestore\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>acs.tablestore.row.TimeRange</code>
 */
class TimeRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional int64 start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * Generated from protobuf field <code>optional int64 end_time = 2;</code>
     */
    protected $end_time = null;
    /**
     * Generated from protobuf field <code>optional int64 specific_time = 3;</code>
     */
    protected $specific_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $start_time
     *     @type int|string $end_time
     *     @type int|string $specific_time
     * }
     */
    public function __construct($data = NULL) {
        \Dew\Acs\Tablestore\Metadata\Row::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional int64 start_time = 1;</code>
     * @return int|string
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : 0;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Generated from protobuf field <code>optional int64 start_time = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int64 end_time = 2;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : 0;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Generated from protobuf field <code>optional int64 end_time = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int64 specific_time = 3;</code>
     * @return int|string
     */
    public function getSpecificTime()
    {
        return isset($this->specific_time) ? $this->specific_time : 0;
    }

    public function hasSpecificTime()
    {
        return isset($this->specific_time);
    }

    public function clearSpecificTime()
    {
        unset($this->specific_time);
    }

    /**
     * Generated from protobuf field <code>optional int64 specific_time = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSpecificTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->specific_time = $var;

        return $this;
    }

}

