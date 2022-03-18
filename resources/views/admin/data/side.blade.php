        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="https://www.applytobest.com/" class="brand-link">
                <img src="{{asset('assets/images/apply-logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; background:#fff;">
                <span class="brand-text font-weight-light">Apply to Best</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="image">
                        <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    @endif
                    <div class="info">
                        <a href="{{route('profile.show')}}" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{route('admin-home')}}" class="nav-link {{Route::is('admin-home')? 'active' : ''}}">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin-contact')}}" class="nav-link {{Route::is('admin-contact')? 'active' : ''}}">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Contact Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin-settings')}}" class="nav-link {{Route::is('admin-settings')? 'active' : ''}}">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>