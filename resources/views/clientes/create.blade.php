@extends('adminlte::layouts.app')
@section('contentheader_title')
    Criar novo cliente
@endsection

@section('main-content')
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">

                        {!! Form::open(['url' => 'gestao/clientes/store']) !!}

                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'nome', '', ['class' => 'form-control', '', 'placeholder' => 'Nome']) !!}

                        {!! Form::label('nif', 'Nif') !!}
                        {!! Form::input('text', 'nif', '', ['class' => 'form-control', '', 'placeholder' => 'Nif']) !!}

                        {!! Form::label('morada', 'Morada') !!}
                        {!! Form::input('text', 'morada', '', ['class' => 'form-control', '', 'placeholder' => 'Morada']) !!}

                        {!! Form::label('telemovel', 'Telemovel') !!}
                        {!! Form::input('text', 'telemovel', '', ['class' => 'form-control', '', 'placeholder' => 'Telemovel']) !!}

                        {!! Form::label('email', 'Email') !!}
                        {!! Form::input('text', 'email', '', ['class' => 'form-control', '', 'placeholder' => 'Email']) !!}

                        {!! Form::submit('Criar',['class' =>'btn btn-primary']) !!}

                        {!! Form::close() !!}


                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection