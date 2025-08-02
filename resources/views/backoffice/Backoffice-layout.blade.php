<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Backoffice-Agence des deux lacs')</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <div class="container-choice-backoffice">
        <div class="dashboard">
            <a href="{{route('backoffice.Edit')}}">Accedez au Dashboard</a>
        </div>
        <div class="news">
            <a href="{{route('backoffice.Edit-news')}}">Modification revue d'actu </a>
        </div>
        <div class="selection">
            <a href="{{route('backoffice.Edit-selection')}}">Modifier la sélection</a>
        </div>
    </div>
    <main class="admin-content">
        @yield('content')
    </main>
    <div class="return-btn">
        <a class="back-btn" href="{{route('admin.dashboard')}}">Retour au backoffice</a>
        <a class="back-btn" href="{{ url('/') }}">Retour vers le site</a>
    </div>
</body>

</html>