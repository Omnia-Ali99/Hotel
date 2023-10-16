<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileControllerAdmin;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('dashboard_user', DashboardController::class);
    Route::get('/booking/{name}/{id}', [DashboardController::class, 'booking'])->name('booking');
    Route::post('/booking_store', [DashboardController::class, 'booking_store'])->name('booking_store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');


Route::middleware('auth:admin')->group(function () {

    Route::resource('dashboard_admin', DashboardAdminController::class);
    Route::get('/recycle-bin', [DashboardAdminController::class, 'recycle_bin'])->name('recycle-bin');
    Route::get('/recycle/{id}', [DashboardAdminController::class, 'recycle'])->name('recycle');
    Route::get('/admin/profile', [ProfileControllerAdmin::class, 'edit'])->name('adminProfile.edit');
    Route::patch('/admin/profile', [ProfileControllerAdmin::class, 'update'])->name('adminProfile.profile.update');
    Route::delete('/admin/profile', [ProfileControllerAdmin::class, 'destroy'])->name('adminProfile.destroy');

});

require __DIR__ . '/AdminAuth.php';