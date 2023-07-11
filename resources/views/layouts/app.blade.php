<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @livewireStyles


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
   
    <main>
        @yield('content')
    </main>

    @livewireScripts

</body>
</html>