<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('users.index') }}"><i class="fa fa-user fa-fw"></i> Usuários</a>
            </li>
            <li>
                <a href="{{ route('doctors.index') }}"><i class="fa fa-user-md fa-fw"></i> Médicos</a>
            </li>
            <li>
                <a href="{{ route('patients.index') }}"><i class="fa fa-users fa-fw"></i> Pacientes</a>
            </li>
            <li>
                <a href="{{ route('schedulings.index') }}"><i class="fa fa-calendar fa-fw"></i> Agendamentos</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->