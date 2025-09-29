    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="dashboard.php" class="brand-link">

            <span class="brand-text font-weight-light">RTBS | Admin </span>
        </a>
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../dist/img/manager.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->username }}</a>
                </div>
            </div>



            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>


                    @hasrole('superadmin')
                        <!--Subadmins--->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Sub-Admins
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="{{ route('subadmin') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('managesubadmin') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Manage</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @else
                    @endhasrole



                    <!----- Tables--->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>Tables
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="{{ route('addtable') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('managetable') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> Manage</p>
                                </a>
                            </li>



                        </ul>
                    </li>




                    <!--Enrollment--->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Bookings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="{{ route('newBooking') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('accBooking') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Accepted</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('rjcBooking') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Rejected</p>
                                </a>
                            </li>



                            <li class="nav-item">
                                <a href="{{ route('allBooking') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All</p>
                                </a>
                            </li>
                        </ul>
                    </li>




                    <!--Report--->
                    <li class="nav-item">
                        <a href="{{ route('bwdatesreport') }}" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                B/w Dates Report
                            </p>
                        </a>
                    </li>





                    <!--Profile--->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>
                                Account Settings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="{{ route('profil') }}" class="nav-link">
                                    <i class="far fa-user nav-icon"></i>
                                    <p>Profile</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('changepassword') }}" class="nav-link">
                                    <i class="fas fa-cog nav-icon"></i>
                                    <p>Change Password</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <form role="form" action="{{ route('logout') }}" method="POST" id="logout-form">
                                    @csrf
                                    <button type="submit" class="nav-link">
                                        <i class="fas fa-sign-out-alt nav-icon"></i>
                                        <p>Logout</p>
                                    </button>
                                </form>
                            </li>

                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
