<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AssignMasterController;
use App\Http\Controllers\AssignDetailsController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\EssayController;
use Illuminate\Support\Facades\Route;

// Route::get('/clear', function() {
//     Artisan::call('cache:clear');
//     Artisan::call('route:clear');
//     Artisan::call('config:cache');
//     Artisan::call('view:clear');
//     return 'View cache has been cleared';
// });

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'home')->name('home');

    // questiond create,edit,delete and update adn show route 
    Route::get('/questions', 'show')->name('questions.show');
    Route::post('/question', 'create')->name('create');
    Route::get('/question/delete/{id}', 'destroy')->name('data.delete');
    Route::get('/question/edit/{id}', 'edit')->name('data.edit');
    Route::post('/question/update',  'update')->name('update.data');
    // pdf generate
    Route::get('/generate-pdf', 'generatePdf')->name('generatePdf');
    Route::get('/download-pdf',  'downloadPdf')->name('downloadPdf');
});


Route::controller(DepartmentController::class)->group(function () {
    Route::get('/deptartment', 'index')->name('dept.index');
    Route::get('/add-deptartment', 'create')->name('dept.create');
    Route::post('/store-deptartment', 'store')->name('dept.store');
    Route::get('/edit-deptartment/{id}', 'edit')->name('dept.edit');
    Route::post('/update', 'update')->name('dept.update');
    Route::get('/delete-deptartment/{id}', 'destroy')->name('dept.delete');

    
});

// AssignMasterController route here 
Route::controller(AssignMasterController::class)->group(function () {
    Route::get('/assign-master', 'index')->name('assignMaster.index');
    Route::get('/assignMaster-create', 'create')->name('assignMaster.create');
    Route::post('/store', 'store')->name('asignMaster.stores');
    Route::get('/delete/{id}', 'destroy')->name('assignMaster.delete');
    Route::get('/edit/{id}', 'edit')->name('assignMaster.edit');
    Route::post('/assignMaster', 'update')->name('assignMaster.update');
});

// AssignDetailsController route here 
Route::controller(AssignDetailsController::class)->group(function () {
    Route::get('/assign-details', 'index')->name('assignDetails.index');
    Route::post('/get-questions', 'question');
});


// Barcode & Qrcode route here 
Route::controller(BarcodeController::class)->group(function () {
    // Barcode route here 
    Route::get('/barcode-create', 'barcodeCreate')->name('barcode.create');
    Route::post('/barcode', 'barcodeShow')->name('barcode.index');

    // QRcode route here 
    Route::get('/qrcode-create', 'qrcodeCreate')->name('qrcode.create');
    Route::post('/qrcode', 'qrcodeShow')->name('qrcode.index');
    // Route::post('/qrcode-print', 'qrcodeprint')->name('qrcode.print');

});

// Essay-list route here 
Route::controller(EssayController::class)->group(function () { 
     // essay create and show route here
    Route::get('essay-list', 'index')->name('essay.index');
    Route::get('/essay-create', 'create')->name('essay.create');
    Route::post('/essay-store', 'store')->name('essay.store');
    Route::get('/essay-show', 'show')->name('essay.show');

    // essay edit and delete route here
    Route::get('/editable-essay', 'editableEssay')->name('essay.editeditable');
    Route::get('/essay-esit/{id}', 'edit')->name('essay.edit');
    Route::post('/essay-update', 'update')->name('essay.update');
    Route::get('/essay-delete/{id}', 'destroy')->name('essay.delete');
    
 // QRcode and pdf route here
    Route::get('/essay-pdf/{id}', 'essayPdf')->name('essay.pdf');

});
