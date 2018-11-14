<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ url('bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ url('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ url('dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{ url('bower_components/morris.js/morris.css')}}">
  <link rel="stylesheet" href="{{ url('bower_components/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{ url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{ url('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{ url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="{{ url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
       
        <a href="index2.html" class="logo">
       
          <span class="logo-mini"><b>S</b>DM</span>
          <span class="logo-lg"><b>Stock</b>Document</span>
        </a>
    
        <nav class="navbar navbar-static-top">
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
    
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                          page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
             
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }} </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    
                    <p>
                        {{ Auth::user()->email }} - {{ Auth::user()->status }}
                      <small>Member Create {{ Auth::user()->created_at }}</small>
                    </p>
                  </li>
                  
               
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>  
                  </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>

      <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>{{ Auth::user()->name }} </p>
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

              @if(Auth::user()->status == 'User')
              <li class="active" >
                <a href="{{ url('/home')}}">
                  <i class="fa fa-dashboard"></i>
                  <span>แผนงาน</span>
                </a>
              </li>
              <li class="" >
                  <a href="{{ url('adddoc') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>สร้างใบงาน</span>
                  </a>
                </li>
              
              @else
              <li class="active" >
                <a href="{{ url('/home')}}">
                  <i class="fa fa-dashboard"></i>
                  <span>แผนงานวันนี้</span>
                </a>
              </li>
              <li class="" >
                <a href="{{ url('/list_doc')}}">
                  <i class="fa fa-dashboard"></i>
                  <span>อนุมัติใบงาน</span>
                </a>
            </li>
              <li class="" >
                  <a href="https://adminlte.io/docs">
                    <i class="fa fa-dashboard"></i>
                    <span>สร้างรายชื่อลูกค้า</span>
                  </a>
              </li>
              <li class="" >
                  <a href="https://adminlte.io/docs">
                    <i class="fa fa-dashboard"></i>
                    <span>สรุปผลประกอบการ</span>
                  </a>
              </li>
              

              @endif
             
{{--               
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-files-o"></i>
                  <span>Layout Options</span>
                  <span class="pull-right-container">
                    <span class="label label-primary pull-right">4</span>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                  <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                  <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                  <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
              </li>
              <li>
                <a href="pages/widgets.html">
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
                  <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                  <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                  <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                  <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-laptop"></i>
                  <span>UI Elements</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                  <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                  <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                  <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                  <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                  <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-edit"></i> <span>Forms</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                  <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                  <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-table"></i> <span>Tables</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                  <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
              </li>
              <li>
                <a href="pages/calendar.html">
                  <i class="fa fa-calendar"></i> <span>Calendar</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-red">3</small>
                    <small class="label pull-right bg-blue">17</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="pages/mailbox/mailbox.html">
                  <i class="fa fa-envelope"></i> <span>Mailbox</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-yellow">12</small>
                    <small class="label pull-right bg-green">16</small>
                    <small class="label pull-right bg-red">5</small>
                  </span>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-folder"></i> <span>Examples</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                  <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                  <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                  <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                  <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                  <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                  <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                  <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                  <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-share"></i> <span>Multilevel</span>
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
              <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
              <li class="header">LABELS</li>
              <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> --}}
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>


    @yield('content')
</div>

<script src="{{ url('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ url('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{ url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ url('bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{ url('bower_components/morris.js/morris.min.js')}}"></script>
<script src="{{ url('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{ url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{ url('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{ url('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ url('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{ url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{ url('bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{ url('dist/js/adminlte.min.js')}}"></script>
<script src="{{ url('dist/js/pages/dashboard.js')}}"></script>
<script src="{{ url('dist/js/demo.js')}}"></script>


<script src="{{ url('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    var editor_config = {
      path_absolute : "/",
      selector: "textarea.my-editor",
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
  
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }
  
        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };
  
    tinymce.init(editor_config);
  </script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
