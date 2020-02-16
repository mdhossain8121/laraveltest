<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {
                color: green;
            }
            body {
                color: blue;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>
    </head>
    <body>
        @yield('content1')
        @yield('content2')        
    </body>
</html>
