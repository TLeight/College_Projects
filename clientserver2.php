<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<style>
     #table1 tr:hover {background-color:cyan;}
     #table2 tr:hover {background-color:gold;}
     </style>   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>ClientServer</title>  
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
			<h1>Client/Server Hosting.</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">

		
		<h1>Understanding Client and Server Computing</h1>

<p>Made by: Tyler Leight</p>

<h2>What is the Client Server model?</h2>

	<p>The client works with the server in the sending and receiving of data and application management.</p>
	
<h2>Advantages of the client server model</h2>

	<p>Several major advantages of th client server are:</p>

<ol>
	<li> The server is centralized to provide security and data management.</li>
	<li> The server can aso have additonal servers added on to improve performance.</li>
	<li> Both the client and server can share data for better processing.</li>
	<li> Clients handle presentation logic that can be received and read by the client from the server.</li>
</ol>

<h2>Examples of the client server model</h2>

<table id="table1">
	<tr>
		<th>Software</th>
		<th>Client</th>
		<th>Server</th>
	</tr>

	<tr>
		<td>Web</td>
		<td>Web Browsers, Google Chrome</td>
		<td>Web Servers, Microsoft Servers</td>
		
	</tr>

	<tr>
		<td>Email</td>
		<td>The Web, MS Outllok</td>
		<td>MS Exchange, Sendmail</td>
	</tr>

	<tr>
		<td>FTP</td>
		<td>File Client, Filezilla</td>
		<td>File Servers, Filezilla</td>
		
	</tr>

	<tr>
		<td>WebDevelopment/Coding</td>
		<td>HTML,CSS</td>
		<td>PHP,Perl</td>
	</tr>

	<tr>
		<td>Database</td>
		<td>Code Editors,SQL</td>
		<td>PUTTY,SQL</td>
	</tr>
</table>

	<h2>Example of TCP and IP Protocols</h2>

	<ul>
		<li>FTP<p>Is the upload and download of files to and from clients/servers</p></li>
			
		<li>HTTP<p>Allows clients web browser to connect to websites that are hosted by that server browser.</p></li>
			
		<li>HTTPS<p>It protects and secures data and files from external intrusions</p></li>
			
		<li>DHCP<p>Reduction of errors occuring in the assigning of IP addresses</p></li>
			
		<li>SMTP<p>A set of rules to help ind work in sending of email's.</p></li>
			
	</ul>

	<h2>Examples of Network Utilities and Services</h2>

	<ul>
		<li>ping <p>The sending and receiving of packets of data.</p></li>
	   
		<li>tracert<p>Determins the responce in the transfering of packets between pathways and nodes..</p></li>
		
		<li>pathping<p>Detects issues in the transferring of data packets.</p></li>
		
		<li><a href="https://www.whatismyip.com/ip-whois-lookup/">whois<p>Maintains the ownership of domain names and website ownership.</p></a></li>
		
		<li>ipconfig<p>Displays values of TCP/IP network and DNS settings.</p></li>
		
	</ul>

	<h2>Examples of Relative and Absolute Addresses</h2>
	
	<table id="table2">
		<tr>
			<th>Relative</th>
			<th>Absolute</th>
		</tr>

		<tr>
			<td>images.jpg, /style.css, .style/css</td>
			<td>http:website.html, c:\doc.html</td>
		</tr>
	</table>

	<h2>Links to three IT professional organization</h2>
	
	<ol>
		<li><a href="https://www.gartner.com/en">Gartner</a></li>
		<li><a href="https://www.computer.org/">IEEE Computer Society</a></li>
		<li><a href="https://www.bmc.com/">BMC Software</a></li>
	</ol>

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