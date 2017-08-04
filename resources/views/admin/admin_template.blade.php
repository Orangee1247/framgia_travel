<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Framgia Trip</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{ HTML::style('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('bower_components/font-awesome/css/font-awesome.min.css') }}
    {{ HTML::style('bower_components/Ionicons/css/ionicons.min.css') }}
    {{ HTML::style('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css') }}
    {{ HTML::style('bower_components/AdminLTE/dist/css/AdminLTE.min.css') }}
    {{ HTML::style('bower_components/AdminLTE/dist/css/skins/skin-blue.min.css') }}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
@include('admin.header')

<!-- Sidebar -->
@include('admin.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Welcome <b><em>{{ Auth::user()->name }}</em></b>
                <small>{{ $page_description or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('contents')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('admin.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
{{ HTML::script('bower_components/Respond/dest/respond.min.js') }}
{{ HTML::script('bower_components/Html5shiv/dist/html5shiv.min.js') }}
{{ HTML::script('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}
{{ HTML::script('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('bower_components/AdminLTE/dist/js/app.min.js') }}
{{ HTML::script('bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}
{{ HTML::script('bower_components/AdminLTE/plugins/fastclick/fastclick.js') }}
{{ HTML::script('bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}
{{ HTML::script('bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js') }}
{{ HTML::script('bower_components/AdminLTE//dist/js/demo.js') }}
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#logout-1').on('click', function () {
            $('#logout-form').submit();
        });
        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
</body>
</html>