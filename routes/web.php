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

Route::get("/", function () {
    $a = "jean"; //variable tipo string
    $colores= array("rojo","azul"); //arreglo
    $verduras = array("verdura1"=>"cebolla","verdura2"=>"tomate"); //arreglo con propiedad
    $frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"]; //variable tipo objeto
    echo "Hola $a","<br>" ,"como vas?"; //<br> = salto de linea
    echo "<br> los colores son: $colores[0] " ,"y $colores[1]";
    echo "<br> las verduras son: $verduras[verdura1] " ,"y $verduras[verdura2]";
    echo "<br> las frutas son: $frutas->fruta1 " ,"y $frutas->fruta2";
    return view("welcome"); //comillas simples o dobles igual compila

});
Route::get('saludo/{nombre?}/{edad?}', function ($nombre="Invitado",$edad="18") {
    return "hola " . $nombre." tienes ".$edad." años";

});

Route::get('contactame',function(){

    return "Hola como estas hoy?";

})->name('contactos'); //nombre de ruta=contactos

Route::get ('nombrerutas',function(){

    echo "<a href='".route('contactos')."'>Contactos 1</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 2</a><br>";
    echo "<a href='".route('contactos')."'>Contactos 3</a><br>"; //referencia a cualquier nombre de la URL,ya que
    echo "<a href='".route('contactos')."'>Contactos 4</a><br>"; //lo que importa es el nombre de la Ruta
    //echo "<a href='contactame'> Contactos 2</a><br>"; //solo funciona con comillas simples ' '
    //echo "<a href='/contactanos'>Contactos 3</a><br>"; como se cambio el nombre de la url a contactame
    //echo "<a href='/contactanos'>Contactos 4</a><br>";  ya no sirve esta referencia a contactos
});

//COMO MOSTRAR HTML CON VISTAS
/* Route::get('html', function () {
    $nombre="jean carlos";
    $nombre1="Daleshka Nataly";

    return view('home')->with(['nombre' => $nombre,'nombre1'=> $nombre1]);
    //return view('home',['nombre' => $nombre,'nombre1'=> $nombre1]);
     //return view('home',compact($nombre,$nombre1));
})->name('home'); */

$portfolio=[
["title" => "portfolio #1"],
["title" => "portfolio #2"],
["title" => "portfolio #3"],
["title" => "portfolio #4"]
];

Route::view('html','home',['nombre' => null ,'nombre1'=> "daleshka",'portfolio'=>$portfolio])->name('home');
Route::view("about","about")->name('about');
Route::view("contact","contact")->name('contact');
Route::view("portfolio","portfolio")->name('portfolio');



