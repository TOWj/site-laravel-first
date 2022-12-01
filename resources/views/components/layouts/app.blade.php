<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>
        @section('title')
            Главная страница
        @show
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <x-panels.styles/>

    <x-panels.icons.favicon/>

</head>
<body>

<x-panels.header/>

@yield('content')

<x-panels.footer/>

<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<x-panels.scripts/>

</body>
</html>
