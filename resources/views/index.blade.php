<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Magic Room</title>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyD3J7gJb9WgxkAiNRJ6r_hRw---SSRC2ZE&language=ja"></script>

        <style>
        html { height: 100% }
        body { height: 100% }
        #map {
  height: 400px;
  width: 600px;
}
        </style>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>


      <!-- content -->
      <div id="content">
        <div id="title">
          <a href="/sns/public"><h1 id="main_title">Magic Room</h1></a>
        </div>
        <div id="link">
          <a href="magic_bar">magic bar</a>
          <a href="mypage">mypage</a>
        </div>
        <div id="writing">
          <?php foreach($movies as $value):  ?>
            <div class="thumb">
              <p id="movie_title"><a href="movie/{{$value->id}}">{{ $value->text }}</a></p>
              <a href="movie/{{$value->id}}"><img src="http://img.youtube.com/vi/{{$value->movie}}/default.jpg" height="140" width="220"></a>
              <p>{{ $value->time }}</p>
          </div>
    <?php endforeach; ?>
        </div>

        <!-- <td class="d-none d-md-table-cell"><a class="btn btn-success" href="http://localhost/sample/public/drinks/list/makerorm/{{$value->id}}">詳細ページ</a></td>
        <form  method="POST" action="http://localhost/sample/public/drinks/list/destroyorm/{{$value->id}}">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="削除" class="btn btn-danger">
      </form>
    </td> -->


      </div>






        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
    </body>
</html>
