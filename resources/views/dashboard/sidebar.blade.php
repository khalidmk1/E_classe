<link rel="stylesheet" href="{{ URL::asset('css/dashboard_sidebare.css') }}">
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ URL::asset('avatars/' . auth()->user()->avatar) }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->first_name . '' . auth()->user()->last_name }}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    {{--   HOME PAGE --}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::asset('dashboard') }}" class="nav-link active">
                                <img src="{{ URL::asset('https://cdn-icons-png.flaticon.com/512/25/25694.png') }}"
                                    class="icon_home_dashboard position-relative " alt="#">
                                <p class="ml-4 ">Home</p>
                            </a>
                        </li>
                    </ul>
                    {{--   HOME PAGE --}}
                    {{--   Profile PAGE --}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::asset('profile') }}" class="nav-link active">
                                <img src="{{ URL::asset('img/navbar_login_icon.png') }}"
                                    class="icon_home_dashboard position-relative " alt="#">
                                <p class="ml-4 ">Profile</p>
                            </a>
                        </li>
                    </ul>
                    {{--   Profile PAGE --}}


                   {{--  Navigate --}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::asset('navigate') }}" class="nav-link active">
                                <img src="{{ URL::asset('img/navbar_login_icon.png') }}"
                                    class="icon_home_dashboard position-relative " alt="#">
                                <p class="ml-4 ">Navigate</p>
                            </a>
                        </li>
                    </ul>
                     {{--  Navigate --}}

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->
