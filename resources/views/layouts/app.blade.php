<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
</head>
<body>

    @include('components.navbar.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer.footer')
    <a href="#" class="chat-button" target="_blank">
        <span class="chat-text">Contact us on WhatsApp</span>
        <i class="bi bi-whatsapp"></i>
    </a>

</body>
</html>
