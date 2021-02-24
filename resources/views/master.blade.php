<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>count !</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    @livewireStyles
</head>
<body style="background: #f6f6f6; padding: 0 10px;">


    <h1 style="text-align: center; margin-bottom: 30px; margin-top: 30px;">
        How many WTF you said?
    </h1>
    @yield('content')

    @livewireScripts
</body>
</html>
