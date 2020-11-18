<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">MENU DE NAVEGAÇÃO</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="/" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="/profile" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                        <span class="pcoded-mtext">Dados Pessoais</span>
                    </a>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="{{route('recipients.index')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                        <span class="pcoded-mtext">Destinatário</span>

                    </a>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="{{ route('sender.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-fax"></i></span>
                        <span class="pcoded-mtext">Rementente</span>

                    </a>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="{{route('merchandises.index')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                        <span class="pcoded-mtext">Mercadoria</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="{{ route('wagons.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                        <span class="pcoded-mtext">Vagao</span>

                    </a>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="{{ route('tarins.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-american-sign-language-interpreting"></i></span>
                        <span class="pcoded-mtext">Comboio</span>

                    </a>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="{{ route('travels.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-balance-scale"></i></span>
                        <span class="pcoded-mtext">Viagem</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="{{ route('employees.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-american-sign-language-interpreting"></i></span>
                        <span class="pcoded-mtext">Funcionários</span>
                    </a>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-ticket"></i></span>
                        <span class="pcoded-mtext">Realizacao</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="{{ route('passagers.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-unlock-alt"></i></span>
                        <span class="pcoded-mtext">Passageiros</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-unlock-alt"></i></span>
                        <span class="pcoded-mtext">Transporte</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="{{ route('tickets.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-unlock-alt"></i></span>
                        <span class="pcoded-mtext">Bilhete</span>
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
