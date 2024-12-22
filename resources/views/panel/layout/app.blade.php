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
    lang="tr"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />


    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="{{asset('images/note_logo.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset("adminPanel/assets/vendor/fonts/boxicons.css")}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset("adminPanel/assets/vendor/css/core.css")}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset("adminPanel/assets/vendor/css/theme-default.css")}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset("adminPanel/assets/css/demo.css")}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset("adminPanel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css")}}" />

    <link rel="stylesheet" href="{{asset("adminPanel/assets/vendor/libs/apex-charts/apex-charts.css")}}" />

    @yield("style")
    <!-- index css section("style.css")-->


    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset("adminPanel/assets/vendor/js/helpers.js")}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset("adminPanel/assets/js/config.js")}}"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">



            <img src="{{asset('images/note_logo.png')}}"  style="width: 150px; margin-bottom: 4px; margin-left: 25px; ">

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="{{route('note.index')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-notepad"></i>
                        <div data-i18n="Layouts">Notlarım</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{route('note.createPage')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-edit"></i>
                        <div data-i18n="Analytics">Not Oluştur</div>
                    </a>
                </li>

                <!-- Layouts -->
                <li class="menu-item">
                    <a href="{{route('panel.categories.index')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-grid"></i>
                        <div data-i18n="Layouts">Kategoriler</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('panel.categoryCreatePage')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-customize"></i>
                        <div data-i18n="Layouts">Kategori Oluştur</div>
                    </a>
                </li>


            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">


            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                @yield("content")
                </div>
                <!-- / Content -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

<!-- / Layout wrapper -->



<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset("adminPanel/assets/vendor/libs/jquery/jquery.js")}}"></script>
<script src="{{asset("adminPanel/assets/vendor/libs/popper/popper.js")}}"></script>
<script src="{{asset("adminPanel/assets/vendor/js/bootstrap.js")}}"></script>
<script src="{{asset("adminPanel/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js")}}"></script>

<script src="{{asset("adminPanel/assets/vendor/js/menu.js")}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset("adminPanel/assets/vendor/libs/apex-charts/apexcharts.js")}}"></script>

<!-- Main JS -->
<script src="{{asset("adminPanel/assets/js/main.js")}}"></script>

<!-- Page JS -->
<script src="{{asset("adminPanel/assets/js/dashboards-analytics.js")}}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
