<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EduManager') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <!-- Bootstrap 5 CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f4f6f9;
        }
    </style>
</head>

<body class="font-sans antialiased bg-light">
    <x-banner />

    <div class="min-h-screen">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="row g-4">
                <!-- Left Sidebar -->
                <div class="col-12 col-lg-3 col-xl-2">
                    <div class="sticky-lg-top" style="top: 1rem; z-index: 100;">
                        <x-sidebar />
                    </div>
                </div>

                <!-- Right Side Table & Dashboard Content -->
                <div class="col-12 col-lg-9 col-xl-10">
                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="bg-white shadow-sm border-bottom">
                            <div class="container-fluid py-3 px-4">
                                {{ $header }}
                            </div>
                        </header>
                    @endif

                    <!-- Page Content -->
                    <main class="py-4">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>


    </div>

    @stack('modals')
    @livewireScripts

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>