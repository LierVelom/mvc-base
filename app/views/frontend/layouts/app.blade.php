<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Homepage' }}</title>
    @include('frontend.layouts.headers')
</head>
<body>
    @include('frontend.partials.navbar')
    <div class="container">
        <div class="content">
            @yield('content')
        </div>    
    </div>
    @include('frontend.layouts.scripts')
    @yield('scripts')
</body>
</html>