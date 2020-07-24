<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>リアルタイムトレンド</title> 
        <link href="css/index.css" rel="stylesheet">
    </head>
    <body>
<!-----------------------------header----------------------------->
        <div class="header">
            <h1>リアルタイムトレンド</h1>
        </div>
<!-------------------------------main----------------------------->
      @yield('content')
<!---------------------------------------------footer---------------------------------------->
        <div class="footer">
            <p>©️2020 c-kusuda</p>
        </div>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <div><a href="/admin/product">管理機能へ</a></div>
    </body>
</html>