@extends('index')
@section('content')
<!--star slider-->
@include('slider')
<!--end slider-->
<!--star features-->
@include('features')
<!--end features-->
<!--start section our team-->
@include('ourTeam')
<!--end  section our team-->
@include('services')
<!-- star à propos de l'équipe-->
@include('apropos')
<!-- end à propos de l'équipe-->
<!-- start section contact-->
@include('contact')
<!-- end section contact-->
<!--start section flags-->
@include('flags')
<!--end section flags-->
<!--start section loading-->
{{--<section class="loading-overlay">--}}
    {{--<div class="sk-cube-grid">--}}
        {{--<div class="sk-cube sk-cube1"></div>--}}
        {{--<div class="sk-cube sk-cube2"></div>--}}
        {{--<div class="sk-cube sk-cube3"></div>--}}
        {{--<div class="sk-cube sk-cube4"></div>--}}
        {{--<div class="sk-cube sk-cube5"></div>--}}
        {{--<div class="sk-cube sk-cube6"></div>--}}
        {{--<div class="sk-cube sk-cube7"></div>--}}
        {{--<div class="sk-cube sk-cube8"></div>--}}
        {{--<div class="sk-cube sk-cube9"></div>--}}
    {{--</div>--}}
{{--</section>--}}



<!--end section loading-->
@endsection