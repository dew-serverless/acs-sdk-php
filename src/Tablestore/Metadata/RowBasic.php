<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: row_basic.proto

namespace Dew\Acs\Tablestore\Metadata;

class RowBasic
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Dew\Acs\Tablestore\Metadata\Row::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
row_basic.protoacs.tablestore.row.basic"�
GetRowRequest

table_name (	
primary_key (
columns_to_get (	1

time_range (2.acs.tablestore.row.TimeRange
max_versions (
filter (
start_column (	

end_column	 (	
token
 ("U
GetRowResponse6
consumed (2$.acs.tablestore.row.ConsumedCapacity
row ("�
PutRowRequest

table_name (	
row (0
	condition (2.acs.tablestore.row.Condition9
return_content (2!.acs.tablestore.row.ReturnContent"U
PutRowResponse6
consumed (2$.acs.tablestore.row.ConsumedCapacity
row ("�
UpdateRowRequest

table_name (	

row_change (0
	condition (2.acs.tablestore.row.Condition9
return_content (2!.acs.tablestore.row.ReturnContent"X
UpdateRowResponse6
consumed (2$.acs.tablestore.row.ConsumedCapacity
row ("�
DeleteRowRequest

table_name (	
primary_key (0
	condition (2.acs.tablestore.row.Condition9
return_content (2!.acs.tablestore.row.ReturnContent"X
DeleteRowResponse6
consumed (2$.acs.tablestore.row.ConsumedCapacity
row (B<�Dew\\Acs\\Tablestore\\Messages�Dew\\Acs\\Tablestore\\Metadata'
        , true);

        static::$is_initialized = true;
    }
}

