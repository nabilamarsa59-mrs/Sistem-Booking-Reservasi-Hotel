<?php 
 
 use App\Http\Controllers\ListBarangController;
 use Illuminate\Support\Facades\Route;


Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

// Rounte::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/login', function () {
    return view('login');
});
