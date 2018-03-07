<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ESTUDIO. ADMIN | @yield('title', 'ESTUDIO. ADMIN')</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ theme('backend/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ theme('backend/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ theme('backend/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ theme('backend/css/style.css') }}" rel="stylesheet">
    <!-- <link href="{{ theme('backend/css/table.css') }}" rel="stylesheet"> -->

    <!--  You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ theme('backend/css/themes/all-themes.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ theme('backend/plugins/bootstrap-select/css/bootstrap-select.css') }} " rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{ theme('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">


    <script>
        $(document).ready(function() {
          var title = '';
          $("#title").bind('blur', function() {
            title = $(this).val();
                title = title.replace(/\s+/g,'-').replace(/[^a-zA-Z0-9-]/g,'').toLowerCase(); 
            $("#slug").val(title);
          });
        });

        $(document).ready(function() {
            var name = '';
          $("#name").bind('blur', function() {
            name = $(this).val();
                name = name.replace(/\s+/g,'-').replace(/[^a-zA-Z0-9-]/g,'').toLowerCase(); 
            $("#uri").val(name);
          });
        });
    </script>

</head>

<body class="login-page bg-teal">

    @yield('content')
    
    <!-- Jquery Core Js -->
    <script src="{{ theme('backend/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ theme('backend/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ theme('backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ theme('backend/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ theme('backend/plugins/node-waves/waves.js')}}"></script>

    <!-- TinyMCE -->
    <script src="{{ theme('backend/plugins/tinymce/tinymce.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ theme('backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ theme('backend/js/admin.js')}}"></script>
    <script src="{{ theme('backend/js/pages/forms/editors.js') }}"></script>
    <script src="{{ theme('backend/js/pages/tables/jquery-datatable.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{ theme('backend/js/demo.js')}}"></script>

    
</body>

</html>