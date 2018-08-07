<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('gestao/colaboradores') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.colaboradores') }}</span></a></li>
            <li class="active"><a href="{{ url('gestao/fornecedores') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.fornecedores') }}</span></a></li>
            <li class="active"><a href="{{ url('gestao/clientes') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.clientes') }}</span></a></li>
            <li class="active"><a href="{{ url('gestao/produtos') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.produtos') }}</span></a></li>
            <li class="active"><a href="{{ url('gestao/encomendas') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.encomendas') }}</span></a></li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
