<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tieu de - Thiết kế website, Xây dựng ứng dụng di động, Tiếp thị trực tuyến">
    <meta name="author" content="">
    <title>Admin NovaIO</title>
    <base href="{{ asset('') }}">
    <!-- Bootstrap Core CSS -->
    <link href="admin_assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="admin_assets/stylesheet/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin_assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="admin_assets/style.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="admin_assets/stylesheet/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="admin_assets/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="admin_assets/bootstrap/css/dataTables.responsive.css" rel="stylesheet">
    <link href="/img/assets/favicon.jpg" rel="icon" type="image/png"> 
    <script type="text/javascript" language="javascript" src="{!! asset('admin_assets/js/plugin/ckeditor/ckeditor.js') !!}" ></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    
</head>

<body>

    <div id="wrapper">

        @include('admin.layout.header')

        @yield('content')

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_assets/bootstrap/js/jquery.min.js"></script>
    <script src="admin_assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin_assets/bootstrap/js/metisMenu.min.js"></script>
    <script src="admin_assets/dist/js/sb-admin-2.js"></script>
    <script src="admin_assets/bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="admin_assets/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    setTimeout(function(){ 
        $('.alert').slideUp();
    }, 3000);
    </script>
 
    @yield('script')
</body>

</html>
