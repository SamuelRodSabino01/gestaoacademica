<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gestão Acadêmica')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <header>
        <h1>Gestão Acadêmica</h1>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
