<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Профиль</title>

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
    <div class="content-wrapper" style="background-color:#EDEEF0;">
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
                                         src="{{ Auth::user()->profile_photo_url }}"
                                         alt="{{ Auth::user()->name }}">
                                </div>

                                <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                                <p class="text-muted text-center">Статус:</p>

                                {{--friends--}}
                                {{--<ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Friends</b> <a class="float-right">13,287</a>
                                    </li>
                                </ul>

                                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>--}}
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
                                <p style="margin-left:5px">
                                    {{Auth::user()->about}}
                                </p>
                                <hr>
                                <strong><i class="fas fa-map-marker-alt mr-1"></i>Год рождения</strong>
                                <p style="margin-left:5px">{{Auth::user()->birth}}</p>
                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1"></i>Навыки</strong>
                                <p style="margin-left:5px">
                                    <span class="tag tag-danger">{{Auth::user()->skills}}</span>
                                </p>
                                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                    <a class="btn btn-outline-success"
                                       href="{{ route('users.edit', Auth::user()->id) }}"
                                       role="button">Редактировать</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2 col-md-12">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Мои
                                            записи</a>
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

                                            <form method="post" action="{{ route('posts.store') }}">
                                                <p style="margin-left:10px">
                                                    Что нового?
                                                </p>
                                                @csrf
                                                <div class="shadow overflow-hidden sm:rounded-md">
                                                    <div class="px-4 py-5 bg-white sm:p-6">
                                                        <input type="text" name="essence" id="description"
                                                               type="text"
                                                               class="form-input rounded-md shadow-sm mt-1 block w-full"
                                                               placeholder=""/>
                                                        @error('description')
                                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div
                                                        class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                        <button
                                                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                                            Опубликовать
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.user-block -->
                                        @if($userId = Auth::user()->id)
                                            @foreach(Auth::user()->posts as $item)
                                                <div class="post">
                                                    <div class="user-block">
                                                        <img class="profile-user-img img-fluid img-circle"
                                                             src="{{ Auth::user()->profile_photo_url }}"
                                                             alt="{{ Auth::user()->name }}">
                                                        <span class="username">
                                                            <a href="#">{{Auth::user()->name}}</a>
                                                            <form class="inline-block"  action="{{ route('posts.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Вы уверены?');">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="submit" style="margin-left:1300%"  class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Удалить">
                                                            </form>
                                                         </span>
                                                    </div>
                                                    <ul>
                                                        <li>{{$item->essence}}</li>
                                                    </ul>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>

                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->

                            </div>

                            <!-- /.card -->
                        </div>

                        <!-- /.col -->
                    </div>


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
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    </body>
    </html>


</x-app-layout>

