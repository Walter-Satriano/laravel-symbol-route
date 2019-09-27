<?php

/*
  Generare nuovo progetto laravel con 2 endpoint:
  - /cube/number
  - /cube/letter

  Nel primo troveremo 10 quadrati con le 10 cifre (0~9) su sfondo arancione
  Nel secondo avremo le 25 quadrati con le lettere dell'alfabeto (A~Z) su sfondo rosso

  Header e footer di enbrambe le pagine devono riportare il contenuto dei
  quadrati (lettere o numeri) con lo stesso colore di sfondo dei quadrati,
  fermo restando che devono essere condivisi tra le 2 pagine
  attraverlo la tecnica yield/extends
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/cube/number", "MyController@getNumbersCube");
Route::get("/cube/letter", "MyController@getLettersCube");
