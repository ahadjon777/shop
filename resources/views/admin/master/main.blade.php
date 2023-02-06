<!doctype html>
<html lang="en">
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
>
@include('admin.partials.header')
<body>


{{--Menu--}}
@include('admin.partials.menu')
{{--end Menu--}}



<div class="layout-page">

    <!--navbar-->
    @include('admin.partials.navbar')
    <!--end navbar-->

    <div class="content-wrapper">

        {{--Content wrapper--}}
        @yield('admin.partials.content')
        {{--Content wrapper--}}

        {{--footer--}}
        @include('admin.partials.footer')
        {{--end footer--}}
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

</div>


{{--js footer--}}
@include('admin.partials.js')
{{--end js footer--}}

</body>
</html>
