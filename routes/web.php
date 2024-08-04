<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
//route for auth
Route::middleware('guest')->group(function() {
    Route::controller(AuthController::class)->group(function() {
        Route::get('/login', 'index')->name('login');
        Route::get('/daftar', 'daftar')->name('daftar');
        Route::post('/daftar', 'store')->name('store');
        Route::post('/auth', 'auth')->name('auth');
    });
});
Route::get('/', HomeController::class)->name('home');

//route for informasi
Route::controller(InformasiController::class)->group(function() {
    Route::get('informasi', 'index')->name('informasi');
    Route::get('/informasi/detail/{slug}', 'show');
});

//route for kontak
Route::get('kontak', [KontakController::class, 'index'])->name('kontak');

//harus login terlebih dahulu
Route::middleware('auth')->group(function() {
    //route for user frontend
    Route::controller(SuketController::class)->group(function() {
        Route::get('/suket/{id}', 'index')->name('suket');
        Route::post('/suket/store', 'store')->name('store');
    });

    //route for pengaduan
    Route::controller(PengaduanController::class)->group(function() {
        Route::get('pengaduan', 'index')->name('pengaduan');
        Route::post('pengaduan/store', 'store')->name('pengaduan.store');
    });

    //route for kritik dan saran
    Route::get('/kritik', [KritikController::class, 'index'])->name('kritik');
    Route::post('/kritik/store', [KritikController::class, 'store'])->name('kritik.store');

    //route for dashboard user
    Route::prefix('user')->group(function() {

        //route for dashbaord users
        Route::get('/dashboard', User\DahasboardController::class)->name('user.dashboard');

        //route for pengaduan
        Route::controller(PengaduanController::class)->group(function() {
            Route::get('pengaduan', 'index')->name('user.pengaduan');
            Route::post('pengaduan/store', 'store')->name('pengaduan.store');
        });

        //route for kritik dan saran
        Route::get('/kritik', [KritikController::class, 'index'])->name('user.kritik');
        Route::post('/kritik/store', [KritikController::class, 'store'])->name('user.kritik.store');
        

        //route for suket
        Route::controller(User\SuketController::class)->group(function() {
            Route::get('/suket', 'index')->name('user.suket');
            Route::get('/suket/show/{id}', 'show')->name('suket.show');
        });

        //route for pengaduan user
        Route::controller(User\PengaduanController::class)->group(function() {
            Route::get('/pengaduan', 'index')->name('user.pengaduan');
            Route::get('/pengaduan/show/{id}', 'show')->name('user.pengaduan.show');
            Route::put('/pengaduan/update/{id}', 'update')->name('user.pengaduan.show');
            Route::delete('/pengaduan/delete/{id}', 'delete')->name('user.pengaduan.delete');
        });

        //route for kritik
        Route::controller(User\KritikController::class)->group(function() {
            Route::get('/kritik', 'index')->name('user.kritik');
            Route::get('/kritik/show/{id}', 'show');
            Route::put('/kritik/update/{id}', 'update');
            Route::delete('/kritik/delete/{id}', 'delete');
        });
        
        // logout
        Route::get('/logout', [AuthController::class, 'logout']);
    });

    Route::middleware('isAdmin')->prefix('admin')->group(function() {
        //route for admin desa
        Route::get('/dashboard', [Admin\DashboardController::class, 'index'])->name('admin.dashboard');

        //route for suket
        Route::controller(Admin\SuketController::class)->group(function() {
            Route::get('/suket', 'index')->name('admin.suket');
            Route::get('/suket/show/{id}', 'show')->name('admin.suket.show');
            Route::put('/suket/update/{id}', 'update')->name('admin.suket.update');
        });

        //route for pengaduan
        Route::controller(Admin\PengaduanController::class)->group(function() {
            Route::get('/pengaduan', 'index')->name('admin.pengaduan');
            Route::get('/pengaduan/show/{id}', 'show')->name('admin.pengaduan.show');
            Route::put('/pengaduan/update/{id}', 'update')->name('admin.pengaduan.update');
        });

        //route for kritik dan saran
        Route::controller(Admin\KritikController::class)->group(function() {
            Route::get('/kritik', 'index')->name('admin.kritik');
            Route::get('/kritik/show/{id}', 'show')->name('admin.kritik.show');
            Route::put('/kritik/update/{id}', 'update')->name('admin.kritik.update');
            Route::delete('/kritik/delete/{id}', 'delete')->name('admin.kritik.delete');
        });

         // dashboard posts
        Route::get('/posts/slug', [Admin\DashboardPostController::class, 'slug']);
        Route::resource('/posts', Admin\DashboardPostController::class);

        //route for kategori
        Route::controller(Admin\KategoriController::class)->group(function() {
            Route::get('/kategori', 'index')->name('admin.kategori');
            Route::get('/kategori/create', 'create')->name('admin.kategori.create');
            Route::post('/kategori/store', 'store')->name('admin.kategori.store');
            Route::get('/kategori/show/{id}', 'show')->name('admin.kategori.show');
            Route::post('/kategori/update/{id}', 'update')->name('admin.kategori.update');
        });

        Route::get('/migrate', function() {
            Artisan::call('migrate:fresh', [
                '--seed' => true,
            ]);
            return \redirect('/');
        });
    });
});

