<?php

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

Route::prefix('pengajuan-surat')->group( function ()
{
    Route::get('/', 'Persuratan@tampilkan');                                  // Mengarahkan ke halaman pengajuan surat yang dikehendaki
    Route::get('{kode_surat}', 'Persuratan@formPengajuan');                  // mengarahkan ke halaman formulir pengajuan Surat 
    Route::post('ajukan', 'Persuratan@ajukan');                              // Menyimpan pengajuan surat ke dalam database
});

Route::prefix('login')->group(function ()
{
    Route::get('/', 'Authentication@loginForm')->name('login');
    Route::post('/', 'Authentication@login');
});
Route::post('logout', 'Authentication@logout')->name('logout');;

// Route::group(['middleware' => 'auth'], function ()
// {
    Route::get('/', 'Admin@home')->name('beranda');
    Route::prefix('surat')->group(function ()
    {
        Route::get('/', 'Admin@semua');
        Route::get('semua', 'Persuratan@semua');
        Route::get('terbaru', 'Persuratan@terbaru');
        Route::prefix('{id}')->group(function ()
        {
            Route::get('/', 'Persuratan@detail');
            Route::get('sunting', 'Admin@sunting');
            Route::put('sunting', 'Persuratan@sunting');
            Route::delete('hapus', 'Persuratan@hapus');
            Route::get('cetak', 'Persuratan@cetak');
        });
    });
    Route::prefix('laporan')->group(function ()
    {
        Route::get('/', 'Admin@laporan');
    });
    Route::prefix('pengaturan')->group(function ()
    {
        Route::get('/', function ()
        {
            $batch = substr('1157050031', 1, 2);
            $enroll = \Carbon\Carbon::createFromFormat('y-n-j', "$batch-9-1");
            $time = \Carbon\Carbon::now();
            $semester = int_to_roman($enroll->diffInMonths($time) / 6 + 1);
            echo $semester;
        });
    });
// });