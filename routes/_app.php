<?php

app()->get('/cafes/editar/{id}', 'CafesController@editar');

app()->get('/', 'CafesController@index');
app()->get('/cafes/crear', 'CafesController@crear');
app()->get('/cafes/{id}', 'CafesController@borrar');
app()->post('/cafes/{id}', 'CafesController@actualizar');


app()->post('/cafes', 'CafesController@agregar');


app()->get('/home', 'TestsController@index');

app()->get('/test', 'TestsController@test');
