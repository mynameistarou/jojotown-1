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
        <div class="table">
            <ul>
                <li><a href="#man">man</a></li>
                <li><a href="#woman">woman</a></li>
                <li><a href="#item">item</a></li>
                <li><a href="#color">color</a></li>
            </ul>
        </div>
<!-------------------------------main----------------------------->
        @yield('content')
<!---------------------------------------------footer---------------------------------------->
        <div class="footer">
            <p>©️2020 c-kusuda</p>
        </div>
        
    </body>
</html>