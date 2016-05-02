<!DOCTYPE html>
<!--[if lt IE 7]><!-- <html class="no-js ie6 oldie" lang="fr"> <![endif]-->
<!--[if IE 7]><!--    <html class="no-js ie7 oldie" lang="fr"> <![endif]-->
<!--[if IE 8]><!--    <html class="no-js ie8 oldie" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!-- <html class="no-js" lang="fr"> <![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>plantillas web</title>
		<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
<style>
	#free-flash-header a,#free-flash-header a:hover {
		color:#363636;
	}
	#free-flash-header a:hover {
		text-decoration:none
	}
</style>
<!--END OF TERMS OF USE-->

		<!-- Bootstrap -->
		<link href="/assets/css/reset.css" rel="stylesheet" type="text/css" media="all">
		<link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="/assets/css/style.css" rel="stylesheet" type="text/css" media="all">
		<link href="/assets/css/font.css" rel="stylesheet" type="text/css" media="all">
		<link href="/assets/css/mobile.css" rel="stylesheet" type="text/css" media="all">
		<!-- end Bootstrap -->

		<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

		<!-- LightBox -->
		<link href="/assets/css/lightbox/vlightbox.css" rel="stylesheet" type="text/css" media="all">
		<link href="/assets/css/lightbox/visuallightbox.css" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="/assets/css/lightbox/style.css" />
		<!-- end LightBox -->

		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->



	</head>
	
	<body>
	<div class="global-container">
		<!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
	<div id="copy" style="height: 75px; position: absolute; bottom: 0px; left:0px; border: none; width: 100%;">
		<div id="free-flash-header" style="width:820px;margin:0 auto;text-align:right;position:relative;bottom:0px;margin-top:63px;padding-top:65px;color:#363636;font-size:10px;font-family:Verdana"><strong>plantillas web</strong> en <a href="http://www.freeplantillas.com/"><strong>plantillas web</strong></a></div>																			 
	</div>	
	<!--END OF TERMS OF USE-->	
		<div class="page-container">
			<?$this->load->view('common/header')?>
			<div  id="content" class="bg-gradient container  no_left no_right">
				<div class="first-part">

					<div class="slide">
						<div id="wowslider-container1">
							<div class="ws_images"><ul>
									<li><img src="/assets/images/ofertas/slider/2-consola-4juegos.jpg" alt="" title="TECHNOLOGIX WEBSITE" id="wows1_0"/>YOUR OWN IMAGES AND SLOGANS</li>
									<li><img src="/assets/images/ofertas/slider/2-lavadoras-haceb.jpg" alt="" title="MY WEBSITE PRODUCTS" id="wows1_1"/>YOUR OWN IMAGES AND SLOGANS</li>
									<li><img src="/assets/images/ofertas/slider/vtr_gimnasio-290316.jpg" alt="" title="TECHNOLOGIX WEBSITE" id="wows1_0"/>YOUR OWN IMAGES AND SLOGANS</li>
								</ul>
							</div>
						</div>
					</div>

					<nav>
						<ul>
							<li class="active">
								<i></i>
								<a class="gradient-blue" href="/">Home</a>
							</li>
							<li>
								<i></i>
								<a class="gradient-lightblue" href="/ofertas/categoria/1">Tecnologia</a>
							</li>
							<li>
								<i></i>
								<a class="gradient-green" href="materials.htm">Belleza</a>
							</li>
							<li>
								<i></i>
								<a class="gradient-oranje" href="equipments.htm">Deportes</a>
							</li>
							<li>
								<i></i>
								<a class="gradient-red" href="services.htm">Motor</a>
							</li>
							<li>
								<i></i>
								<a class="gradient-pink" href="products.htm">Viajes</a>
							</li>
							<li>
								<i></i>
								<a class="gradient-purple" href="careers.htm">M&aacute;s</a>
							</li>
						</ul>
					</nav>

					<div class="clear"></div>

				</div>


				<div  class="container">

					<div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <?foreach($ofertas as $oferta):?>
                                    <div class="col-md-3">
                                        <div class="">
                                            <h4><?=$oferta->name?></h4>
                                            <img src="/assets/images/ofertas/<?= $oferta->imagen?>">
                                            <p><?= $oferta->description?></p>
                                            <a class="grey-gradient" href="/ofertas/details/<?= $oferta->id?>">View Details</a>
                                        </div>
                                    </div>

                                <?endforeach?>
                            </div>
                        </div>
