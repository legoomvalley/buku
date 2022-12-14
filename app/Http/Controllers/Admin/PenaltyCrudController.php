<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PenaltyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PenaltyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PenaltyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Penalty::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/penalty');
        CRUD::setEntityNameStrings('penalty', 'penalties');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::column('id')->type('number');
        //CRUD::addColumns(['name' => 'id', 'type' => 'number']); 
        CRUD::column('description')->type('text');
        CRUD::addColumn(['name' => 'description', 'type' => 'text']); 
        CRUD::column('type')->type('text');
        CRUD::addColumn(['name' => 'type', 'type' => 'text']); 
        CRUD::column('amount')->type('number');
        CRUD::addColumn(['name' => 'amount', 'type' => 'number']); 

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {

        //CRUD::field('id')->type('number');
       // CRUD::addField(['name' => 'id', 'type' => 'number']); 
        CRUD::field('description')->type('text');
        CRUD::addField(['name' => 'description', 'type' => 'text']); 
        CRUD::field('type')->type('text');
        CRUD::addField(['name' => 'type', 'type' => 'text']); 
        CRUD::field('amount')->type('number');
        CRUD::addField(['name' => 'amount', 'type' => 'number']); 

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
