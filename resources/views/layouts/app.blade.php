<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /FONTAWESOME -->
    <!-- BOOTSTRAP AND MY STILE -->
    @yield('style')
    <!-- /BOOTSTRAP AND MY STILE -->
</head>

<body>
    @include('shared.header')
    @include('shared.hero')
    <!-- MAIN -->
    <main>
        @yield('main')
        @include('shared.section_icons')
    </main>
    <!-- /MAIN -->
    @include('shared.footer')
</body>

</html>
