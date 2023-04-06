<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BookRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
/**
 * Class BookCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BookCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Book::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/book');
        CRUD::setEntityNameStrings('book', 'books');
        CRUD::addButtonFromView('line','genqrcode','setupGenerateQRcode','beginning');
        CRUD::addButtonFromView('line','borrow','setupBorrow','end');


    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */

    // protected function index()
    // {
    //     $this->data['crud'] = $this->crud;
    //     $this->data['date'] = date('M, Y');

    //     return view('book.list', $this->data);
    // }
    protected function setupListOperation()
    {
        CRUD::column('book_title')->type('text');
        CRUD::addColumn(['name' => 'book_title', 'type' => 'text']); 
        CRUD::column('book_author')->type('text');
        CRUD::addColumn(['name' => 'book_author', 'type' => 'text']); 
        CRUD::column('year_publish')->type('date');
        CRUD::addColumn(['name' => 'year_publish', 'type' => 'date']); 
        CRUD::column('ISBN')->type('text');
        CRUD::addColumn(['name' => 'ISBN', 'type' => 'text']); 
        CRUD::column('book_status')->type('select_from_array');
        CRUD::addColumn(['name' => 'book_status', 'type' => 'select_from_array',
        'options' => ['Unavailable' => 'Unavailable', 'Available' => 'Available']]); 
        CRUD::addButtonFromView('line','genqrcode','setupGenerateQRcode','beginning');
        CRUD::addButtonFromView('line','borrow','setupBorrow','end');

       // http://buku.test/admin/borrow

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
        CRUD::setValidation(BookRequest::class);
        CRUD::field('book_title')->type('text');
        CRUD::addField(['name' => 'book_title', 'type' => 'text']); 
        CRUD::field('book_author')->type('text');
        CRUD::addField(['name' => 'book_author', 'type' => 'text']); 
        CRUD::field('year_publish')->type('date');
        CRUD::addField(['name' => 'year_publish', 'type' => 'date']); 
        CRUD::field('ISBN')->type('text');
        CRUD::addField(['name' => 'ISBN', 'type' => 'text']); 
        CRUD::field('book_status')->type('text');
        CRUD::addField(['name' => 'book_status', 'type' => 'select_from_array','options' => ['Unavailable' => 'Unavailable', 'Available' => 'Available']]); 
        

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
    public function setupGenerateQRcode($id)
    {
        $data['no']=$id;

      return view('qrcode')->with('data', $data);
      
    }
    public function setupBorrow($id)
    {
        $data['no']=$id;

      return view('borrow1')->with('data', $data);
      
    }


}