<!--
						<div class="col-md-6 col-xs-12">
							<h2>MAURIS PORTTITOR TACULIS IMPERDIET</h2>
							<div class="content-text">
								<p class="bold grey">Mauris libero sem, lacinia sit amet sollicitudin venenatis, gravida nec arcu. Duis convallis eros eget justo venenatis a sagittis feugiat.</p>

								<p>Etiam pharetra auctor dictum. Sed enim nulla, rhoncus in lacinia in, rhoncus ut arcu. Etiam nulla felis, bibendum eu aliquam id, semper nec odio. Curabitur ante enim, sodales sed consectetur a, ullamcorper id turpis.uspendisse lacus erat, vehicula et vehicula a, consequat quis sem. Nulla facilisi. Aenean euismod, risus sed sagittis suscipit. <br>
								Cras lobortis scelerisque odio quis aliquam. Aenean est elit, tristique et feugiat et, tincidunt ut augue. Pellentesque eget pretium massa.</p>

								<ul class="grey-list">
									<li>
										<span class="grey">LOREM IPSUM  </span>
										Dolor sit amet, consectetur elit.
									</li>
									<li>
										<span class="grey">DONEC RHONCUS </span>
										Dolor sit amet, consectetur elit.
									</li>
									<li>
										<span class="grey">PRAESENT NEC ODIO </span>
										 Dolor sit amet, consectetur elit.
									</li>
								</ul>

							</div>

							<div class="bg-white radius">
								<img src="/assets/images/fond_bloc2.jpg" alt="images" class="fl">
								<div class="text-content">
									<p>CLASS APTENTE TACITI SOCIOS QUE AD LITORA TORQUENT PER CONUBIA</p>
									<ul class="blue-list">
										<li>
											Ut elementum eros ut sapien dignissim pellentesque.
										</li>
										<li>
											Ut elementum eros ut sapien dignissim pellentesque.
										</li>
										<li>
											Ut elementum eros ut sapien dignissim pellentesque.
										</li>
										<li>
											Ut elementum eros ut sapien dignissim pellentesque.
										</li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
						</div>
-->
                        <!--
						<aside class="col-md-6 col-xs-12">
							<div class="row">
								<div class="col-md-6 col-xs-12 no_left">
									<div class="bloc-blue radius shadow">
										<h4>ADDITIONAL SERVICES</h4>
										<p>Vivamus gravida dapibus lorem eget tincidunt. Proin sagittis erat sed urna scelerisque fringilla. Vivamus gravida dapibus lorem eget tincidunt. Proin sagittis erat sed urna scelerisque fringilla. </p>
										<a class="grey-gradient" href="services.htm">View details</a>
									</div>
									<div class="reflect blue hide-mobile"></div>
								</div>
								<div class="col-md-6 col-xs-12 no_right">
									<div class="bloc-green radius shadow">
										<h4>PLUMBING & ELECTRICITY</h4>
										<p>Vivamus gravida dapibus lorem eget tincidunt. Proin sagittis erat sed urna scelerisque fringilla. Vivamus gravida dapibus lorem eget tincidunt. Proin sagittis erat sed urna scelerisque fringilla. </p>
										<a class="grey-gradient" href="services.htm">Our prices</a>
									</div>
									<div class="reflect green hide-mobile"></div>
								</div>
							</div>

							<div class="row">
								<ul class="calendar">
									<li>
										<div class="date-event">
											<span class="date">07</span>
											<span class="mois">sept</span>
										</div>
										<div class="event">
											<p>Curabitur faucibus justo vel turpis vehicula quis pretium orci dignissim. Donec leo ante, mattis nec cursus eget, volutpat nec arcu...</p>
											<a href="news.htm" class="fr">Read more</a>
										</div>
									</li>

									<li>
										<div class="date-event">
											<span class="date">16</span>
											<span class="mois">nov</span>
										</div>
										<div class="event">
											<p>Curabitur faucibus justo vel turpis vehicula quis pretium orci dignissim. Donec leo ante, mattis nec cursus eget, volutpat nec arcu...</p>
											<a href="news.htm" class="fr">Read more</a>
										</div>
									</li>

									<li>
										<div class="date-event">
											<span class="date">23</span>
											<span class="mois">avr</span>
										</div>
										<div class="event">
											<p>Curabitur faucibus justo vel turpis vehicula quis pretium orci dignissim. Donec leo ante, mattis nec cursus eget, volutpat nec arcu...</p>
											<a href="news.htm" class="fr">Read more</a>
										</div>
									</li>
								</ul>
							</div>

						</aside>
						-->
						
					</div>

					



				</div>

			</div>

			
		
		</div>

		<!-- footer -->
		<footer class="footer container">
			
			<div class="container copyright">
				<p>© Copyright 2015 Company. All right reserved </p>
<p>
						<a href="faq.htm">FAQ</a>
					|
						<a href="about.htm">ABOUT US</a>
					|
						<a href="contact.htm">CONTACT</a>
</p>
			</div>

		</footer>
		<!-- end footer -->

		<audio id="audio-bg">
			<!--source src="audio/music.mp3"-->
		</audio>

		<script type='text/javascript' src="js/jquery-2.1.3.js"></script>
		<script type='text/javascript' src="assets/js/visuallightbox.js"></script>
		<script type='text/javascript' src="assets/js/vlbdata.js"></script>
		<script type="text/javascript" src="assets/js/wowslider.js"></script>
		<script type="text/javascript" src="assets/js/wowslider-gallery.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>
		<script type="text/javascript" src="assets/js/script-gallery.js"></script>
		<script type='text/javascript' src="js/app.js"></script>

  </div>
  </body>
</html>