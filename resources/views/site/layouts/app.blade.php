<!DOCTYPE html>

<!-- 
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>ENSA Safi</title>
  <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
  <meta name="keywords"
    content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/styles-merged.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>
  <div class="probootstrap-page-wrapper">
    @include('site.layouts.navbar')

    @yield('content')

    {{--@include('site.layouts.apply')--}}
    @include('site.layouts.footer')
  </div>
  <!-- END wrapper -->

  <script src="{{asset('js/scripts.min.js')}}"></script>
  <script src="{{asset('js/main.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>