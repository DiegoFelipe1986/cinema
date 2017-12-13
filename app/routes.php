<?php

Route::post('login', 'AuthController@postLogin');

Route::get('/', function () {
    $movie = Movies::all();
    $movie2 = Movies::whereIdCinema(1);
    return View::make('dashboard')->with( 'movie', $movie)->with( 'movie2', $movie2);
});
Route::get('moviesdash', function () {
    $movie = Movies::all();
    return View::make('moviesdash')->with( 'movie', $movie);
});
Route::get('addmovie', function () {
    return View::make('addmovie');
});
Route::get('addmovie', function () {
    return View::make('addmovie');
});
Route::post('addmovie', 'Moviescontroller@create');
/*
Route::get('general', function () {
    $puntos_individuales = DB::select("Call spr_get_puntos_individuales()");
    return View::make('general')->with('puntos_individuales', $puntos_individuales);
});

Route::get('login', function () {
    return View::make('login');
});

Route::get('logOut', 'AuthController@logOut');

Route::post('total_indvidual', function () {
    $puntos_individuales = DB::select("Call spr_get_puntos_individuales()");
    return Response::json($puntos_individuales);
});

Route::post('total_grupos', function () {
    $puntos_grupos = DB::select("Call spr_puntos_grupales()");
    return Response::json($puntos_grupos);
});

Route::group(['before' => 'auth'], function () {
    Route::get('hoyos', function () {
        $hoyos = Auth::user()->hoyo_id;
        return View::make('hoyos');
    });

    Route::post('hoyos', 'HoyosController@datos');

    Route::get('ingreso-puntos/{ingresopuntos}', array('as' => 'ingreso-puntos', function ($ingresopuntos) {
        $jugadores = DB::select("Call spr_get_jugadores_hoyo('".Auth::user()->hoyo_id."','".$ingresopuntos."' )");
        return View::make('ingreso-puntos')->with('jugadores', $jugadores);
    }));

    Route::post('ingreso-puntos/{ingresopuntos}', 'HoyosController@save');


    Route::get('admin', function () {
        $t_grupos = DB::select("select * from tb_grupos");
        return View::make('admin')->with('t_grupos', $t_grupos);
    });

    Route::get('editar-grupos', function () {
        $grupos = Grupos::all();
        return View::make('editar-grupos')->with('grupos', $grupos);
    });

    Route::get('nuevo-grupo', function () {
        $grupos = Grupos::all();
        return View::make('nuevo-grupo')->with('grupos', $grupos);
    });

    Route::get('nuevo-grupo/{ingresopuntos}', array('as' => 'nuevo-grupo', function ($ingresopuntos) {
        return View::make('nuevo-grupo')->with('grupo_id', $ingresopuntos);
    }));

    Route::post('nuevo-grupo', 'GruposController@store');

    Route::get('valiGrupo', function () {
        $grupo = DB::select("Call spr_get_grupos_jugadores(".Input::get('grupo', '').")");
        return Response::json($grupo);
        ;
    });

    Route::get('pass', function () {
        return Hash::make('hoyo');
    });


});
Route::get('publicidad', function () {
        return View::make('publicidad1');
    });
Route::get('publicidad-final', function () {
        return View::make('publicidad2');
    });

    */
