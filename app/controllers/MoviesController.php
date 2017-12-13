<?php

class MoviesController extends \BaseController
{

    public function create()
    {
        $movie = new Movies;
        $movie->name  = Input::get('name');
        $movie->release  = Input::get('release');
        $movie->language  = Input::get('language');
        $movie->save();
        return Redirect::to('moviesdash');
    }



}
