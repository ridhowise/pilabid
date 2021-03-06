
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Harsa Admin</title>
        <meta name="keywords" content="HTML5,CSS3,Admin Template" />
        <meta name="description" content="" />
        <meta name="Author" content="Psd2allconversion [www.psd2allconversion.com]" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
        <!-- CORE CSS -->
        <link href="{{ URL::asset('adm/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('adm/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('adm/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('adm/css/animate.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('adm/css/c3.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('adm/css/widget.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('adm/css/fullcalendar.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('adm/css/jquery-ui.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('adm/css/toastr.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('adm/css/morris.css') }}"/>
        <!-- THEME CSS -->
        <link href="{{ URL::asset('adm/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('adm/css/dark.css') }}" rel="stylesheet" type="text/css" />

        <!-- PAGE LEVEL SCRIPTS -->

    </head>
    <body>

        <div id="wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="{{ URL::asset('adm/img/logoa.png') }}" width="135px" height="55px" alt="absolute admin" class="img-fluid logo-default"/> </a>

                    </div><div class="menu-toggler sidebar-toggler">
                        <a href="javascript:;" class="navbar-minimalize minimalize-styl-2  float-left "><i class="fa fa-bars"></i></a>
                    </div>

                    <div class="search-bar">
                        <form class="sidebar-search  " action="page_general_search_3.html" method="POST">

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">

                            </div>
                        </form>
                    </div>
                    <!-- END LOGO -->

                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav float-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="fa fa-users"></i>
                                    <span class="badge badge-default "> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                                </a>
                                <ul class="dropdown-menu animated flipInX ">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">12 pending</span> notifications</h3>
                                        <a href="page_user_profile_1.html">view all</a>
                                    </li>
                                    <li> 
									<ul class="dropdown-menu-list scroller" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-users"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge badge-default"> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                                </a>
                                <ul class="dropdown-menu animated flipInX">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">12 New Email</span> </h3>
                                        <a href="page_user_profile_1.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller"  data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> 12 New Inbox. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> 10 Spam. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> 2 Trash. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> 5 Social. </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="fa fa-calendar"></i>
                                    <span class="badge badge-default"> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                                </a>
                                <ul class="dropdown-menu extended tasks animated flipInX">
                                    <li class="external">
                                        <h3>You have
                                            <span class="bold">12 pending</span> tasks</h3>
                                        <a href="app_todo.html">view all</a>
                                    </li>
                                    <li>

                                        <ul class="dropdown-menu-list scroller" data-handle-color="#637283" data-initialized="1">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New release v1.2 </span>
                                                        <span class="percent">30%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 40%;" class="progress-bar progress-bar-success" >
                                                            <span class="sr-only">40% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Application deployment</span>
                                                        <span class="percent">65%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 65%;" class="progress-bar progress-bar-danger">
                                                            <span class="sr-only">65% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile app release</span>
                                                        <span class="percent">98%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 98%;" class="progress-bar progress-bar-success" >
                                                            <span class="sr-only">98% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Database migration</span>
                                                        <span class="percent">10%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 10%;" class="progress-bar progress-bar-warning">
                                                            <span class="sr-only">10% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Web server upgrade</span>
                                                        <span class="percent">58%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 58%;" class="progress-bar progress-bar-info" >
                                                            <span class="sr-only">58% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">Mobile development</span>
                                                        <span class="percent">85%</span>
                                                    </span>
                                                    <span class="progress">
                                                        <span style="width: 85%;" class="progress-bar progress-bar-success" >
                                                            <span class="sr-only">85% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="task">
                                                        <span class="desc">New UI release</span>
                                                        <span class="percent">38%</span>
                                                    </span>
                                                    <span class="progress progress-striped">
                                                        <span style="width: 38%;" class="progress-bar progress-bar-important" >
                                                            <span class="sr-only">38% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
                                    <img alt="" class="rounded-circle" src="{{ URL::asset('adm/img/avatar.png') }}">

                                </a>
                                <div class="dropdown-menu dropdown-menu-default">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user-circle-o"></i> My Profile </a>                                    
                                    <a class="dropdown-item" href="#"><i class="fa fa-calendar"></i> My Calendar </a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-envelope-open"></i> My Inbox
                                        <span class="badge badge-danger"> 3 </span>
                                    </a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> My Tasks
                                        <span class="badge badge-success"> 7 </span>
                                    </a>
                                    <a class="dropdown-item" href="#">                                       
                                        <i class="fa fa-unlock-alt"></i> Lock Screen </a>
                                    <a class="dropdown-item" href="#">                                    
                                        <i class="fa fa-sign-out"></i> Log Out </a>
                                </div>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <i class="fa fa-sign-out"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT dropdown-divider -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT dropdown-divider -->

            <!-- BEGIN CONTAINER -->
            <div class="page-container">

                <aside class="sidebar">
                    <nav class="sidebar-nav">
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="index.html"><i class="fa fa-tachometer"></i> <span class="nav-label">Dashboard</span></a>


                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cubes"></i> <span class="nav-label">Ecommerce</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">                               
                                    <li><a href="products.html">Product List </a></li>
                                    <li><a href="orders.html">Orders </a></li>
                                    <li><a href="order-detail.html">Order Detail </a></li>
                                    <li><a href="order-invoice.html">Order Invoice </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="widgets.html"><i class="fa fa-cog"></i> <span class="nav-label">Widgets </span></a>

                            </li>
                            <li>
                                <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="mailbox.html">Inbox</a></li>
                                    <li><a href="mail_detail.html">Email view</a></li>
                                    <li><a href="mail_compose.html">Compose email</a></li>
                                </ul>
                            </li><li class="nav-heading"><span>Components</span></li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="flot_charts.html">Flot charts</a></li>
                                    <li><a href="morris_js.html">Morris.js</a></li>
                                    <li><a href="chart_js.html">Chart.js</a></li>
                                    <li><a href="c3.html">C3</a></li>


                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="form_basic.html">Basic form</a></li>
                                    <li><a href="form_advanced.html">Advanced form</a></li>
                                    <li><a href="form_wizard.html">Wizard form</a></li>
                                    <li><a href="form_masked.html">Masked form</a></li>
                                    <li><a href="form_file_upload.html">File upload</a></li>
                                    <li><a href="file_drop.html">File Dropzone</a></li>
                                    <li><a href="form_text_editor.html">Text editor</a></li>
                                    <li><a href="form_inline_edit.html">Inline edit</a></li>
                                    <li><a href="form_validate.html">Form Validation</a></li>
                                    <li><a href="form_tinymce.html">Tinymce Editor</a></li>
                                    <li><a href="form_wysihtml5.html">WYSIHTML5 Editor</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="lockscreen.html">Lockscreen</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="empty_page.html">Empty page</a></li>
                                    <li><a href="gallery.html">gallery</a></li>
                                    <li><a href="price_tables.html">Price tables</a></li>
                                    <li><a href="page_contact.html">Contact Page</a></li>
                                </ul>
                            </li>                     

                            <li>
                                <a href="#"><i class="fa fa-hourglass-o"></i> <span class="nav-label">Icons</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="weather-icon.html">Weather Icons</a></li>
                                    <li><a href="themifyicons.html">Themify Icons</a></li>
                                    <li><a href="linea_arrows.html">Linea Arrows Icons</a></li>
                                    <li><a href="linea_basic.html">Linea Basic Icons</a></li>                              
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="video.html">Video</a></li>
                                    <li><a href="tabs_panels.html">Panels</a></li>
                                    <li><a href="tabs.html">Tabs</a></li><li><a href="chat.html">Chat</a></li>
                                    <li><a href="alert_notifications.html">Alert &amp; notifications</a></li>
                                    <li><a href="tree_view.html">Tree View</a></li>
                                    <li><a href="timeline.html">Time Line</a></li>
                                    <li><a href="progress_bar.html">Progress Bar</a></li>
                                    <li><a href="sliders.html">OWL Carousel</a></li>
                                    <li><a href="range_slider.html">Range Slider</a></li>
                                    <li><a href="alert_popup.html">Alert Popup</a></li>
                                    <li><a href="accordion.html">Accordion</a></li>
                                    <li><a href="models.html">Modals Popup</a></li>
                                    <li><a href="toastr_alert.html">Toastr Alert</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse"><li><a href="table_basic.html">Static Tables</a></li>
                                    <li><a href="table_data_tables.html">Data Tables</a></li>
                                    <li><a href="table_responsive.html">Responsive Tables</a></li>
                                    <li><a href="table_editable.html">Editable Tables</a></li>
                                    <li><a href="table_jsgrid.html">JSGrid Tables</a></li>

                                </ul>
                            </li><li class="nav-heading"><span>More</span></li>
                            <li>
                                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="user_profile.html">profile</a></li>
                                    <li><a href="user_list.html">User list</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i> <span class="nav-label">maps</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="google_maps.html">Google maps</a></li>
                                    <li><a href="vector_maps.html">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">Blog</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="blog_list.html">Blog list</a></li>
                                    <li><a href="blog_post.html">Blog post</a></li>
                                </ul>
                            </li>
                            <li><a href="calendar.html"><i class="fa fa-calendar"></i>  <span class="nav-label">Calendar </span></a></li>

                            <li>
                                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level collapse">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                    </li> <li><a href="#">Second Level Item</a></li>
                                </ul>
                            </li><li class="nav-heading"><span>Extra</span></li>

                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </nav>
                    <!-- END SIDEBAR -->
                </aside>

                <!-- BEGIN CONTENT BODY -->
                <div class="page-content-wrapper">
                    <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">

                                    <h4 class="float-left">Dashboard</h4>

                                    <ol class="breadcrumb float-left float-md-right">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                                        <li class="breadcrumb-item">Dashboard</li>
                                    </ol>

                                </div>
                            </div>
                        </div><!-- end .page title-->
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->

                                    <div class="card-block text-xs-center">
                                        <i class="fa fa-desktop widget-icon"></i>  <h1 class="right panel-middle margin-b-0">3,100</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div><!-- End .panel --> 



                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->

                                    <div class="card-block text-xs-center">
                                        <i class="fa fa-database widget-icon"></i>  <h1 class="right panel-middle margin-b-0">6,782</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div><!-- End .panel --> 



                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->

                                    <div class="card-block text-xs-center">
                                        <i class="fa fa-eye widget-icon"></i>  <h1 class="right panel-middle margin-b-0">6,782</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div><!-- End .panel --> 



                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->

                                    <div class="card-block text-xs-center">
                                        <i class="fa fa-users widget-icon"></i>  <h1 class="right panel-middle margin-b-0">1,782</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div><!-- End .panel --> 



                            </div>


                        </div>



                        <div class="row pb-sm-3">
                            <div class="col-md-8">


                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Products Yearly Sales <ul class="float-right list-inline">
                                            <li class="list-inline-item"><small><i class="fa fa-circle color1" aria-hidden="true"></i> Computer</small></li>
                                            <li class="list-inline-item"><small><i class="fa fa-circle color2" aria-hidden="true"></i> Mobile</small></li>
                                            <li class="list-inline-item"><small><i class="fa fa-circle color3" aria-hidden="true"></i> Accessories</small></li>                                            
                                        </ul>
                                    </div>
                                    <div class="card-block">

                                        <div id="morris"></div>

                                    </div>
                                </div><!-- End .panel --> 


                            </div>
                            <div class="col-md-4">


                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Advertisement <ul class="float-right list-inline">
                                            <li class="list-inline-item"><small><i class="fa fa-circle twittercolor" aria-hidden="true"></i> Twitter</small></li>
                                            <li class="list-inline-item"><small><i class="fa fa-circle facebookcolor" aria-hidden="true"></i> Facebook</small></li>                                                                  
                                        </ul>
                                    </div>
                                    <div class="card-block">

                                        <div id="morris-bar"></div>

                                    </div>
                                </div><!-- End .panel --> 


                            </div>

                        </div>



                        <div class="row">
                            <div class="col-md-8">


                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Time Line
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">

                                        <div id="demo1"></div>


                                    </div>
                                </div><!-- End .panel --> 


                            </div>
                            <div class="col-md-4">


                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        ORDER STATS
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">

                                        <div class="margin-t-10">

                                            <div id="spline"></div>



                                        </div>

                                    </div>
                                </div><!-- End .panel --> 


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        RECENT COMMENTS
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="comment">

                                            <div class="black-text message-content">

                                                <a href="javascript:;" class="user-img">
                                                    <img alt="" class="rounded-circle img-fluid" src="assets/images/avtar-1.jpg">

                                                </a>
                                                <div class="comment-message">
                                                    <small class="right teal-text">1m ago</small>
                                                    <strong>Monica Smith</strong>
                                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                                    <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                                </div>



                                            </div>
                                            <div class="black-text message-content">

                                                <a href="javascript:;" class="user-img">
                                                    <img alt="" class="rounded-circle img-fluid" src="assets/images/avtar-1.jpg">

                                                </a>
                                                <div class="comment-message">
                                                    <small class="right teal-text">1m ago</small>
                                                    <strong>Monica Smith</strong>
                                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                                    <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                                </div>



                                            </div>
                                            <div class="black-text message-content">

                                                <a href="javascript:;" class="user-img">
                                                    <img alt="" class="rounded-circle img-fluid" src="assets/images/avtar-1.jpg">

                                                </a>
                                                <div class="comment-message">
                                                    <small class="right teal-text">1m ago</small>
                                                    <strong>Monica Smith</strong>
                                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                                    <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                                </div>



                                            </div>


                                        </div>
                                    </div>
                                </div><!-- End .panel --> 
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        All Projects
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block text-xs-center">
                                        <div id="morris-area-chart2" style="height: 340px;"></div>
                                    </div>
                                </div><!-- End .panel --> 
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">


                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Order Status
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block text-xs-center">
                                        <div class="table-responsive table-commerce">
                                            <table id="basic-datatables" class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="w80">
                                                            <strong>ID</strong>
                                                        </th>
                                                        <th>
                                                            <strong>PURCHASED ON</strong>
                                                        </th>
                                                        <th>
                                                            <strong>CLIENT NAME</strong>
                                                        </th>
                                                        <th>
                                                            <strong>AMOUNT</strong>
                                                        </th>
                                                        <th>
                                                            <strong>QUANTITY</strong>
                                                        </th>
                                                        <th>
                                                            <strong>SHIPMENT</strong>
                                                        </th>
                                                        <th class="text-xs-center">
                                                            <strong>STATUS</strong>
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>0001</td>
                                                        <td>03/11/2015</td>
                                                        <td>Addison Nichols</td>
                                                        <td>$ 515.20</td>
                                                        <td>547</td>
                                                        <td>04/10/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-info">Standby</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0002</td>
                                                        <td>05/11/2015</td>
                                                        <td>Albert Watkins</td>
                                                        <td>$ 22.30</td>
                                                        <td>122</td>
                                                        <td>06/10/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-success">Paid</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0003</td>
                                                        <td>07/09/2015</td>
                                                        <td>Johnny Fernandez</td>
                                                        <td>$ 31.4</td>
                                                        <td>68</td>
                                                        <td>28/09/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-info">Standby</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00011</td>
                                                        <td>19/08/2015</td>
                                                        <td>Gilbert Edwards</td>
                                                        <td>$ 5115.12</td>
                                                        <td>51</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-inverse">Canceled</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00012</td>
                                                        <td>20/07/2015</td>
                                                        <td>Norman Hill</td>
                                                        <td>$ 5124.13</td>
                                                        <td>41</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-purple">Shipped</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00013</td>
                                                        <td>22/07/2015</td>
                                                        <td>Samantha Murphy</td>
                                                        <td>$ 513.214</td>
                                                        <td>54</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-inverse">Canceled</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00014</td>
                                                        <td>30/07/2015</td>
                                                        <td>Nora Lambert</td>
                                                        <td>$ 147.15</td>
                                                        <td>65</td>
                                                        <td>023/11/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-success">Paid</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00015</td>
                                                        <td>29/07/2015</td>
                                                        <td>Shelly Robertson</td>
                                                        <td>$ 15.016</td>
                                                        <td>12</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-inverse">Canceled</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00016</td>
                                                        <td>15/12/2015</td>
                                                        <td>Carrie Cruz</td>
                                                        <td>$ 164.17</td>
                                                        <td>123</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-info">Standby</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00017</td>
                                                        <td>16/07/2015</td>
                                                        <td>Kyle Fleming</td>
                                                        <td>$ 174.18</td>
                                                        <td>1</td>
                                                        <td>027/03/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-purple">Shipped</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00018</td>
                                                        <td>12/07/2015</td>
                                                        <td>Everett Garcia</td>
                                                        <td>$ 188.19</td>
                                                        <td>65</td>
                                                        <td>029/11/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-success">Paid</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00019</td>
                                                        <td>10/07/2015</td>
                                                        <td>Mae Harper</td>
                                                        <td>$ 195.20</td>
                                                        <td>45</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-success">Paid</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0004</td>
                                                        <td>09/09/2015</td>
                                                        <td>Chloe Rodriquez</td>
                                                        <td>$ 4.55</td>
                                                        <td>21</td>
                                                        <td>10/10/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-purple">Shipped</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0005</td>
                                                        <td>01/09/2015</td>
                                                        <td>Stanley Austin</td>
                                                        <td>$ 55.6</td>
                                                        <td>57</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-purple">Shipped</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0006</td>
                                                        <td>212/08/2015</td>
                                                        <td>Ethel Torres</td>
                                                        <td>$ 62.7</td>
                                                        <td>115</td>
                                                        <td>13/11/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-success">Paid</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0007</td>
                                                        <td>24/08/2015</td>
                                                        <td>Ronnie Nelson</td>
                                                        <td>$ 78.8</td>
                                                        <td>154</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-danger">Rejected</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0008</td>
                                                        <td>25/08/2015</td>
                                                        <td>Stanley Olson</td>
                                                        <td>$ 85.9</td>
                                                        <td>74</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-info">Standby</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>0009</td>
                                                        <td>16/08/2015</td>
                                                        <td>Jennie Cooper</td>
                                                        <td>$ 97.10</td>
                                                        <td>332</td>
                                                        <td>017/03/2015</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-purple">Shipped</span>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>00010</td>
                                                        <td>18/03/2015</td>
                                                        <td>Fernando Morrison</td>
                                                        <td>$ 5108.11</td>
                                                        <td>123</td>
                                                        <td>-</td>
                                                        <td class="text-xs-center">
                                                            <span class="tag label-inverse">Canceled</span>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- End .panel --> 


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">


                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        VISITORS LOCATION
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div id="world-map" class="left wmap" ></div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="map_progress">
                                                    <p class="card-stats-title grey-text card-title">Unique Visitors</p>
                                                    <span><small>Last Week Rise by 62%</small></span>
                                                    <div class="progress"><div class="determinate" style="width: 62%"></div></div>

                                                    <p class="card-stats-title grey-text card-title">Registrations</p>
                                                    <span><small>Up by 57% last 7 days</small></span>
                                                    <div class="progress"><div class="determinate"  style="width: 57%"></div></div>

                                                    <p class="card-stats-title grey-text card-title">Direct Sales</p>
                                                    <span><small>Last Month Rise by 22%</small></span>
                                                    <div class="progress"><div class="determinate"  style="width: 22%"></div></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- End .panel --> 


                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">


                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Time Line
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">

                                        <div class="timeline-item">
                                            <div class="row">
                                                <div class="col-sm-3 date left">
                                                    <i class="fa fa-th-large"></i>
                                                    6:00 am
                                                    <br>
                                                    <small class="text-navy">2 hour ago</small>
                                                </div>
                                                <div class="col-sm-9 content no-top-border ">
                                                    <p class="m-b-xs"><strong>Meeting</strong></p>

                                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="row">
                                                <div class="col-sm-3 date left">
                                                    <i class="fa fa-th-large"></i>
                                                    6:00 am
                                                    <br>
                                                    <small class="text-navy">2 hour ago</small>
                                                </div>
                                                <div class="col-sm-9 content no-top-border ">
                                                    <p class="m-b-xs"><strong>Meeting</strong></p>

                                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="row">
                                                <div class="col-sm-3 date left">
                                                    <i class="fa fa-th-large"></i>
                                                    6:00 am
                                                    <br>
                                                    <small class="text-navy">2 hour ago</small>
                                                </div>
                                                <div class="col-sm-9 content no-top-border ">
                                                    <p class="m-b-xs"><strong>Meeting</strong></p>

                                                    <p>Conference on the sales results for the previous year. Monica please examine sales trends in marketing and products.</p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- End .panel --> 


                            </div>
                            <div class="col-md-6">


                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        User Message
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">

                                        <div class="margin-t-10">

                                            <div class="black-text message-content">
                                                <div>
                                                    <small class="right teal-text">1m ago</small>
                                                    <strong>Monica Smith</strong>
                                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                                    <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                                </div>
                                            </div>
                                            <div class="black-text message-content">
                                                <div>
                                                    <small class="right teal-text">1m ago</small>
                                                    <strong>Monica Smith</strong>
                                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                                    <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                                </div>
                                            </div>
                                            <div class="black-text message-content">
                                                <div>
                                                    <small class="right teal-text">1m ago</small>
                                                    <strong>Monica Smith</strong>
                                                    <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div>
                                                    <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div><!-- End .panel --> 


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Calendar
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block text-xs-center">

                                        <div id="cw-body"></div>


                                    </div>
                                </div><!-- End .panel -->
                            </div>
                            <div class="col-sm-4">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Chat
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block text-xs-center">



                                        <!--Widget body-->
                                        <div id="demo-chat-body" class="in ">
                                            <div class="scrollerchat h600">
                                                <div class="pad-all">
                                                    <ul class="list-unstyled media-block">
                                                        <li class="mar-btm">
                                                            <div class="media-left">
                                                                <img src="assets/images/avatar1.png" class="rounded-circle img-sm" alt="Profile Picture">
                                                            </div>
                                                            <div class="media-body pad-hor">
                                                                <div class="speech">                                                               
                                                                    <p>Hello Lucy, how can I help you today ?</p>
                                                                    <p class="speech-time">
                                                                        <i class="fa fa-clock-o fa-fw"></i>09:23AM
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="mar-btm">
                                                            <div class="media-right">
                                                                <img src="assets/images/avatar2.png" class="rounded-circle img-sm" alt="Profile Picture">
                                                            </div>
                                                            <div class="media-body pad-hor speech-right">
                                                                <div class="speech">                                                              
                                                                    <p>Hi, I want to buy a new shoes.</p>
                                                                    <p class="speech-time">
                                                                        <i class="fa fa-clock-o fa-fw"></i> 09:23AM
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="mar-btm">
                                                            <div class="media-left">
                                                                <img src="assets/images/avatar1.png" class="rounded-circle img-sm" alt="Profile Picture">
                                                            </div>
                                                            <div class="media-body pad-hor">
                                                                <div class="speech">

                                                                    <p>Shipment is free. You\'ll get your shoes tomorrow!</p>
                                                                    <p class="speech-time">
                                                                        <i class="fa fa-clock-o fa-fw"></i> 09:25
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="mar-btm">
                                                            <div class="media-right">
                                                                <img src="assets/images/avatar2.png" class="rounded-circle img-sm" alt="Profile Picture">
                                                            </div>
                                                            <div class="media-body pad-hor speech-right">
                                                                <div class="speech">

                                                                    <p>Wow, that\'s great!</p>
                                                                    <p class="speech-time">
                                                                        <i class="fa fa-clock-o fa-fw"></i> 09:27
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="mar-btm">
                                                            <div class="media-right">
                                                                <img src="assets/images/avatar2.png" class="rounded-circle img-sm" alt="Profile Picture">
                                                            </div>
                                                            <div class="media-body pad-hor speech-right">
                                                                <div class="speech">

                                                                    <p>Ok. Thanks for the answer. Appreciated.</p>
                                                                    <p class="speech-time">
                                                                        <i class="fa fa-clock-o fa-fw"></i> 09:28
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="mar-btm">
                                                            <div class="media-left">
                                                                <img src="assets/images/avatar1.png" class="rounded-circle img-sm" alt="Profile Picture">
                                                            </div>
                                                            <div class="media-body pad-hor">
                                                                <div class="speech">

                                                                    <p>You are welcome! <br> Is there anything else I can do for you today?</p>
                                                                    <p class="speech-time">
                                                                        <i class="fa fa-clock-o fa-fw"></i> 09:30
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="mar-btm">
                                                            <div class="media-right">
                                                                <img src="assets/images/avatar2.png" class="rounded-circle img-sm" alt="Profile Picture">
                                                            </div>
                                                            <div class="media-body pad-hor speech-right">
                                                                <div class="speech">

                                                                    <p>Nope, That\'s it.</p>
                                                                    <p class="speech-time">
                                                                        <i class="fa fa-clock-o fa-fw"></i> 09:31
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="mar-btm">
                                                            <div class="media-left">
                                                                <img src="assets/images/avatar1.png" class="rounded-circle img-sm" alt="Profile Picture">
                                                            </div>
                                                            <div class="media-body pad-hor">
                                                                <div class="speech">

                                                                    <p>Thank you for contacting us today</p>
                                                                    <p class="speech-time">
                                                                        <i class="fa fa-clock-o fa-fw"></i> 09:32
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>


                                            </div>

                                            <!--Widget footer-->
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <input type="text" placeholder="Enter your text" class="form-control chat-input">
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <button class="btn btn-primary btn-block" type="submit">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- End .panel -->
                            </div>
                        </div>





                    </div> 
                    <div class="clearfix"></div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTAINER -->
        </div>
        <!-- /wrapper -->


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


        <!-- JAVASCRIPT FILES -->

        <script type="text/javascript" src="{{ URL::asset('adm/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('adm/js/metisMenu.min.js') }}"></script>

        <script type="text/javascript" src="{{ URL::asset('adm/js/tether.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('adm/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('adm/js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ URL::asset('adm/js/d3.v3.min.js') }}" charset="utf-8"></script>       
        <script src="{{ URL::asset('adm/js/c3.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('adm/js/loader.js') }}"></script>
        <script src="{{ URL::asset('adm/js/moment.min.js') }}"></script>
        <script src="{{ URL::asset('adm/js/fullcalendar.min.js') }}"></script>
        <script src="{{ URL::asset('adm/js/jquery-ui.js') }}"></script>       
        <script src="{{ URL::asset('adm/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ URL::asset('adm/js/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ URL::asset('adm/js/morris.js') }}"></script>
        <script src="{{ URL::asset('adm/js/raphael-2.1.0.min.js') }}"></script>
        <!-- PAGE LEVEL FILES -->
        <script src="{{ URL::asset('adm/js/jquery.dataTables.js') }}"></script>
        <script src="{{ URL::asset('adm/js/dataTables.tableTools.js') }}"></script>
        <script src="{{ URL::asset('adm/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ URL::asset('adm/js/dataTables.responsive.js') }}"></script>
        <script src="{{ URL::asset('adm/js/tables-data.js') }}"></script>
        <!-- Custom FILES -->
        <script type="text/javascript" src="{{ URL::asset('adm/js/custom.js') }}"></script>
        <script src="{{ URL::asset('adm/js/toastr.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('adm/js/index.js') }}"></script>
    </body>
</html>