<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table.proto

namespace Dew\Acs\Tablestore\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>acs.tablestore.table.DescribeTableResponse</code>
 */
class DescribeTableResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>required .acs.tablestore.table.TableMeta table_meta = 1;</code>
     */
    protected $table_meta = null;
    /**
     * Generated from protobuf field <code>required .acs.tablestore.table.ReservedThroughputDetails reserved_throughput_details = 2;</code>
     */
    protected $reserved_throughput_details = null;
    /**
     * Generated from protobuf field <code>required .acs.tablestore.table.TableOptions table_options = 3;</code>
     */
    protected $table_options = null;
    /**
     * Generated from protobuf field <code>optional .acs.tablestore.table.StreamDetails stream_details = 5;</code>
     */
    protected $stream_details = null;
    /**
     * Generated from protobuf field <code>repeated bytes shard_splits = 6;</code>
     */
    private $shard_splits;
    /**
     * Generated from protobuf field <code>optional .acs.tablestore.table.SSEDetails sse_details = 7;</code>
     */
    protected $sse_details = null;
    /**
     * Generated from protobuf field <code>repeated .acs.tablestore.table.IndexMeta index_metas = 8;</code>
     */
    private $index_metas;
    /**
     * Generated from protobuf field <code>optional int64 creation_time = 9;</code>
     */
    protected $creation_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Dew\Acs\Tablestore\Messages\TableMeta $table_meta
     *     @type \Dew\Acs\Tablestore\Messages\ReservedThroughputDetails $reserved_throughput_details
     *     @type \Dew\Acs\Tablestore\Messages\TableOptions $table_options
     *     @type \Dew\Acs\Tablestore\Messages\StreamDetails $stream_details
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $shard_splits
     *     @type \Dew\Acs\Tablestore\Messages\SSEDetails $sse_details
     *     @type array<\Dew\Acs\Tablestore\Messages\IndexMeta>|\Google\Protobuf\Internal\RepeatedField $index_metas
     *     @type int|string $creation_time
     * }
     */
    public function __construct($data = NULL) {
        \Dew\Acs\Tablestore\Metadata\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>required .acs.tablestore.table.TableMeta table_meta = 1;</code>
     * @return \Dew\Acs\Tablestore\Messages\TableMeta|null
     */
    public function getTableMeta()
    {
        return $this->table_meta;
    }

    public function hasTableMeta()
    {
        return isset($this->table_meta);
    }

    public function clearTableMeta()
    {
        unset($this->table_meta);
    }

    /**
     * Generated from protobuf field <code>required .acs.tablestore.table.TableMeta table_meta = 1;</code>
     * @param \Dew\Acs\Tablestore\Messages\TableMeta $var
     * @return $this
     */
    public function setTableMeta($var)
    {
        GPBUtil::checkMessage($var, \Dew\Acs\Tablestore\Messages\TableMeta::class);
        $this->table_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>required .acs.tablestore.table.ReservedThroughputDetails reserved_throughput_details = 2;</code>
     * @return \Dew\Acs\Tablestore\Messages\ReservedThroughputDetails|null
     */
    public function getReservedThroughputDetails()
    {
        return $this->reserved_throughput_details;
    }

    public function hasReservedThroughputDetails()
    {
        return isset($this->reserved_throughput_details);
    }

    public function clearReservedThroughputDetails()
    {
        unset($this->reserved_throughput_details);
    }

    /**
     * Generated from protobuf field <code>required .acs.tablestore.table.ReservedThroughputDetails reserved_throughput_details = 2;</code>
     * @param \Dew\Acs\Tablestore\Messages\ReservedThroughputDetails $var
     * @return $this
     */
    public function setReservedThroughputDetails($var)
    {
        GPBUtil::checkMessage($var, \Dew\Acs\Tablestore\Messages\ReservedThroughputDetails::class);
        $this->reserved_throughput_details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>required .acs.tablestore.table.TableOptions table_options = 3;</code>
     * @return \Dew\Acs\Tablestore\Messages\TableOptions|null
     */
    public function getTableOptions()
    {
        return $this->table_options;
    }

    public function hasTableOptions()
    {
        return isset($this->table_options);
    }

    public function clearTableOptions()
    {
        unset($this->table_options);
    }

    /**
     * Generated from protobuf field <code>required .acs.tablestore.table.TableOptions table_options = 3;</code>
     * @param \Dew\Acs\Tablestore\Messages\TableOptions $var
     * @return $this
     */
    public function setTableOptions($var)
    {
        GPBUtil::checkMessage($var, \Dew\Acs\Tablestore\Messages\TableOptions::class);
        $this->table_options = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .acs.tablestore.table.StreamDetails stream_details = 5;</code>
     * @return \Dew\Acs\Tablestore\Messages\StreamDetails|null
     */
    public function getStreamDetails()
    {
        return $this->stream_details;
    }

    public function hasStreamDetails()
    {
        return isset($this->stream_details);
    }

    public function clearStreamDetails()
    {
        unset($this->stream_details);
    }

    /**
     * Generated from protobuf field <code>optional .acs.tablestore.table.StreamDetails stream_details = 5;</code>
     * @param \Dew\Acs\Tablestore\Messages\StreamDetails $var
     * @return $this
     */
    public function setStreamDetails($var)
    {
        GPBUtil::checkMessage($var, \Dew\Acs\Tablestore\Messages\StreamDetails::class);
        $this->stream_details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes shard_splits = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShardSplits()
    {
        return $this->shard_splits;
    }

    /**
     * Generated from protobuf field <code>repeated bytes shard_splits = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShardSplits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->shard_splits = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .acs.tablestore.table.SSEDetails sse_details = 7;</code>
     * @return \Dew\Acs\Tablestore\Messages\SSEDetails|null
     */
    public function getSseDetails()
    {
        return $this->sse_details;
    }

    public function hasSseDetails()
    {
        return isset($this->sse_details);
    }

    public function clearSseDetails()
    {
        unset($this->sse_details);
    }

    /**
     * Generated from protobuf field <code>optional .acs.tablestore.table.SSEDetails sse_details = 7;</code>
     * @param \Dew\Acs\Tablestore\Messages\SSEDetails $var
     * @return $this
     */
    public function setSseDetails($var)
    {
        GPBUtil::checkMessage($var, \Dew\Acs\Tablestore\Messages\SSEDetails::class);
        $this->sse_details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .acs.tablestore.table.IndexMeta index_metas = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexMetas()
    {
        return $this->index_metas;
    }

    /**
     * Generated from protobuf field <code>repeated .acs.tablestore.table.IndexMeta index_metas = 8;</code>
     * @param array<\Dew\Acs\Tablestore\Messages\IndexMeta>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexMetas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dew\Acs\Tablestore\Messages\IndexMeta::class);
        $this->index_metas = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int64 creation_time = 9;</code>
     * @return int|string
     */
    public function getCreationTime()
    {
        return isset($this->creation_time) ? $this->creation_time : 0;
    }

    public function hasCreationTime()
    {
        return isset($this->creation_time);
    }

    public function clearCreationTime()
    {
        unset($this->creation_time);
    }

    /**
     * Generated from protobuf field <code>optional int64 creation_time = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_time = $var;

        return $this;
    }

}

