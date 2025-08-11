<!DOCTYPE html>
<html lang="fr">
<head>
    @include('partials.header')
</head>
<body class="bg-gray-50">
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>
