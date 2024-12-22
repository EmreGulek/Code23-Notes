
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
    <link rel="icon" type="image/x-icon" href="{{asset("adminPanel/assets/img/favicon/favicon.ico")}}" />

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


<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="box mx-auto my-auto" style="width: 1000px; height: 500px; text-align: center; ">
        <div class="card">
            <div class="card-header">
                <img src="{{asset('images/note_logo.png')}}" alt="" style="width:200px; ">
            </div>
            <div class="card-body">
                <h5 class="card-title">Notlarınız her zaman elinizin altında!</h5>
                <p class="card-text">
                    QuickNote, kişisel notlarınızı güvenle saklamanız, düzenlemeniz ve dilediğiniz zaman erişmeniz için tasarlanmış modern bir not alma platformudur.</p>
                <span>QuickNote ile organize olun, zamanı verimli kullanın! 🌟</span>
                <br >
               <div class="p-4">
                   <a href="http://127.0.0.1:8001/login" class="btn btn-primary">Giriş Yap</a>
                   <a  href="http://127.0.0.1:8001/register" class="btn btn-outline-primary">Kayıt Ol</a>
               </div>
            </div>
        </div>
    </div>
</div>

</body>



</html>
