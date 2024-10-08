<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: log.proto

namespace Dew\Acs\Sls\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>acs.sls.LogGroupList</code>
 */
class LogGroupList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .acs.sls.LogGroup groups = 1;</code>
     */
    private $groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Dew\Acs\Sls\Messages\LogGroup>|\Google\Protobuf\Internal\RepeatedField $groups
     * }
     */
    public function __construct($data = NULL) {
        \Dew\Acs\Sls\Metadata\Log::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .acs.sls.LogGroup groups = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Generated from protobuf field <code>repeated .acs.sls.LogGroup groups = 1;</code>
     * @param array<\Dew\Acs\Sls\Messages\LogGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dew\Acs\Sls\Messages\LogGroup::class);
        $this->groups = $arr;

        return $this;
    }

}

