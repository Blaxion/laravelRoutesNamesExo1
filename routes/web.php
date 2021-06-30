<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});



Route::get('/views/infos/contact/sav', function () {
    return view('pages.sav');
})->name('/contact/sav');

Route::get('/views/infos/contact/partenariat', function () {
    return view('pages.partenariat');
})->name('/contact/partenariat');

Route::get('/views/infos/contact/info', function () {
    return view('pages.info');
})->name('/contact/info');




Route::get('/views/team/web/dev/frontend', function () {
    return view('pages.frontend');
})->name('/team/front');

Route::get('/views/team/web/dev/backend', function () {
    return view('pages.backend');
})->name('/team/back');


view()->composer(['pages.frontend','pages.backend','home'], function ($view) {
    $front = [
        'perso1' =>  [
            'nom' => 'Slave1',
            'fonction' =>'frontend1',
            'chemin' => asset("img/doge.png")
        ],
        'perso2' =>  [
            'nom' => 'Slave2',
            'fonction' =>'frontend2',
            'chemin' => asset("img/doge.png")
        ],
        'perso3' =>  [
            'nom' => 'Slave3',
            'fonction' =>'frontend3',
            'chemin' => asset("img/doge.png")
        ],
        'perso4' =>  [
            'nom' => 'Slave4',
            'fonction' =>'frontend4',
            'chemin' => asset("img/doge.png")
        ],
        'perso5' =>  [
            'nom' => 'Slave5',
            'fonction' =>'frontend5',
            'chemin' => asset("img/doge.png")
        ],
        
    ];
    $view->with('front',$front);

    $back = [
        'perso1' =>  [
            'nom' => 'Slave1',
            'fonction' =>'backend1',
            'chemin' => asset("img/dogette.jpg")
        ],
        'perso2' =>  [
            'nom' => 'Slave2',
            'fonction' =>'backend2',
            'chemin' => asset("img/dogette.jpg")
        ],
        'perso3' =>  [
            'nom' => 'Slave3',
            'fonction' =>'backend3',
            'chemin' => asset("img/dogette.jpg")
        ],
        'perso4' =>  [
            'nom' => 'Slave4',
            'fonction' =>'backend4',
            'chemin' => asset("img/dogette.jpg")
        ],
    ];
    $view->with('back',$back);
});

