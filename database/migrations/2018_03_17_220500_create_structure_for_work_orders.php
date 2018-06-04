<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForWorkOrders extends StructureMigration
{
    protected $permissions = [
        ['name' => 'workorder.index', 'description' => 'Work Orders index', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder.create', 'description' => 'Get create form  for Work Orders', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder.edit', 'description' => 'Get edit form for workorder', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder.update', 'description' => 'Update edited workorder_index', 'type' => 1, 'is_default' => false],
        ['name' => 'workorder.store', 'description' => 'Store newly created workorder_index', 'type' => 1, 'is_default' => false],
        ['name' => 'workorder.destroy', 'description' => 'Delete workorder_index', 'type' => 1, 'is_default' => false],
        ['name' => 'workorder.initTable', 'description' => 'Init table for workorder', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder.getTableData', 'description' => 'Get table data for workorder', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder.exportExcel', 'description' => 'Export excel for workorder', 'type' => 0, 'is_default' => false],
        ['name' => 'workorder.selectOptions', 'description' => 'Get work order_indexs list for vue select', 'type' => 0, 'is_default' => false],
    ];

    protected $permissionGroup = [
        'name' => 'workorder', 'description' => 'Work Orders group',
    ];

    protected $menu = [
        'name' => 'Work Orders', 'icon' => 'tasks', 'link' => 'workorder.index', 'order_index' => 999, 'has_children' => false,
    ];
}
