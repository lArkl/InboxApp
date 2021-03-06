
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            
            <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li >
                <a href="#"><i class="fa fa-table fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li {{ (Request::is('*charts')  ? 'class="active"' : '') }}>
                        <a href="{{ url ('charts/applicationarea' ) }}">Applications per Month</a>
                    </li>
                    <li {{ (Request::is('*charts')  ? 'class="active"' : '') }}>
                        <a href="{{ url ('charts/categoryapparea' ) }}">Applications per Category</a>
                    </li>

                    <li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                        <a href="{{ url ('charts/workshoparea') }}">Workshops per Month</a>
                    </li>
                    <li {{ (Request::is('*charts')  ? 'class="active"' : '') }}>
                        <a href="{{ url ('charts/categoryarea' ) }}">Workshops per Category</a>
                    </li>
                    
                    <li {{ (Request::is('*charts')  ? 'class="active"' : '') }}>
                        <a href="{{ url('charts/workshoppie') }}">Workshop Pie</a>
                    </li>
                    
                    <li {{ (Request::is('*charts')  ? 'class="active"' : '') }}>
                        <a href="{{ url ('charts/workshopbars' ) }}">Workshop Bars</a>
                    </li>
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li >
                <a href="#"><i class="fa fa-table fa-fw"></i> Tables<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li {{ (Request::is('*tables')  ? 'class="active"' : '') }}>
                        <a href="{{ url ('users' ) }}">Users</a>
                    </li>
                    <li {{ (Request::is('*tables')  ? 'class="active"' : '') }}>
                        <a href="{{ url('workshopsproposal') }}">Workshop Proposals</a>
                    </li>
                    <li {{ (Request::is('*tables')  ? 'class="active"' : '') }}>
                        <a href="{{ url('workshopslist') }}">Active Workshops</a>
                    </li>
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>

            {{--
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li {{ (Request::is('*blank') ? 'class="active"' : '') }}>
                        <a href="{{ url ('blank') }}">Blank Page</a>
                    </li>
                    <li>
                        <a href="{{ url ('login') }}">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            --}}
            <li {{ (Request::is('*documentation') ? 'class="active"' : '') }}>
                <a href="{{ url ('documentation') }}"><i class="fa fa-file-word-o fa-fw"></i> Documentation</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>