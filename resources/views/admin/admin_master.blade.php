<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Dashboard | Link Vision Soft. </title>

    <!-- Bootstrap core CSS -->
	<link rel="icon" type="image/png" sizes="32x32" href="{{URL::to('public/home/resources/img/favicon-32x32.png')}}">
    <link href="{{URL::to('public/adminAsset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('public/adminAsset/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
	<link rel="stylesheet" type="text/css" href="{{URL::to('public/adminAsset/assets/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
    <link href="{{URL::to('public/adminAsset/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{URL::to('public/adminAsset/assets/data-tables/DT_bootstrap.css')}}" />
    <link href="{{URL::to('public/adminAsset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{URL::to('public/adminAsset/css/owl.carousel.css')}}" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{URL::to('public/adminAsset/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('public/adminAsset/css/style-responsive.css')}}" rel="stylesheet" />
    <!--<link href="{{URL::to('public/ckeditor/contents.css')}}" rel="stylesheet" />-->
	<style>
   
	 .span-succ{
             margin-left:10px;
             color:green;
             border-radius:5px;
             box-shadow: 0 1px 1px #fff inset;
             background-color:#ebf8a4;
             padding: 5px;
             border:1px solid #a2d246;
             }
	.span-error{
             margin-left:10px;
             color:red;
             border-radius:5px;
             box-shadow: 0 1px 1px #fff inset;
             background-color:#ebf8a4;
             padding: 5px;
             border:1px solid #a2d246;
             }
</style>
	
   <script>

  setTimeout(function() {
    $('#successMessage').fadeOut('slow');
	$('#errorMessage').fadeOut('slow');
    }, 5000);

</script>

   
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a  class="logo"><img src="{{URL::to('public/Images/lvs_logo.png')}}" style="height:40px;width:190px;"></a>
            <!--logo end-->
            
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!--<li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">
							   <?php
                                    $full_name = Session::get('full_name');
                                    if ($full_name) {
                                        echo $full_name;
                                    }
                                ?>
							</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="{{URL::to('/dashboard')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Our Services</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/services')}}"><i class="fa fa-angle-double-right"></i>Add Service</a></li>
                          <li><a  href="{{URL::to('/view-service')}}"><i class="fa fa-angle-double-right"></i>Vied Service</a></li>
                          
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Complete Project</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/project')}}"><i class="fa fa-angle-double-right"></i>Add Project</a></li>
                          <li><a  href="{{URL::to('/view-project')}}"><i class="fa fa-angle-double-right"></i>View Project</a></li>                          
                      </ul>
                  </li>
				  
				  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Use Technology</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/technology')}}"><i class="fa fa-angle-double-right"></i>Add Technology</a></li>
                          <li><a  href="{{URL::to('/view-technology')}}"><i class="fa fa-angle-double-right"></i>View Technology</a></li>                          
                      </ul>
                  </li>
				   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Development Process</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/process')}}"><i class="fa fa-angle-double-right"></i>Add Process</a></li>
                          <li><a  href="{{URL::to('/view-process')}}"><i class="fa fa-angle-double-right"></i>View Process</a></li>                          
                      </ul>
                  </li>
				   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Our Clients</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/client')}}"><i class="fa fa-angle-double-right"></i>Add Client</a></li>
                          <li><a  href="{{URL::to('/view-client')}}"><i class="fa fa-angle-double-right"></i>View Client</a></li>                          
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Our Teams</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/team-member')}}"><i class="fa fa-angle-double-right"></i>Add Team Member</a></li>
                          <li><a  href="{{URL::to('/view-team-member')}}"><i class="fa fa-angle-double-right"></i>View Team Member</a></li>                          
                      </ul>
                  </li>

                 <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="grids.html">Grids</a></li>
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                          <li><a  href="draggable_portlet.html">Draggable Portlet</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Form Stuff</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                          <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                          <li><a  href="form_wizard.html">Form Wizard</a></li>
                          <li><a  href="form_validation.html">Form Validation</a></li>
                          <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                          <li><a  href="inline_editor.html">Inline Editor</a></li>
                          <li><a  href="image_cropping.html">Image Cropping</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                          <li><a  href="dynamic_table.html">Dynamic Table</a></li>
                          <li><a  href="advanced_table.html">Advanced Table</a></li>
                          <li><a  href="editable_table.html">Editable Table</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="inbox.html">
                          <i class="fa fa-envelope"></i>
                          <span>Mail </span>
                          <span class="label label-danger pull-right mail-info">2</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                          <li><a  href="flot_chart.html">Flot Charts</a></li>
                          <li><a  href="xchart.html">xChart</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-shopping-cart"></i>
                          <span>Shop</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="product_list.html">List View</a></li>
                          <li><a  href="product_details.html">Details View</a></li>
                      </ul>
                  </li>-->
                                
                

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  @yield('content')
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              &copy; <?php echo date("Y");?> - By Link Vision Software Solution
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{URL::to('public/adminAsset/js/jquery.js')}}"></script>
    <script src="{{URL::to('public/adminAsset/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{URL::to('public/adminAsset/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::to('public/adminAsset/assets/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
    <script class="include" type="text/javascript" src="{{URL::to('public/adminAsset/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{URL::to('public/adminAsset/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{URL::to('public/adminAsset/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('public/adminAsset/js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('public/adminAsset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{URL::to('public/adminAsset/js/owl.carousel.js')}}" ></script>
    <script src="{{URL::to('public/adminAsset/js/jquery.customSelect.min.js')}}" ></script>
    <script src="{{URL::to('public/adminAsset/js/respond.min.js')}}" ></script>
    <script  src="{{URL::to('public/adminAsset/js/jquery.dcjqaccordion.2.7.js')}}" class="include" type="text/javascript"></script>

    <!--common script for all pages-->
    <script src="{{URL::to('public/adminAsset/js/common-scripts.js')}}"></script>

    <!--script for this page-->
    <script src="{{URL::to('public/adminAsset/js/sparkline-chart.js')}}"></script>
    <script src="{{URL::to('public/adminAsset/js/easy-pie-chart.js')}}"></script>
    <script src="{{URL::to('public/adminAsset/js/count.js')}}"></script> 
    <script src="{{url('public/ckeditor/ckeditor.js')}}"></script>
    
    <script class="include" type="text/javascript" src="{{URL::to('public/adminAsset/assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('public/adminAsset/assets/data-tables/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('public/adminAsset/assets/data-tables/DT_bootstrap.js')}}"></script>    
    <!--script for this page only-->
      <script type="text/javascript" src="{{URL::to('public/adminAsset/js/editable-table.js')}}"></script>

      <!-- END JAVASCRIPTS -->
      <script>
          jQuery(document).ready(function() {
              EditableTable.init();
          });
      </script>
    

<script>
      var ckview = document.getElementById("ckview");
      CKEDITOR.replace(ckview,{
      language:'en-gb'
    });
</script>
<script>
      var ckview1 = document.getElementById("ckview1");
      CKEDITOR.replace(ckview1,{
      language:'en-gb'
    });
</script>
  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
