<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Titre de la page -->
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>

    <!-- En-tête -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <!-- Ajoutez ici d'autres éléments de navigation si nécessaire -->
            
        </nav>
    </header>

    <!-- Contenu de la page -->
    <main>
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer>
        <!-- Ajoutez ici le contenu du pied de page si nécessaire -->
    </footer>

    <!-- Bootstrap JS (facultatif, dépend de vos besoins) -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
