<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController ;
use App\Http\Controllers\AuthController ;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [UserController::class, 'index']);
Route::get('admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('admin/albums', [AdminController::class, 'list_albums'])->name('admin.albums')->middleware('auth');
Route::get('admin/albums/edit/{id}', 
    [AdminController::class, 'edit_album'])
    ->name('admin.albums.edit')
    ->middleware('auth');
Route::post('admin/albums/save',
    [AdminController::class, 'save_album'])
    ->name('admin.albums.save');
Route::get('admin/albums/delete/{id}', 
    [AdminController::class, 'delete_album'])
    ->name('admin.albums.delete')
    ->middleware('auth');
Route::get('admin.albums/create', 
    [AdminController::class, 'create_album'])
    ->name('admin.albums.create')
    ->middleware('auth');
// Route::get('/gallery', [AdminController::class, 'showGallery'])->name('gallery');
// Route::get('/gallery', [App\Http\Controllers\AdminController::class, 'showGallery']);
// Route::get('/gallery', function () {
//     return view('frontend.gallery');
// });
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/about', [AboutController::class, 'index'])->name('about');


