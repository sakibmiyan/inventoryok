<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\BrandFormController;
use App\Http\Controllers\AmarController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/amar', [AmarController::class, 'index'])->name('amar');




    
Route::get('/settings',[SettingsController::class,'Settings'])->middleware('age');
Route::get('/products',[ProductsController::class,'Products']);
Route::get('/brands',[BrandsController::class,'Brands'])->name('brand.form.new');
Route::get('/managebrandlist',[BrandsController::class,'managebrandlist']);
Route::get('/catagory',[CatagoryController::class,'Catagory']);

Route::get('/brands/new',[BrandsController::class,'BrandsForm'])->name('brand.form');

Route::get('/brand/form', [BrandFormController::class, 'BrandFormNew'])->name('brand.form');
Route::get('/brands/new/manage',[BrandFormController::class,'BrandFormNew'])->name('brand.form.add');
Route::get('/brands/new/manage',[BrandFormController::class,'BrandFormNewShow'])->name('brand.form.add');
Route::post('/brands',[BrandFormController::class,'Brands'])->name('brands');
Route::get('/add/products',[ProductsController::class,'addproducts'])->name('add.products');
Route::post('/addproducts',[ProductsController::class,'productadd'])->name('product.add');

Route::get('/manage/brand/list',[BrandFormController::class,'ManageBrandList'])->name('manage.brand.list');

Route::get('/Catagory/form',[CatagoryController::class,'catagory'])->name('catagory.form');
Route::get('/Catagory/form',[CatagoryController::class,'catagoryform'])->name('catagory.form');
Route::post('/catagory',[CatagoryController::class,'Catagory'])->name('catagories');


Route::get('/orders',[OrdersController::class,'Orders']);

Route::get('/order/add',[OrdersController::class,'orderadd'])->name('order.add');






Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
