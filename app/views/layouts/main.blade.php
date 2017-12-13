<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{$tittle}}</title>
        <meta charset="UTF-8">
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/styles.css ') }}
    </head>
    <body>
        <section>
            <div class="container">
                <div class="col-md-6">
                    {{ HTML::image('img/logo.jpg', '',['style' => 'width:120px;']) }}
                </div>
                <div class="col-md-6">
                    <h2>{{$tittle}}</h2>
                </div>

            </div>
            @yield('content')
        </section>
    </body>
</html>
