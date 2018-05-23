<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateStructureForInvoices extends StructureMigration
{
    protected $permissions = [
        ['name' => 'invoices.index', 'description' => 'invoices index', 'type' => 0, 'default' => false],
        ['name' => 'invoices.create', 'description' => 'Get create form  for invoices', 'type' => 0, 'default' => false],
        ['name' => 'invoices.edit', 'description' => 'Get edit form for invoices', 'type' => 0, 'default' => false],
        ['name' => 'invoices.update', 'description' => 'Update edited invoice', 'type' => 1, 'default' => false],
        ['name' => 'invoices.store', 'description' => 'Store newly created invoice', 'type' => 1, 'default' => false],
        ['name' => 'invoices.destroy', 'description' => 'Delete invoice', 'type' => 1, 'default' => false],
        ['name' => 'invoices.initTable', 'description' => 'Init table for invoices', 'type' => 0, 'default' => false],
        ['name' => 'invoices.getTableData', 'description' => 'Get table data for invoices', 'type' => 0, 'default' => false],
        ['name' => 'invoices.exportExcel', 'description' => 'Export excel for invoices', 'type' => 0, 'default' => false],
        ['name' => 'invoices.selectOptions', 'description' => 'Get invoices list for vue select', 'type' => 0, 'default' => false],
    ];

    protected $permissionGroup = [
        'name' => 'invoices', 'description' => 'Invoices group',
    ];

    protected $menu = [
        'name' => 'Invoices', 'icon' => 'list', 'link' => 'invoices.index', 'order' => 999, 'has_children' => false,
    ];
}
