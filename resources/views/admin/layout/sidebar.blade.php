Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        @if(hpcAuth()->check())
        <p>{{hpcAuth()->user()->nickname}}</p>
        @else
        <p>尚未登录</p>
        @endif
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{$action=='index'?'active':''}}">
        <a href="/admins">
          <i class="fa fa-dashboard"></i> <span>首页</span>
          <!-- <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span> -->
        </a>
        <!-- <ul class="treeview-menu">
          <li><a href="admin/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="admin/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul> -->
      </li>
      <li class="{{$action=='newPartner'?'active':''}}">
        <a href="/admins/new_partner">
          <i class="fa fa-files-o"></i>
          <span>新社员登记</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">{{$newInfo->count()}}</span>
          </span>
        </a>
        <!-- <ul class="treeview-menu">
          <li><a href="top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
          <li><a href="boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
          <li><a href="fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li class="active"><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a>
          </li>
        </ul> -->
      </li>
     <!--  <li>
        <a href="../widgets.html">
          <i class="fa fa-th"></i> <span>Widgets</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">new</small>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Charts</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
          <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
          <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
          <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
        </ul>
      </li> -->
      <li class="treeview {{$action=='profile'?'active':''}}">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>个人中心</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          @if(!hpcAuth()->isRegistered())
          <li><a onclick="Modal.remote('club_register', '/admins/profile/register')"><i class="fa fa-circle-o"></i> 社员注册</a></li>
          @else
          <li><a href="/admins/profile/dashboard"><i class="fa fa-circle-o"></i> 个人信息管理</a></li>
          @endif
          <!-- <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
          <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
          <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
          <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li> -->
        </ul>
      </li>
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Forms</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
          <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
          <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
        </ul>
      </li> -->
      @if(hpcAuth()->isAdmin())
      <li class="treeview {{$action=='club'?'active':''}}">
        <a href="#">
          <i class="fa fa-table"></i> <span>社团管理</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admins/club/info"><i class="fa fa-circle-o"></i> 信息概览</a></li>
          <li><a href="/admins/club/manage"><i class="fa fa-circle-o"></i> 社员管理</a></li>
          <li><a href="/admins/club/public"><i class="fa fa-circle-o"></i> 公告管理</a></li>
        </ul>
      </li>
      @endif
      <li class="{{$action=='calendar'?'active':''}}">
        <a href="/admins/calendar/show">
          <i class="fa fa-calendar"></i> <span>会议管理</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-red">3</small>
            <small class="label pull-right bg-blue">17</small>
          </span>
        </a>
      </li>
      <li class="treeview {{$action=='mail'?'active':''}}">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>邮件管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active">
              <a href="/admins/mail/mailbox"><i class="fa fa-circle-o"></i>收件箱
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">13</span>
                </span>
              </a>
            </li>
            <li><a href="/admins/mail/compose"><i class="fa fa-circle-o"></i>写邮件</a></li>
          </ul>
        </li>
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Examples</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
          <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
          <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
          <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
          <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
          <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
          <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
          <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
          <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
        </ul>
      </li> -->
      <li class="treeview {{$action=='lesson'?'active':''}}">
        <a href="#">
          <i class="fa fa-share"></i> <span>课程资料</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Level One
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        </ul>
      </li>
      <!-- <li><a href="＃"><i class="fa fa-book"></i> <span>文档</span></a></li> -->
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- ===============================================