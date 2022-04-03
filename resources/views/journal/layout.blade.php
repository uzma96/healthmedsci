<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <title>International Journal Of Pharmaceutical Sciences</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="medical.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="International Journal of Diabetes Obesity and Cancer"/>
    @include('journal.partials.style')

    @yield('css')
</head>

<body>
<!-- header -->
<div class="pre-loading" hidden><div class="loading"><div>Loading…</div></div></div>
@include('journal.partials.header')
<!-- login -->
@yield('content')

<!-- footer -->
@include('journal.partials.footer')
<!-- //footer -->
@include('journal.partials.script')

@yield('js')

</body>
</html>