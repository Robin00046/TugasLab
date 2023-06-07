<!DOCTYPE html>
<html lang="en">

<head>

    @include('sb2_admin.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @role('Admin')
        @include('sb2_admin.sidebar.sidebar_admin')
        @endrole
        @role('Lab')
        @include('sb2_admin.sidebar.sidebar_Lab')
        @endrole

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('sb2_admin.header')

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('sb2_admin.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('sb2_admin.js')

</body>

</html>