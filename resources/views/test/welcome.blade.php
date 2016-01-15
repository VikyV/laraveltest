<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5 WElcomE</div>
                <bold>
                <a href="{{ route('route_test_tab') }}">LIEN VERS TEST TABLEAU</a></bold>
                <br>
                <a href="{{ route('url_vers_cgv') }}">LIEN VERS CGV</a>
                <a href="{{ route('url_vers_team') }}">LIEN VERS Equipe</a>
            </div>
        </div>
    </body>
</html>
