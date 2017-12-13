<?php
    $tittle= 'Available movies' ;
 ?>
@extends('layouts.main')
@section('content')
    <div class="container">
        <h2>List of movies</h2>
        <div class="panel panel-default">
            <div class="panel-heading right">
                <a href="addmovie"><button type="button" class="btn btn-success">Add new movie</button></a>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Release date</th>
                            <th>Language</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movie as $movies)
                        <tr>
                            <td>{{$movies->name}}</td>
                            <td>{{$movies->release}}</td>
                            <td>{{$movies->language}}</td>
                            <td><a href="#"><button type="button" class="btn btn-info">edit</button></a><a href="#"><button type="button" class="btn btn-danger">Erase</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
