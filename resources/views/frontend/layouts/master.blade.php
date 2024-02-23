<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Board</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    @include('frontend.partials.assets.css')
    @livewireStyles
    @livewireScripts

</head>

<body>

    @include('frontend.partials.header')

    @yield('frontend.content')

    @include('frontend.partials.footer')

    @include('frontend.partials.assets.js')

</body>

</html>
