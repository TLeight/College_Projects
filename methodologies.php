<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Methodologies</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script src="js/mypiechart.js"></script>
 	<script src="js/canvasjs.min.js"></script>

	<script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 	<script type="text/javascript" src="js/filter.js"></script>

	<style>
		 * {
            padding: 0;
            margin: 0;
        }
		.waterfall {
            max-width: 100%;
            max-height: 100vh;
            margin: auto;
		}
		.agile {
            max-width: 100%;
            max-height: 100vh;
            margin: auto;
        }
		.table1 table {
 		font-family: arial, sans-serif;
 		border-collapse: collapse;
 		width: 100%;
		}
		.table1 td, .table1 th {
 		border: 1px solid #dddddd;
 		text-align: left;
 		padding: 8px;
		}
		.table1 th {
 		background-color: #0143ad;
 		color: white;
		}
		.table1 tr:nth-child(even) {
 		background-color: #c3d7f7;
		}
	</style>

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<?php include('header.php'); ?>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Methodologies</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">

		<h1>What is the Web Developement Process?</h1>

		<p>It is an overview of multiple steps that are taken from beggining to end in the process of making and designing of web project.
			Steps are taken to divide and categorize these steps for use during the projects makeup.
		</p>

		<h1>SDLC and Project Management</h1>

		<p>The web design and developement can be thought of a type of Software Developement Cycle (SDLC) and project management methodology.
			The waterfall mode depicted below is a long standing traditional SDLC that is chararchterized by sequential steps.
			Agile is a newer method that is intended to more quickly respond to changing customer and product requirement using an incremental process with frequent releases and customer feedback.
		</p>

		<h3>Traditional Waterfall SDLC Methodologie</h3>

		<h3><p><img class="waterfall" src="images/waterfall.png" alt="Waterfall SDLC"></p></h3>

		<p>source: Wikipedia</p>

		<h3>Agile Methodologie</h3>

		<h3><p><img class="agile" src="images/agile.png" alt="Agile Methodology"></p></h3>

		<h3>Web Devlopement Phases</h3>

		<div id="chartContainer" style="height: 450px; width: 95%; "></div>

		<br>
			<form action="search.php" method="get">
 		<table>
 		<tr>
			<th colspan="2">Search Sites</th>
 		</tr>
 		<tr>
			<td>Site to search:</td>
			<td>
				<select name="site">
				<option value="google">Google Web
				<option value="googlei">Google Images
				<option value="duck">DuckDuckGo
				<option value="wiki">Wikiedpia
				</select>
			</td>
 			</tr>
 		<tr>
			<td>Search term(s):</td>
			<td>
			<input type="text" name="terms" size="25" maxlength="25">
		</td>
 		</tr>
 		<tr>
		<td colspan="2">
		<input type="submit" value="Submit" class="centercell">
		</td>
 		</tr>
 		</table>
		</form>
		<br>

		<p><input id="myInput" type="text" placeholder="Enter search text..."></p>

		<table class="table1">
 		<thead>
 			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Contact</th>
 			</tr>
 		</thead>
 		<tbody id="myTable">
 			<tr>
				<td>Wendel Byrd</td>
				<td>State Rep 3rd House District, Northern Detroit</td>
				<td>(855)-564-4673)</td>
 			</tr>

			 <tr>
				<td>Abdulak Hammoud</td>
				<td>State Rep 15th House District, Dearborn</td>
				<td>(855)-776-1515)</td>
 			</tr>

			 <tr>
				<td>Sylvia Santana</td>
				<td>State Senator 3rd District, Dearborn, Detroit , Melvindale</td>
				<td>(517)-373-0990)</td>
 			</tr>

			 <tr>
				<td>Gretchen Whitmer</td>
				<td>Michigan Govonor</td>
				<td>(517)-373-3400)</td>
 			</tr>

		</tbody>
		</table>

        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About Me</h3>
                        </div>
                        <p>I am skilled in the desige and execution of web and server management.</p>
                        <p>I provide unique and or common talents to my craft.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Pricing</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">QuickCloud</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>

                <div class="footer-right">
                    <ul class="footer-links-soi">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-github"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul><!-- end links -->
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>