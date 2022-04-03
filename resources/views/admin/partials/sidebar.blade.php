<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="assets/admin/admin.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->first_name.' '.auth()->user()->last_name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> {{ucfirst(auth()->user()->role)}}</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{Request::is('admin/dashboard')?'active':''}}">
                <a href="admin/dashboard">
                    <i class="fa fa-dashboard"></i>

                    <span>Dashboard</span>
                </a>
            </li>
            @if(Auth::user()->role=='admin')
                <li class="{{Request::is('admin/author')?'active':''}}">
                    <a href="admin/author">
                        <i class="fa fa-user"></i>

                        <span>Author</span>
                    </a>
                </li>
            @endif
            <li class="{{Request::is('admin/journal')?'active':''}}">
                <a href="admin/journal">
                    <i class="fa fa-paragraph"></i>

                    <span>Article</span>
                </a>
            </li>
            <li class="{{Request::is('admin/journal/archive')?'active':''}}">
                <a href="admin/journal/archive">
                    <i class="fa fa-cubes"></i>

                    <span>Article Archive</span>
                </a>
            </li>
            @if(Auth::user()->role == 'admin')
                <li class="{{Request::is('admin/journal/review-report')?'active':''}}">
                    <a href="admin/journal/review-report">
                        <i class="fa fa-list-alt"></i>


                        <span>Review Report</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/notice')?'active':''}}">
                    <a href="admin/notice">
                        <i class="fa fa-newspaper-o"></i>

                        <span>Notice</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/testimonial')?'active':''}}">
                    <a href="admin/testimonial">
                        <i class="fa fa-list"></i>

                        <span>Testimonial</span>
                    </a>
                </li>
                <li class="{{Request::is('admin/page*')?'active':''}}">
                    <a href="admin/page">
                        <i class="fa fa-hand-paper-o"></i>

                        <span>Frontend Page</span>
                    </a>
                </li>

                <li class="{{Request::is('admin/paper-category*')?'active':''}}">
                    <a href="admin/paper-category">
                        <i class="fa fa-book"></i>

                        <span>Journal Category</span>
                    </a>
                </li>
                <li class="{{Request::is('admin/user')?'active':''}}">
                    <a href="admin/user">
                        <i class="fa fa-users"></i>

                        <span>Users</span>
                    </a>
                </li>
            @endif
            <li class="{{Request::is('admin/setting')?'active':''}}">
                <a href="admin/setting">
                    <i class="fa fa-cog"></i>

                    <span>Update Password</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>