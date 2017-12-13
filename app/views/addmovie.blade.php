<?php
    $tittle= 'Add New movie' ;
 ?>
@extends('layouts.main')
@section('content')
    <div class="container">
        <h2>Add movies</h2>
        <div class="panel panel-default">
            <div class="panel-heading right">
                <a href="addmovie"><button type="button" class="btn btn-success">Add new movie</button></a>
            </div>
            <div class="panel-body">
                <form method="post">
                  <div class="form-group">
                    <label for="name">Movie name:</label>
                    <input type="text" name="name" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="release">Release date:</label>
                    <input type="date" name="release" class="form-control" id="release">
                  </div>
                  <div class="form-group">
                    <label for="language">Language:</label>
                    <select class="form-control" name="language">
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                        <option value="another">Another</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop
