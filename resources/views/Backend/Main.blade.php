<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('backend.includes.css')
</head>

<body>

    @include('Backend.Includes.Header');
    @include("Backend.Includes.aside");
    @include("Backend.Includes.nav");

    {{-- body --}}
    
    @yield('content');

    {{-- /body --}}
    
    @include("Backend.Includes.Footer");

    @include("Backend.includes.js")
</body>

</html>