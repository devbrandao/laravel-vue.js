<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edjo Tasks - Laravel + Vue.js</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {csrfToken: '{{ csrf_token() }}'}
    </script>
</head>
<body>
<nav class="navbar">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">
            Edjo Tasks - Laravel + Vue.js
        </a>
    </div>
</nav>
<div id='app' class="container">
    <task-list></task-list>
</div>
<script src="js/app.js"></script>
</body>
</html>
