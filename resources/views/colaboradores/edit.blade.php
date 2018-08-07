@extends('adminlte::layouts.app')
@section('contentheader_title')
    Perfil do Colaborador
@endsection
24
@section('main-content')
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle"
                             src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                        <h3 class="profile-username text-center">{{ $colaborador->name }}</h3>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Email</b> <a class="pull-right">{{ $colaborador->email }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Password</b> <a class="pull-right">{{ $colaborador->password }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection