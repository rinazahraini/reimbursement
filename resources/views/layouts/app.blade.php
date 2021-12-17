<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reimbursement - @yield('title')</title>

    {{-- Tailwind Library  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    
    @livewireStyles

</head>

<body>

    @yield('content')

    <!-- AlpineJS Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

    @livewireScripts

</body>

</html>
