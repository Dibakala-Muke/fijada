<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FIJADA - Forum International de la Jeunesse Africaine</title>
<!-- Styles / Scripts -->
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @theme {
            --font-sans: "Instrument Sans", ui-sans-serif, system-ui, sans-serif,
                "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                "Noto Color Emoji";
            --color-fijada-green: #30b753;
            --color-fijada-blue: #0d80ff;
            --color-fijada-reseau: #4ebd70;
            --color-fijada-hero: #00000066;
        }
    </style>
@endif
<script src="https://cdn.jsdelivr.net/npm/@heroicons/react/outline"></script>
<link rel="icon" href="images/LOGO FIJADA.png" type="image/x-icon">
