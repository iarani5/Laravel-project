<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">

    <?= Html::style('css/bootstrap.min.css', ['media' => 'screen', 'type' => null]);?>

    <?= Html::style('css/estilos.css', ['media' => 'screen', 'type' => null]);?>
    @yield('styles')
</head>
<body>
    <nav class='cl-effect-11'>
        
    </nav>

    <div class="container">
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>