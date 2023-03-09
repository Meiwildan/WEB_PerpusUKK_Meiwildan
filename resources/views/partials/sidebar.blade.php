<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block" style="background-color: #6dd5ed">
            <div class="logo"  style="background-color:#6dd5ed">
                <a href="#">
                    <img src="../../fotoBuku/reado.png" width="180" alt="..." />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ route ('home') }}" style="color:white">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route ('books.index')}}" style="color:white">
                                <i class="fas fa-book"></i>Data Buku</a>
                        </li>
                        <li>
                            <a href="{{ route ('books.create')}}" style="color:white">
                                <i class="fas fa-book"></i>Tambah Buku</a>
                        </li>
                       
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->