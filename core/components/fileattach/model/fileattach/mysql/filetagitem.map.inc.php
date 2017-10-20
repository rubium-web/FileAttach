<?php
$xpdo_meta_map['FileTagItem']= array (
  'package' => 'fileattach',
  'version' => '1.1',
  'table' => 'files_tags',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'file_id' => NULL,
    'tag' => NULL,
  ),
  'fieldMeta' => 
  array (
    'file_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
    ),
    'tag' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
  ),
  'indexes' => 
  array (
    'product' => 
    array (
      'alias' => 'file',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'file_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'tag' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'File' => 
    array (
      'class' => 'FileItem',
      'local' => 'file_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
      'criteria' => 
      array (
        'foreign' => 
        array (
          'parent' => '0',
        ),
      ),
    ),
  ),
);
