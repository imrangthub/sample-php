<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>@yield('title')</title>

    {!!Html::style('crudAssets/css/beauty.css') !!}

</head>
<body>
<div id="farouter">


@yield('content');


@yield('footer');

</div>


</body>

</html>