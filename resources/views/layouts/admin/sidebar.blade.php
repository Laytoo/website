<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <ul class="sidebar-menu" data-widget="tree">

            <li>
                <a href="{{url('/')}}/admin/templates">
                    <i class="fa fa-th"></i> <span>List of Template</span>

                </a>
            </li>

            <li>
                <a href="{{url('/')}}/admin/models">
                    <i class="fa fa-th"></i> <span>Model</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Template Operations</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/')}}/admin/templates"><i class="fa fa-circle-o"></i> List of Template</a></li>
                    <li><a href="{{url('/')}}/admin/models"><i class="fa fa-circle-o"></i> Model</a></li>
                    <li><a href="{{url('/')}}/admin/categories"><i class="fa fa-circle-o"></i> Categories</a></li>
                    <li><a href="{{url('/')}}/admin/companies"><i class="fa fa-circle-o"></i> Company</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{url('/')}}/admin/orders">
                    <i class="fa fa-pie-chart"></i>
                    <span>Orders</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
             <!--   <ul class="treeview-menu">
                    <li><a href="{{url('/')}}/admin/ordernew"><i class="fa-car"></i> New Order</a></li>
                    <li><a href="{{url('/')}}/admin/orders/Accepted"><i class="fa fa-circle-o"></i> Accepted Order</a></li>
                    <li><a href="{{url('/')}}/admin/orders/In Shipping"><i class="fa fa-circle-o"></i> In Shipping</a></li>
                    <li><a href="{{url('/')}}/admin/orders/Canceled"><i class="fa fa-circle-o"></i> Canceled </a></li>

                </ul> -->
            </li>

            <li>
                <a href="{{url('/')}}/admin/members">
                    <i class="fa fa-user"></i> <span>Members</span>

                </a>
            </li>


            <li>
                <a href="{{url('/')}}/admin/messages">
                    <i class="fa fa-envelope"></i> <span>Customer Messages</span>

                </a>
            </li>

            <li>
                <a href="{{url('/')}}/admin/settings">
                    <i class="fa fa-gear"></i> <span>Settings</span>

                </a>
            </li>


            <li>
                <a href="{{url('/')}}/admin/comments">
                    <i class="fa fa-commenting"></i> <span>Comments</span>

                </a>
            </li>

            <li>
                <a href="{{url('/')}}/admin/questions">
                    <i class="fa fa-question-circle"></i> <span>Questions</span>

                </a>
            </li>




        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
