<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard Cinema</title>
    <meta charset="UTF-8">
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/styles.css ') }}
  </head>
    <body>
        <section>
            <div class="logo">
                {{ HTML::image('img/logo.jpg', '',['class' => 'logo']) }}
            </div>
            <div class="main-banner col-md-12">
                <div class="main-tittle">
                    <h1>Welcome to Cinema</h1>
                    <h2>Movies place</h2>
                </div>
            </div>
            <div class="container col-md-12 content-text" style="">
                <div class="col-md-6">
                    <h2>MOVIES</h2>
                    <p>Information about movies, name, release date and language.</p>
                    <p><a href="{{'moviesdash'}}">Tell me more >>></a></p>
                </div>
                <div class="col-md-6">
                    <h2>CINEMAS</h2>
                    <p>Name, ubication and movies</p>
                    <p><a href="">Tell me more >>></a></p>
                </div>
            </div>
            <div class="col-md-12" style="margin:30px;;">

            </div>
            <div class="container col-md-12">
            <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">CINEMA 1</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">CINEMA 2</a></li>
                </ul>
            <!-- Tab panes -->
                <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    @foreach ($movie as $movies)
                    <div class="col-md-4" style="border:1px solid #ccc; border-radius:4px;">
                        <h2>{{$movies->name}}</h2>
                        <h3>{{$movies->release}}</h3>
                        <h4>{{$movies->language}}</h4>
                    </div>
                    @endforeach

                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    @foreach ($movie2 as $movies2)
                    <div class="col-md-4" style="border:1px solid #ccc; border-radius:4px;">
                        <h2>{{$movies2->name}}</h2>
                        <h3>{{$movies2->release}}</h3>
                        <h4>{{$movies2->language}}</h4>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>

        </section>
        {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js') }}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </body>
</html>
