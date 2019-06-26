<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets_dashboard/style2.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets_login/images/icons/favicon.ico"/>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="assets_dashboard/eway.png" alt="logo">
                </div>

                <ul class="list-unstyled components">
                    <font size="+1"><p><b>Human Management</b></p></font>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-home"></span> &nbsp Home</a>
                    </li>
		    <li>
			<a href="#companySubmenu" data-toggle="collapse" aria-expanded="false"><span class="glyphicon glyphicon-briefcase"></span> &nbsp Company</a>
                        <ul class="collapse list-unstyled" id="companySubmenu">
                            <li><a href="#">Company 1</a></li>
                            <li><a href="#">Company 2</a></li>
                            <li><a href="#">Company 3</a></li>
                        </ul>
		    </li>
		    <li>
			<a href="#employeeSubmenu" data-toggle="collapse" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> &nbsp Employee</a>
                        <ul class="collapse list-unstyled" id="employeeSubmenu">
                            <li><a href="#">Company 1</a></li>
                            <li><a href="#">Company 2</a></li>
                            <li><a href="#">Company 3</a></li>
                        </ul>
		    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-comment"></span> &nbsp Message</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-send"></span> &nbsp Contact</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      		    <li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-user" style="color:#4885ed"></span> Profile</a></li>
      				<li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-log-out" style="color:#4885ed"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>





        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    </body>
</html>
