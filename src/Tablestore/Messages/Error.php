<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: general.proto

namespace Dew\Acs\Tablestore\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>acs.tablestore.Error</code>
 */
class Error extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>required string code = 1;</code>
     */
    protected $code = null;
    /**
     * Generated from protobuf field <code>optional string message = 2;</code>
     */
    protected $message = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *     @type string $message
     * }
     */
    public function __construct($data = NULL) {
        \Dew\Acs\Tablestore\Metadata\General::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>required string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : '';
    }

    public function hasCode()
    {
        return isset($this->code);
    }

    public function clearCode()
    {
        unset($this->code);
    }

    /**
     * Generated from protobuf field <code>required string code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return isset($this->message) ? $this->message : '';
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * Generated from protobuf field <code>optional string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

