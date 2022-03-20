<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if($title != null)
        <title>Londri - {{ $title }}</title>
    @else
        <title>Londri Dan</title>
    @endif
    <x-link></x-link>
    <link rel="shortcut icon" href="assets/img/telegram.png" type="image/x-icon">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
        </div>
        <x-navbar></x-navbar>
        <x-sidebar></x-sidebar>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1 class="m-0">{{ $title }}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </section>
        </div>

        <x-footer></x-footer>
    </div>
    {{-- <a href=".." class="btn btn-danger">Logout</a> --}}
    <x-script></x-script>
</body>
</html>