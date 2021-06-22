<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Страница пользователя</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    </head>
    <body class="hold-transition sidebar-mini">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="{{ $page->profile_photo_url }}"
                                         alt="{{ $page->name }}">
                                </div>
                                <p class="text-center">{{$page->name}}</p>
                                <p class="text-muted text-center">Статус</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Обо мне</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i>Образование</strong>
                                <p>{{$page->about}}</p>
                                <hr>
                                <strong><i class="fas fa-map-marker-alt mr-1"></i>Год рождения</strong>
                                <p>{{$page->birth}}</p>
                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1"></i>Навыки</strong>
                                <p>
                                    <span class="tag tag-danger">{{$page->skills}}</span>
                                </p>
                                <hr>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2 col-md-12">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a>
                                    </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <!-- Post -->
                                        <div class="post">
                                            <div class="user-block">
                                                <span class="username"></span>
                                            </div>
                                            <!-- /.user-block -->

                                        </div>
                                        <!-- /.user-block -->
                                        @if($userId = $page->id)
                                            @foreach($page->posts as $item)
                                                <div class="post">
                                                    <div class="user-block">
                                                        <img class="profile-user-img img-fluid img-circle"
                                                             src="{{ $page->profile_photo_url }}"
                                                             alt="{{ $page->name }}">
                                                        <span class="username">
                          <a href="#">{{$page->name}}</a>                        </span>
                                                        <span class="description">Запись сделана в - 7:30 PM today</span>
                                                    </div>
                                                    <ul>
                                                        <li>{{$item->essence}}</li>
                                                    </ul>
                                                </div>
                                        @endforeach
                                    @endif
                                    <!-- /.tab-content -->
                                    </div><!-- /.card-body -->

                                </div>

                                <!-- /.card -->
                            </div>

                            <!-- /.col -->
                        </div>


                    </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    </body>
    </html>


</x-app-layout>

