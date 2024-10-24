<!DOCTYPE html>
<html lang="EN">
{{-- include headu--}}
@include('inc.head')

<body>

{{-- include navbaru--}}
    @include('inc.nav')

    <div class="container py-4">
        @yield('content')
    </div>
    
{{-- include footeru--}}
    @include('inc.footer')
</body>

</html>
