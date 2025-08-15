<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FIJADA - Forum International de la Jeunesse Africaine</title>
<!-- Styles / Scripts -->
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
    <script src="https://cdn.tailwindcss.com"></script>
@endif
<script src="https://cdn.jsdelivr.net/npm/@heroicons/react/outline"></script>
<link rel="icon" href="images/LOGO FIJADA.png" type="image/x-icon">
