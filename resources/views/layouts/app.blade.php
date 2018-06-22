<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title>Nickname Maker</title>
    
            <!-- Bootstrap -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
            <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
            <!--google font-->
            <link href="https://fonts.googleapis.com/css?family=Eater" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Eater|Open+Sans+Condensed:300|Quicksand" rel="stylesheet">
            <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet" />
            <!--teitter icon-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
        </head>
        
        <body>
            <div id="container">
            @yield('content')
            </div>
        </body>
    </html>

