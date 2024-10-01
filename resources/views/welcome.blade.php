<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas con Vue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    @vite(['resources/js/app.js'])
</head>
<body>
<div id="app">
    <!-- Aquí llamas al componente lista-frutas -->
    <example-component></example-component>
    <reverso></reverso>
    <fondo></fondo>


</div>

<a href="{{ route('comoponentes') }}" class="btn btn-primary">Ir a Componente</a>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
