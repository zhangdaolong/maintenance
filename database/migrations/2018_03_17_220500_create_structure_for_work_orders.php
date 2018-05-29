<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForWorkOrders extends StructureMigration
{
    protected $permissions = [
        ['name' => 'workorder_indexs.index', 'description' => 'Work Orders index', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder_indexs.create', 'description' => 'Get create form  for Work Orders', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder_indexs.edit', 'description' => 'Get edit form for workorder_indexs', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder_indexs.update', 'description' => 'Update edited workorder_index', 'type' => 1, 'is_default' => false],
        ['name' => 'workorder_indexs.store', 'description' => 'Store newly created workorder_index', 'type' => 1, 'is_default' => false],
        ['name' => 'workorder_indexs.destroy', 'description' => 'Delete workorder_index', 'type' => 1, 'is_default' => false],
        ['name' => 'workorder_indexs.initTable', 'description' => 'Init table for workorder_indexs', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder_indexs.getTableData', 'description' => 'Get table data for workorder_indexs', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder_indexs.exportExcel', 'description' => 'Export excel for workorder_indexs', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder_indexs.selectOptions', 'description' => 'Get work order_indexs list for vue select', 'type' => 0, 'is_default' => false],
    ];

    protected $permissionGroup = [
        'name' => 'workorder_indexs', 'description' => 'Work Orders group',
    ];

    protected $menu = [
        'name' => 'Work Orders', 'icon' => 'tasks', 'link' => 'workorder_indexs.index', 'order_index' => 999, 'has_children' => false,
    ];
}
