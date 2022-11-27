<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BorrowRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BorrowCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BorrowCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Borrow::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/borrow');
        CRUD::setEntityNameStrings('borrow', 'borrows');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('mem_id')->type('number');
        CRUD::addColumn(['name' => 'mem_id', 'type' => 'number']);
        CRUD::column('book_id')->type('number');
        CRUD::addColumn(['name' => 'book_id', 'type' => 'number']);
        CRUD::column('library_id')->type('number');
        CRUD::addColumn(['name' => 'library_id', 'type' => 'number']);
        CRUD::column('borrow_date')->type('date');
        CRUD::addColumn(['name' => 'borrow_date', 'type' => 'date']);
        CRUD::column('return_date')->type('date');
        CRUD::addColumn(['name' => 'return_date', 'type' => 'date']);
        CRUD::column('penalty')->type('number');
        CRUD::addColumn(['name' => 'penalty', 'type' => 'number']);

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
        CRUD::setValidation(BorrowRequest::class);
        CRUD::field('mem_id')->type('number');
        CRUD::addField(['name' => 'mem_id', 'type' => 'number']);
        CRUD::field('book_id')->type('number');
        CRUD::addField(['name' => 'book_id', 'type' => 'number']);
        CRUD::field('library_id')->type('number');
        CRUD::addField(['name' => 'library_id', 'type' => 'number']);
        CRUD::field('borrow_date')->type('date');
        CRUD::addField(['name' => 'borrow_date', 'type' => 'date']);
        CRUD::field('return_date')->type('date');
        CRUD::addField(['name' => 'return_date', 'type' => 'date']);
        CRUD::field('penalty')->type('number');
        CRUD::addField(['name' => 'penalty', 'type' => 'number']);

        

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
