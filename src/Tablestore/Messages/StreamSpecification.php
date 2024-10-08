<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table.proto

namespace Dew\Acs\Tablestore\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>acs.tablestore.table.StreamSpecification</code>
 */
class StreamSpecification extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>required bool enable_stream = 1;</code>
     */
    protected $enable_stream = null;
    /**
     * Generated from protobuf field <code>optional int32 expiration_time = 2;</code>
     */
    protected $expiration_time = null;
    /**
     * Generated from protobuf field <code>repeated string columns_to_get = 3;</code>
     */
    private $columns_to_get;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_stream
     *     @type int $expiration_time
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $columns_to_get
     * }
     */
    public function __construct($data = NULL) {
        \Dew\Acs\Tablestore\Metadata\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>required bool enable_stream = 1;</code>
     * @return bool
     */
    public function getEnableStream()
    {
        return isset($this->enable_stream) ? $this->enable_stream : false;
    }

    public function hasEnableStream()
    {
        return isset($this->enable_stream);
    }

    public function clearEnableStream()
    {
        unset($this->enable_stream);
    }

    /**
     * Generated from protobuf field <code>required bool enable_stream = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableStream($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_stream = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int32 expiration_time = 2;</code>
     * @return int
     */
    public function getExpirationTime()
    {
        return isset($this->expiration_time) ? $this->expiration_time : 0;
    }

    public function hasExpirationTime()
    {
        return isset($this->expiration_time);
    }

    public function clearExpirationTime()
    {
        unset($this->expiration_time);
    }

    /**
     * Generated from protobuf field <code>optional int32 expiration_time = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->expiration_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string columns_to_get = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumnsToGet()
    {
        return $this->columns_to_get;
    }

    /**
     * Generated from protobuf field <code>repeated string columns_to_get = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumnsToGet($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->columns_to_get = $arr;

        return $this;
    }

}

