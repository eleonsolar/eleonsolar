<?php include 'config/constants.php'; ?>
<?php include 'init.php'; ?>
<!DOCTYPE HTML>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf8">
		<!-- PACE Loader -->
		<script src="main/libs/pace/js/pace.min.js"></script>
		<link href="main/libs/pace/css/pace.css" rel="stylesheet">
		<!-- END PACE Loader -->

		<title><?php echo $utilities->lang('title.site'); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="icon" href="main/images/favicon.ico">
		<link rel="stylesheet" href="main/assets/css/main.css" />
		<link rel="stylesheet" href="main/assets/css/skillbar.css" />
		<link rel="stylesheet" href="main/assets/css/accordion.css" />
		<link rel="stylesheet" href="main/assets/css/portafolio.css" />
		<link rel="stylesheet" href="main/assets/css/service.css" />
		<link rel="stylesheet" href="main/assets/css/slide.css" />
		<link rel="stylesheet" href="main/libs/sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="main/assets/css/skillcircle.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="main/libs/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="main/libs/slick/slick.css">
		<link rel="stylesheet" href="main/libs/slick/slick-theme.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style type="text/css">

			.btn-close{

				background-color: #cd4f4f;
			}
			.btn-close:hover{

				background-color:  #3d3c3c;
			}
			.btn-down:hover{

				color:  #D56565;
			}
			.link-main:hover{

        color:  #3d3c3c;
      }
			.max-size-image{
				max-height: 175px;
				min-height: 160px;
			}
			.arrow:hover{
				 color: #fff;
			}
			.exit{
				color:#484848;
				font-size: 16px;
			}
			.exit:hover{
				color: rgba(255, 255, 255, 0.8);
			}
			.active{
				color:#D56565;
			}
			#exit-link{
				padding-right: 25px;
			}
			#exit-link > a{
				border-bottom-color: rgba(255, 255, 255, 0);
			}
			.ico-company{
				-webkit-filter: grayscale(100%);
				-moz-filter: grayscale(100%);
				-ms-filter: grayscale(100%);
				-o-filter: grayscale(100%);
				filter: grayscale(100%);
			}
			.slider {
	        width: 50%;
	        margin: 100px auto;
	    }

	    .slick-slide {
	      margin: 0px 20px;
	    }

	    .slick-slide img {
	      width: 100%;
	    }

	    .slick-prev:before,
	    .slick-next:before {
	      color: black;
	    }


	    .slick-slide {
	      transition: all ease-in-out .3s;
	      opacity: .2;
	    }

	    .slick-active {
	      opacity: .5;
	    }

	    .slick-current {
	      opacity: 1;
	    }
		.btn-back-to-top{
			position: fixed;
			bottom: 20px;
			right: 20px;
			font-size: 22px;
			padding: 3px 15px;
			border-radius: 0;
			display: none;
			color: #D56565;
		}
		.btn-back-to-top {
			border-color: #D56565;
		}
		.btn-back-to-top:hover {
			background-color: #3d3c3c;
			border-color: #3d3c3c;
			color: #D56565;
		}
		.btn-back-to-top:visited {
		 	color: #D56565;
		}
		.row-label{
			margin-bottom: 10px;
		}
	</style>
	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar60"><img src="main/images/avatar.jpeg" alt="" /></span>
							<span class="language"><a href="http://edwardleon.com.ve/?lang=es" style="border-bottom-color: rgba(255, 255, 255, 0);" class="lang <?php echo (!isset($_GET['lang']) || $_GET['lang']=='es')?'active':null; ?>">ES</a> | <a href="http://edwardleon.com.ve/?lang=en" style="border-bottom-color: rgba(255, 255, 255, 0);" class="lang <?php echo (isset($_GET['lang']) && $_GET['lang']=='en')?'active':null; ?>">EN</a></span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home"><?php echo $utilities->lang('title.home.header'); ?></span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user"><?php echo $utilities->lang('title.aboutme.header'); ?></span></a></li>
								<li><a href="#skills" id="skills-link" class="skel-layers-ignoreHref"><span class="icon fa-code"><?php echo $utilities->lang('title.skills.header'); ?></span></a></li>
								<li><a href="#service" id="service-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench"><?php echo $utilities->lang('title.services.header'); ?></span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th"><?php echo $utilities->lang('title.portfolio.header'); ?></span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope"><?php echo $utilities->lang('title.contact.header'); ?></span></a></li>

							</ul>
						</nav>

				</div>
				<div class="bottom">

								<!-- Social Icons -->
									<ul class="icons">
										<li><a href="https://twitter.com/eleonsolar" class="icon fa-twitter fa-1x" target="_blank"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/eleonsolar" class="icon fa-facebook fa-1x" target="_blank"><span class="label">Facebook</span></a></li>
										<!--<li><a href="https://plus.google.com/108436949081636923793" class="icon fa-google-plus fa-1x" target="_blank"><span class="label">Google+</span></a></li>-->
										<li><a href="https://www.instagram.com/eleonsolar" class="icon fa-instagram fa-1x" target="_blank"><span class="label">Instagram</span></a></li>
										<li><a href="https://github.com/eleonsolar" class="icon fa-github fa-1x" target="_blank"><span class="label">Github</span></a></li>
										<li><a href="https://ve.linkedin.com/in/edward-esteban-le%C3%B3n-solar-a51381127?trk=prof-samename-name" class="icon fa-linkedin fa-1x" target="_blank"><span class="label">Linkedin</span></a></li>
										<!--<li><a href="https://www.youtube.com/channel/UCL1c50CaO6pkRDy450Bp5BA" class="icon fa-youtube fa-1x" target="_blank"><span class="label">Youtube</span></a></li>	-->
									</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">
				<div id="container">
					<!-- Intro -->
					<section id="top" class="home">

								<!-- Superslides -->
								<div id="home-slide">

										<ul class="slides-container text-center">
												<li>
														<div class="slide-text">
																<h2 id="slide1" style="font-family: 'Raleway', sans-serif;"><?php echo $utilities->lang('title.slide.1'); ?></h2>
																<span id="subtitle-slide1"><?php echo $utilities->lang('subtitle.slide.1'); ?></span>
																<br/><br/>
																<a id="arrow1" href="#about" class="scrolly" style="border-bottom-color: rgba(255, 255, 255, 0);color:#ececec">
																	<i class="fa fa-angle-double-down fa-3x btn-down arrow" aria-hidden="true" style="text-decoration: none;"></i>
																</a>
																<!--<a href="#about" class="button button-row style2 down scrolly" style="border-radius: 3.5em;">Más</a>-->
														</div>
														<div class="slide-filter" style="background:rgba(38, 41, 46, 0.7);"></div>
														<div style="background-image: url('main/images/slide/slide01.jpg');" class="bg-parallax parallaxize"></div>
												</li>
												<li>
														<div class="slide-text">
																<h2 id="slide2" style="font-family: 'Raleway', sans-serif;"><?php echo $utilities->lang('title.slide.2'); ?></h2>
																<span id="subtitle-slide2"><?php echo $utilities->lang('subtitle.slide.2'); ?></span>
																<br/><br/>
																<a id="arrow2" href="#about" class="scrolly" style="border-bottom-color: rgba(255, 255, 255, 0);color:#ececec">
																	<i class="fa fa-angle-double-down fa-3x btn-down arrow" aria-hidden="true" style="text-decoration: none;"></i>
																</a>
																<!--<a href="#about" class="button button-row style2 down scrolly" style="border-radius: 3.5em;">Más</a>-->
														</div>
														<div class="slide-filter"></div>
														<div style="background-image: url('main/images/slide/slide02.jpg');" class="bg-parallax parallaxize"></div>
												</li>
										</ul>
										<nav class="slides-navigation slidez">
												<a href="javascript:;" class="next">
														<i class="fa fa-angle-right"></i>
												</a>
												<a href="javascript:;" class="prev">
														<i class="fa fa-angle-left"></i>
												</a>
										</nav>
								</div>
								<!-- End of Superslide -->
						</section>
					</div>

				<!-- About Me -->
					<section id="about" class="two">
							<div class="container">
									<header>
										<h2><?php echo $utilities->lang('title.aboutme.section'); ?></h2>
									</header>

									<p style="text-align:justify">
										 <?php echo $utilities->lang('content.aboutme.section'); ?>
									</p>
									<a target="_blank" href="<?= $utilities->lang('url.resume'); ?>"><button><?= $utilities->lang('content.aboutme.resume'); ?></button></a>
								</div>
								<br />
								<!-- Techs -->
								<!--<article class="12u 12u$(xsmall) work-item" style>
									<img src="web/images/techs/python.png" alt="" />
									<img src="web/images/techs/php.png" alt="" />
									<img src="web/images/techs/bootstrap2.png" alt="" />
									<img src="web/images/techs/js.png" alt="" />
									<img src="web/images/techs/react-logo.png" alt="" />
									<img src="web/images/techs/node2.png" alt="" />
									<img src="web/images/techs/angular.png" alt="" />
									<img src="web/images/techs/wordpress.png" alt="" />
								</article>-->
					</section>
					<!-- Skills -->
					<section id="skills" class="three">
							<div class="container">
									<header>
										<h2><?php echo $utilities->lang('title.skills.section'); ?></h2>
									</header>
									<div class="row row-label">
												<div class="3u 12u$(mobile)"><h3>Frameworks</h3></div>
									</div>
									<div class="container-skillscircle ">
											<div class="row">
														<div class="3u 12u$(mobile) portfolio-item">
											            <div class="card" id="card1">
											                <div class="box">
											                    <div class="percent">
											                        <svg>
											                            <circle cx="70" cy="70" r="70"></circle>
											                            <circle cx="70" cy="70" r="70"></circle>
											                        </svg>
											                        <div class="number">
											                            <h2>100<span>%</span></h2>
											                        </div>
											                    </div>
											                    <h2 class="text">Codeigniter</h2>
											                </div>
											            </div>
														</div>
														<div class="3u 12u$(mobile) portfolio-item">
																<div class="card" id="card4">
																		<div class="box">
																				<div class="percent">
																						<svg>
																								<circle cx="70" cy="70" r="70"></circle>
																								<circle cx="70" cy="70" r="70"></circle>
																						</svg>
																						<div class="number">
																								<h2>100<span>%</span></h2>
																						</div>
																				</div>
																				<h2 class="text">Bootstrap</h2>
																		</div>
																</div>
														</div>
														<div class="3u 12u$(mobile) portfolio-item">
											            <div class="card" id="card2" >
											                <div class="box">
											                    <div class="percent">
											                        <svg>
											                            <circle cx="70" cy="70" r="70"></circle>
											                            <circle cx="70" cy="70" r="70"></circle>
											                        </svg>
											                        <div class="number">
											                            <h2>80<span>%</span></h2>
											                        </div>
											                    </div>
											                    <h2 class="text">Yii2</h2>
											                </div>
											            </div>
														</div>
														<div class="3u 12u$(mobile) portfolio-item">
											            <div class="card" id="card3">
											                <div class="box">
											                    <div class="percent">
											                        <svg>
											                            <circle cx="70" cy="70" r="70"></circle>
											                            <circle cx="70" cy="70" r="70"></circle>
											                        </svg>
											                        <div class="number">
											                            <h2>60<span>%</span></h2>
											                        </div>
											                    </div>
											                    <h2 class="text">Laravel</h2>
											                </div>
											            </div>
															</div>
											</div>
									</div>
									<div class="row row-label">
												<div class="3u 12u$(mobile)"><h3>Lenguajes</h3></div>
									</div>
									<div class="container-skillscircle ">
											<div class="row">
														<div class="3u 12u$(mobile) portfolio-item">
																	<div class="card" id="card5">
																			<div class="box">
																					<div class="percent">
																							<svg>
																									<circle cx="70" cy="70" r="70"></circle>
																									<circle cx="70" cy="70" r="70"></circle>
																							</svg>
																							<div class="number">
																									<h2>100<span>%</span></h2>
																							</div>
																					</div>
																					<h2 class="text">PHP</h2>
																			</div>
																	</div>
														</div>
														<div class="3u 12u$(mobile) portfolio-item">
																	<div class="card" id="card9">
																			<div class="box">
																					<div class="percent">
																							<svg>
																									<circle cx="70" cy="70" r="70"></circle>
																									<circle cx="70" cy="70" r="70"></circle>
																							</svg>
																							<div class="number">
																									<h2>80<span>%</span></h2>
																							</div>
																					</div>
																					<h2 class="text">Javascript</h2>
																			</div>
																	</div>
														</div>
														<div class="3u 12u$(mobile) portfolio-item">
																<div class="card" id="card6">
																		<div class="box">
																				<div class="percent">
																						<svg>
																								<circle cx="70" cy="70" r="70"></circle>
																								<circle cx="70" cy="70" r="70"></circle>
																						</svg>
																						<div class="number">
																								<h2>60<span>%</span></h2>
																						</div>
																				</div>
																				<h2 class="text">Python</h2>
																		</div>
																</div>
													    </div>
													    <div class="3u 12u$(mobile) portfolio-item">
																<div class="card" id="card7">
																		<div class="box">
																				<div class="percent">
																						<svg>
																								<circle cx="70" cy="70" r="70"></circle>
																								<circle cx="70" cy="70" r="70"></circle>
																						</svg>
																						<div class="number">
																								<h2>50<span>%</span></h2>
																						</div>
																				</div>
																				<h2 class="text">Java</h2>
																		</div>
																</div>
													    </div>
											</div>
									</div>
									<div class="row row-label">
												<div class="3u 12u$(mobile)"><h3>Bases de datos</h3></div>
									</div>
									<div class="container-skillscircle ">
											<div class="row">
													<div class="3u 12u$(mobile) portfolio-item">
																<div class="card" id="card12">
																		<div class="box">
																				<div class="percent">
																						<svg>
																								<circle cx="70" cy="70" r="70"></circle>
																								<circle cx="70" cy="70" r="70"></circle>
																						</svg>
																						<div class="number">
																								<h2>100<span>%</span></h2>
																						</div>
																				</div>
																				<h2 class="text">PostgreSql</h2>
																		</div>
																</div>
													</div>
													<div class="3u 12u$(mobile) portfolio-item">
																<div class="card" id="card13">
																		<div class="box">
																				<div class="percent">
																						<svg>
																								<circle cx="70" cy="70" r="70"></circle>
																								<circle cx="70" cy="70" r="70"></circle>
																						</svg>
																						<div class="number">
																								<h2>100<span>%</span></h2>
																						</div>
																				</div>
																				<h2 class="text">Mysql</h2>
																		</div>
																</div>
													</div>
													<div class="3u 12u$(mobile) portfolio-item">
																<div class="card" id="card14">
																		<div class="box">
																				<div class="percent">
																						<svg>
																								<circle cx="70" cy="70" r="70"></circle>
																								<circle cx="70" cy="70" r="70"></circle>
																						</svg>
																						<div class="number">
																								<h2>60<span>%</span></h2>
																						</div>
																				</div>
																				<h2 class="text">Mariadb</h2>
																		</div>
																</div>
													</div>
													<div class="3u 12u$(mobile) portfolio-item">
																<div class="card-empty" ></div>
													</div>
											</div>
									</div>
									<h3 style="text-align:left"><span style="font-weight:bold">Otros:</span> HTML, CSS, Plpgsql, Wordpress, Jquery, Git, SVN, Pentaho DI, Codeception, API Rest.</h3>
							</div>
					</section>
					<!-- Services -->
					<section id="service" class="four">
							<div class="container">
									<header>
										<h2><?php echo $utilities->lang('title.services.section'); ?></h2>
									</header>
									<div class="row">
										<div class="6u 12u$(mobile) service-item">
											<article class="item-service">
												<i class="fa fa-3x fa-users" aria-hidden="true"></i>
												<h3><?php echo $utilities->lang('title.item1.services.section'); ?></h3>
												<h4 style="margin-top:10px;"><?php echo $utilities->lang('subtitle.item1.services.section'); ?></h4>
											</article>
										</div>
										<div class="6u 12u$(mobile) service-item">
											<article class="item-service">
												<i class="fa fa-3x fa-code" aria-hidden="true" ></i>
												<h3 ><?php echo $utilities->lang('title.item2.services.section'); ?></h3>
												<h4 style="margin-top:10px"><?php echo $utilities->lang('subtitle.item2.services.section'); ?></h4>
											</article>
										</div>

									</div>
									<div class="row">
                  	<div class="6u 12u$(mobile) service-item">
											<article class="item-service">
												<i class="fa fa-3x fa-terminal" aria-hidden="true" ></i>
												<h3 ><?php echo $utilities->lang('title.item3.services.section'); ?></h3>
												<h4 style="margin-top:10px"><?php echo $utilities->lang('subtitle.item3.services.section'); ?></h4>
											</article>
										</div>
										<div class="6u 12u$(mobile) service-item">
											<article class="item-service">
												<i class="fa fa-3x fa-database" aria-hidden="true"></i>
												<h3 ><?php echo $utilities->lang('title.item4.services.section'); ?></h3>
												<h4 style="margin-top:10px"><?php echo $utilities->lang('subtitle.item4.services.section'); ?></h4>
											</article>
										</div>
									</div>
							</div>
					</section>
					<!-- Portfolio -->
						<section id="portfolio" class="five">
							<div class="container">
								<header>
									<h2><?php echo $utilities->lang('title.portfolio.section'); ?></h2>
								</header>

								<section class="center slider" id="company-slider">
										<div>
												<a href="http://www.cantv.net/" ><img src="main/images/clients/cantv.jpg" class="ico-company img-responsive " style="width: 80pt;height:40pt"/></a>
										</div>
										<div>
												<a href="https://www.develoop.net/" ><img src="main/images/clients/develoop.png" class="ico-company img-responsive " style="width: 80pt;height:40pt"/></a>
										</div>
									  <div>
												<a href="https://www.wearecontent.com/" ><img src="main/images/clients/wac.png"  class="ico-company img-responsive " style="width: 120pt;height:35pt"/></a>
										</div>
										<div>
												<a href="https://www.pegasus.com.mx/" ><img src="main/images/clients/pegasus.png" class="ico-company img-responsive " style="width: 110pt;height:40pt"/></a>
										</div>
								</section>
								<div class="row">
									<div class="4u 12u$(mobile) portfolio-item">
											<article class="item">
													<a class="image fit portfolio-link" href="#ordil" data-toggle="modal">
															<div class="caption">
																	<div class="caption-content">
																			<i class="fa fa-search-plus fa-3x"></i>
																	</div>
															</div>
															<img src="main/images/portfolio/pic20.png" class="img-responsive max-size-image" alt="ORDIL" />
															<header >
																	<h3>ORDIL</h3>
															</header>
													</a>
											</article>
									</div>
                                    <div class="4u 12u$(mobile) portfolio-item">
                                        <article class="item">
                                            <a class="image fit portfolio-link" href="#wacmarcablanca" data-toggle="modal">
                                                <div class="caption">
                                                    <div class="caption-content">
                                                        <i class="fa fa-search-plus fa-3x"></i>
                                                    </div>
                                                </div>
                                                <img src="main/images/portfolio/pic19.png" class="img-responsive max-size-image" alt="WACMARCABLANCA" />
                                                <header >
                                                    <h3>WACMARCABLANCA</h3>
                                                </header>
                                            </a>
                                        </article>
                                    </div>
									<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#aignep" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic16.png" class="img-responsive max-size-image" alt="AIGNEP" />
												<header >
														<h3>AIGNEP</h3>
												</header>
										  </a>
										</article>
									</div>
									<!--<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#dormir" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic15.png" class="img-responsive max-size-image" alt="DORMIR BALNEARIOS" />
												<header >
														<h3>DORMIR BALNEARIOS</h3>
												</header>
										  </a>
										</article>
									</div>-->
									<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#hospitalk" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic14.png" class="img-responsive max-size-image" alt="HOSPITALK" />
												<header >
														<h3>HOSPITALK</h3>
												</header>
										  </a>
										</article>
									</div>
									<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#miquelsuay" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic13.png" class="img-responsive max-size-image" alt="MIQUEL SUAY" />
												<header >
														<h3>MIQUEL SUAY</h3>
												</header>
										  </a>
										</article>
									</div>
									<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#visegurity" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic12.png" class="img-responsive max-size-image" alt="VISEGURITY" />
												<header >
														<h3>VISEGURITY</h3>
												</header>
										  </a>
										</article>
									</div>
									<!--<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#nsource" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic10.png" class="img-responsive max-size-image" alt="NSOURCE" />
												<header >
														<h3>NSOURCE</h3>
												</header>
										  </a>
										</article>
									</div>-->
								  <div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#fooquo" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic01.png" class="img-responsive max-size-image" alt="FOOQUO" />
												<header >
														<h3>FOOQUO</h3>
												</header>
										  </a>
										</article>
									</div>
									<!--<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#web_personal" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic09.png" class="img-responsive max-size-image" alt="WEB PERSONAL" />
												<header>
														<h3>WEB PERSONAL</h3>
												</header>
										  </a>
										</article>
									</div>
									<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#develoop" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic18.png" class="img-responsive max-size-image" alt="DEVELOOP" />
												<header>
														<h3>DEVELOOP</h3>
												</header>
										  </a>
										</article>
									</div>-->
									<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#sigecip" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic02.png" class="img-responsive max-size-image" alt="SIGECIP" />
												<header>
														<h3>SIGECIP</h3>
												</header>
										  </a>
										</article>
									</div>
									<!--<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#contratos" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic17.png" class="img-responsive max-size-image" alt="CONTRATOS" />
												<header>
														<h3>CONTRATOS</h3>
												</header>
										  </a>
										</article>
									</div>-->
									<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#miequipo" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic06.png" class="img-responsive max-size-image" alt="MIEQUIPO" />
												<header>
														<h3>MIEQUIPO</h3>
												</header>
										  </a>
										</article>
									</div>
									<!--<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#siredoc" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic05.png" class="img-responsive max-size-image" alt="SIREDOC" />
												<header>
														<h3>SIREDOC</h3>
												</header>
									   	</a>
										</article>
									</div>
									<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#crud_demo" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img src="main/images/portfolio/pic08.png" class="img-responsive max-size-image" alt="CRUD DEMO" />
												<header>
														<h3>CRUD DEMO</h3>
												</header>
										  </a>
										</article>
									</div>-->
									<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#dirdigi" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img  src="main/images/portfolio/pic04.png" class="img-responsive max-size-image" alt="DIRDIGI" />
												<header>
														<h3>DIRDIGI</h3>
												</header>
										  </a>
										</article>
									</div>
									<div class="4u 12u$(mobile) portfolio-item">
										<article class="item">
											<a class="image fit portfolio-link" href="#mvo" data-toggle="modal">
												<div class="caption">
														<div class="caption-content">
																<i class="fa fa-search-plus fa-3x"></i>
														</div>
												</div>
												<img  src="main/images/portfolio/pic03.png" class="img-responsive max-size-image" alt="MVO" />
												<header>
														<h3>MVO</h3>
												</header>
										  </a>
										</article>
									</div>
								</div>
						</section>
				<!-- Contact -->
					<section id="contact" class="six">
						<div class="container">

							<header>
								<h2><?php echo $utilities->lang('title.contact.section'); ?></h2>
							</header>

							<p><?php echo $utilities->lang('content.contact.section'); ?></p>

							<form method="post" id="form-contact">
								<div class="row">
									<div class="6u 12u$(mobile) name"><input type="text" name="name" placeholder="<?php echo $utilities->lang('form.name.contact'); ?>" /></div>
									<div class="6u$ 12u$(mobile) email"><input type="text" name="email" placeholder="<?php echo $utilities->lang('form.email.contact'); ?>" /></div>
									<div class="12u$">
										<textarea class="message" name="message" placeholder="<?php echo $utilities->lang('form.message.contact'); ?>"></textarea>
									</div>
								</div>
							</form>
							<div class="12u$ showcase sweet">
									<button style="font-size:15pt;margin-top:5pt"><?php echo $utilities->lang('form.submit.contact'); ?></button>
							</div>
					</section>
			</div>
		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; 2016 - <?php echo date('Y'); ?> Edward Esteban León Solar</li>
					</ul>
					<a href="#top" id="back-to-top" class="btn btn-sm btn-red btn-back-to-top scrolly hidden-xs hidden-sm skel-layers-ignoreHref" style="display: inline;border-bottom-color: #D56565;" title="home" role="button">
						<i class="fa fa-angle-up"></i>
					</a>
			</div>

		<!-- Portfolio Modals -->
				<!-- WACMARCABLANCA -->
				<div class="portfolio-modal modal fade" id="ordil" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
								<div class="close-modal" data-dismiss="modal">
										<div class="lr">
												<div class="rl">
												</div>
										</div>
								</div>
								<div class="container">
										<div class="row">
												<div class="col-lg-8 col-lg-offset-2">
														<div class="modal-body">
																<h2>ORDIL</h2>
																<br>
																<img src="main/images/portfolio/pic20.png" class="img-responsive img-centered" alt="ORDIL">
																<p> <?php echo $utilities->lang('project.ordil.description'); ?></p>
																<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span><?php echo $utilities->lang('project.ordil.whatidid'); ?></p>
																<ul class="list-inline item-details item-details-size">
																		<li><?php echo $utilities->lang('client'); ?>
																				<a class="link-main" href="https://www.pegasus.com.mx/" target="_blank">Pegasus Control</a>
																		</li>
																		<li><?php echo $utilities->lang('date'); ?>
																				<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.may').' '; ?> 2020 - <?php echo $utilities->lang('present').' '; ?></a>
																		</li>
																		<li><?php echo $utilities->lang('services'); ?>
																				<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
																		</li>
																</ul>
																<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
        <!-- WACMARCABLANCA -->
        <div class="portfolio-modal modal fade" id="wacmarcablanca" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>WACMARCABLANCA</h2>
                                <br>
                                <img src="main/images/portfolio/pic19.png" class="img-responsive img-centered" alt="WACMARCABLANCA">
                                <p> <?php echo $utilities->lang('project.wacmarcablanca.description'); ?></p>
                                <p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span><?php echo $utilities->lang('project.wacmarcablanca.whatidid'); ?></p>
                                <ul class="list-inline item-details item-details-size">
                                    <li><?php echo $utilities->lang('client'); ?>
                                        <a class="link-main" href="https://www.wearecontent.com/" target="_blank">WeAreContent</a>
                                    </li>
                                    <li><?php echo $utilities->lang('date'); ?>
                                        <a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.december').' '; ?> 2018 - <?php echo $utilities->lang('month.march').' '; ?> 2020</a>
                                    </li>
                                    <li><?php echo $utilities->lang('services'); ?>
                                        <a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- AIGNEP -->
		<div class="portfolio-modal modal fade" id="aignep" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
								<div class="lr">
										<div class="rl">
										</div>
								</div>
						</div>
						<div class="container">
								<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
												<div class="modal-body">
														<h2>AIGNEP</h2>
														<br>
														<img src="main/images/portfolio/pic16.png" class="img-responsive img-centered" alt="AIGNEP">
														<p> <?php echo $utilities->lang('project.aignep.description'); ?></p>
														<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span><?php echo $utilities->lang('project.aignep.whatidid'); ?></p>
														<ul class="list-inline item-details item-details-size">
															<li><?php echo $utilities->lang('client'); ?>
																	<a class="link-main" href="http://www.develoop.net/" target="_blank">Develoop Software</a>
															</li>
															<li><?php echo $utilities->lang('date'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.january').' '; ?> 2018 - <?php echo $utilities->lang('month.july').' '; ?> 2018</a>
															</li>
															<li><?php echo $utilities->lang('services'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
															</li>
														</ul>
														<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- DORMIR BALNEARIOS -->
		<div class="portfolio-modal modal fade" id="dormir" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
								<div class="lr">
										<div class="rl">
										</div>
								</div>
						</div>
						<div class="container">
								<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
												<div class="modal-body">
														<h2>DORMIR BALNEARIOS</h2>
														<br>
														<img src="main/images/portfolio/pic15.png" class="img-responsive img-centered" alt="DORMIR BALNEARIOS">
														<p> <?php echo $utilities->lang('project.dormirbalnearios.description'); ?></p>
														<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span> <?php echo $utilities->lang('project.dormirbalnearios.whatidid'); ?></p>
														<ul class="list-inline item-details item-details-size">
															<li><?php echo $utilities->lang('client'); ?>
																	<a class="link-main" href="http://www.develoop.net/" target="_blank">Develoop Software</a>
															</li>
															<li><?php echo $utilities->lang('date'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.december').' '; ?> 2017</a>
															</li>
															<li><?php echo $utilities->lang('services'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
															</li>
														</ul>
														<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- HOSPITALK -->
		<div class="portfolio-modal modal fade" id="hospitalk" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
								<div class="lr">
										<div class="rl">
										</div>
								</div>
						</div>
						<div class="container">
								<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
												<div class="modal-body">
														<h2>HOSPITALK</h2>
														<br>
														<img src="main/images/portfolio/pic14.png" class="img-responsive img-centered" alt="HOSPITALK">
														<p> <?php echo $utilities->lang('project.hospitalk.description'); ?></p>
														<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid'); ?></span> <?php echo $utilities->lang('project.hospitalk.whatidid'); ?></p>
														<ul class="list-inline item-details item-details-size">
															<li><?php echo $utilities->lang('client'); ?>
																	<a class="link-main" href="http://www.develoop.net/" target="_blank">Develoop Software</a>
															</li>
															<li><?php echo $utilities->lang('date'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.november').' '; ?> 2017 - <?php echo ' '.$utilities->lang('month.december').' '; ?> 2017</a>
															</li>
															<li><?php echo $utilities->lang('services'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
															</li>
														</ul>
														<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i><?php echo $utilities->lang('btn.close'); ?></button>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- MIQUEL SUAY -->
		<div class="portfolio-modal modal fade" id="miquelsuay" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
								<div class="lr">
										<div class="rl">
										</div>
								</div>
						</div>
						<div class="container">
								<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
												<div class="modal-body">
														<h2>MIQUEL SUAY</h2>
														<br>
														<img src="main/images/portfolio/pic13.png" class="img-responsive img-centered" alt="MIQUEL SUAY">
														<p><?php echo $utilities->lang('project.miquelsuay.description'); ?></p>
														<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span><?php echo $utilities->lang('project.miquelsuay.whatidid'); ?></p>
														<ul class="list-inline item-details item-details-size">
															<li><?php echo $utilities->lang('client'); ?>
																	<a class="link-main" href="http://www.develoop.net/" target="_blank">Develoop Software</a>
															</li>
															<li><?php echo $utilities->lang('date'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.october').' '; ?>2017 - <?php echo ' '.$utilities->lang('month.november').' '; ?> 2017</a>
															</li>
															<li><?php echo $utilities->lang('services'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
															</li>
														</ul>
														<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
			<!-- VISEGURITY -->
			<div class="portfolio-modal modal fade" id="visegurity" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
									<div class="lr">
											<div class="rl">
											</div>
									</div>
							</div>
							<div class="container">
									<div class="row">
											<div class="col-lg-8 col-lg-offset-2">
													<div class="modal-body">
															<h2>VISEGURITY</h2>
															<br>
															<img src="main/images/portfolio/pic12.png" class="img-responsive img-centered" alt="VISEGURITY">
															<p> <?php echo $utilities->lang('project.visegurity.description'); ?></p>
															<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span> <?php echo $utilities->lang('project.visegurity.whatidid'); ?></p>
															<ul class="list-inline item-details item-details-size">
																<li><?php echo $utilities->lang('client'); ?>
																		<a class="link-main" href="http://www.develoop.net/" target="_blank">Develoop Software</a>
																</li>
																<li><?php echo $utilities->lang('date'); ?>
																		<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.august').' '; ?> 2017 - <?php echo ' '.$utilities->lang('month.september').' '; ?> 2017</a>
																</li>
																<li><?php echo $utilities->lang('services'); ?>
																		<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
																</li>
															</ul>
															<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i><?php echo $utilities->lang('btn.close'); ?></button>
													</div>
											</div>
									</div>
							</div>
					</div>
			</div>
			<!-- NSOURCE -->
			<div class="portfolio-modal modal fade" id="nsource" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
									<div class="lr">
											<div class="rl">
											</div>
									</div>
							</div>
							<div class="container">
									<div class="row">
											<div class="col-lg-8 col-lg-offset-2">
													<div class="modal-body">
															<h2>NSOURCE</h2>
															<br>
															<img src="main/images/portfolio/pic10.png" class="img-responsive img-centered" alt="NSOURCE">
															<p> <?php echo $utilities->lang('project.nsource.description'); ?></p>
															<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid'); ?></span> <?php echo $utilities->lang('project.nsource.whatidid'); ?></p>
															<ul class="list-inline item-details item-details-size">
																<li><?php echo $utilities->lang('viewdemo'); ?>
																		<a class="link-main" href="<?php echo WEB_URL; ?>demo/nsource.test/login" target="_blank">NSource Test</a>
																</li>
																<li><?php echo $utilities->lang('date'); ?>
																		<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.june').' '; ?>2017</a>
																</li>
																<li><?php echo $utilities->lang('services'); ?>
																		<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
																</li>
															</ul>
															<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i><?php echo $utilities->lang('btn.close'); ?></button>
													</div>
											</div>
									</div>
							</div>
					</div>
			</div>
		  <!-- FOOQUO -->
			<div class="portfolio-modal modal fade" id="fooquo" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
									<div class="lr">
											<div class="rl">
											</div>
									</div>
							</div>
							<div class="container">
									<div class="row">
											<div class="col-lg-8 col-lg-offset-2">
													<div class="modal-body">
															<h2>FOOQUO</h2>
															<br>
															<img src="main/images/portfolio/pic01.png" class="img-responsive img-centered" alt="FOOQUO">
															<p> <?php echo $utilities->lang('project.fooquo.description'); ?></p>
															<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span> <?php echo $utilities->lang('project.fooquo.whatidid'); ?></p>
															<ul class="list-inline item-details item-details-size">
																	<li><?php echo $utilities->lang('client'); ?>
																			<a class="link-main" href="http://www.develoop.net/" target="_blank">Develoop Software</a>
																	</li>
																	<li><?php echo $utilities->lang('date'); ?>
																			<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.may').' '; ?> 2016 - <?php echo ' '.$utilities->lang('month.july').' '; ?>2017</a>
																	</li>
																	<li><?php echo $utilities->lang('services'); ?>
																			<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
																	</li>
															</ul>
															<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
													</div>
											</div>
									</div>
							</div>
					</div>
			</div>
			<!-- CRUD DEMO -->
		<div class="portfolio-modal modal fade" id="crud_demo" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
								<div class="lr">
										<div class="rl">
										</div>
								</div>
						</div>
						<div class="container">
								<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
												<div class="modal-body">
														<h2>CRUD DEMO</h2>
														<br>
														<img src="main/images/portfolio/pic08.png" class="img-responsive img-centered" alt="CRUD DEMO">
														<p> <?php echo $utilities->lang('project.cruddemo.description'); ?></p>
														<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span> <?php echo $utilities->lang('project.cruddemo.whatidid'); ?></p>
														<ul class="list-inline item-details item-details-size">
																<li><?php echo $utilities->lang('viewdemo'); ?>
																		<a class="link-main" href="<?php echo WEB_URL; ?>demo/crud/" target="_blank">CRUD Demo</a>
																</li>
																<li><?php echo $utilities->lang('date'); ?>
																		<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.december').' '; ?> 2014</a>
																</li>
																<li><?php echo $utilities->lang('services'); ?>
																		<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
																</li>
														</ul>
														<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- WEB PERSONAL -->
		<div class="portfolio-modal modal fade" id="web_personal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
								<div class="lr">
										<div class="rl">
										</div>
								</div>
						</div>
						<div class="container">
								<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
												<div class="modal-body">
														<h2>WEB PERSONAL</h2>
														<br>
														<img src="main/images/portfolio/pic09.png" class="img-responsive img-centered" alt="WEB PERSONAL">
														<p><?php echo $utilities->lang('project.webpersonal.description'); ?></p>
														<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid'); ?></span> <?php echo $utilities->lang('project.webpersonal.whatidid'); ?></p>
														<ul class="list-inline item-details item-details-size">
																<li><?php echo $utilities->lang('date'); ?>
																		<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.june').' '; ?> 2016 - <?php echo ' '.$utilities->lang('month.october').' '; ?> 2016</a>
																</li>
														</ul>
														<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- DEVELOOP -->
		<div class="portfolio-modal modal fade" id="develoop" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
								<div class="lr">
										<div class="rl">
										</div>
								</div>
						</div>
						<div class="container">
								<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
												<div class="modal-body">
														<h2>DEVELOOP</h2>
														<br>
														<img src="main/images/portfolio/pic18.png" class="img-responsive img-centered" alt="DEVELOOP">
														<p> <?php echo $utilities->lang('project.develoop.description'); ?></p>
														<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span> <?php echo $utilities->lang('project.develoop.whatidid'); ?></p>
														<ul class="list-inline item-details item-details-size">
														    <li><?php echo $utilities->lang('viewdemo'); ?>
																	<a class="link-main" href="<?php echo WEB_URL; ?>demo/develoop.test/index.php/home" target="_blank">Develoop Test</a>
															</li>
															<li><?php echo $utilities->lang('date'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.march').' '; ?> 2016</a>
															</li>
															<li><?php echo $utilities->lang('services'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
															</li>
														</ul>
														<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i><?php echo $utilities->lang('btn.close'); ?></button>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
			<!-- SIGECIP -->
		<div class="portfolio-modal modal fade" id="sigecip" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
								<div class="lr">
										<div class="rl">
										</div>
								</div>
						</div>
						<div class="container">
								<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
												<div class="modal-body">
														<h2>SIGECIP</h2>
														<br>
														<img src="main/images/portfolio/pic02.png" class="img-responsive img-centered" alt="SIGECIP">
														<p> <?php echo $utilities->lang('project.sigecip.description'); ?></p>
														<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span> <?php echo $utilities->lang('project.sigecip.whatidid'); ?></p>
														<ul class="list-inline item-details item-details-size">
																<li><?php echo $utilities->lang('client'); ?>
																		<a class="link-main" href="http://www.cantv.net/" target="_blank">CANTV</a>
																</li>
																<li><?php echo $utilities->lang('date'); ?>
																		<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.june').' '; ?> 2015 - <?php echo ' '.$utilities->lang('month.august').' '; ?> 2015</a>
																</li>
																<li><?php echo $utilities->lang('services'); ?>
																		<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
																</li>
														</ul>
														<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- CONTRATOS -->
		<div class="portfolio-modal modal fade" id="contratos" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
								<div class="lr">
										<div class="rl">
										</div>
								</div>
						</div>
						<div class="container">
								<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
												<div class="modal-body">
														<h2>CONTRATOS</h2>
														<br>
														<img src="main/images/portfolio/pic17.png" class="img-responsive img-centered" alt="AIGNEP">
														<p> <?php echo $utilities->lang('project.contratos.description'); ?></p>
														<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span><?php echo $utilities->lang('project.contratos.whatidid'); ?></p>
														<ul class="list-inline item-details item-details-size">
															<li><?php echo $utilities->lang('client'); ?>
																	<a class="link-main" href="http://www.cantv.net/" target="_blank">CANTV</a>
															</li>
															<li><?php echo $utilities->lang('date'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.june'); ?> 2015</a>
															</li>
															<li><?php echo $utilities->lang('services'); ?>
																	<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.shellscripts'); ?></a>
															</li>
														</ul>
														<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i><?php echo $utilities->lang('btn.close'); ?></button>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- MIEQUIPO -->
			<div class="portfolio-modal modal fade" id="miequipo" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-content">
							<div class="close-modal" data-dismiss="modal">
									<div class="lr">
											<div class="rl">
											</div>
									</div>
							</div>
							<div class="container">
									<div class="row">
											<div class="col-lg-8 col-lg-offset-2">
													<div class="modal-body">
															<h2>MIEQUIPO</h2>
															<br>
															<img src="main/images/portfolio/pic06.png" class="img-responsive img-centered" alt="MIEQUIPO">
															<p> <?php echo $utilities->lang('project.miequipo.description'); ?></p>
															<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span><?php echo $utilities->lang('project.miequipo.whatidid'); ?></p>
															<ul class="list-inline item-details item-details-size">
																	<li><?php echo $utilities->lang('client'); ?>
																			<a class="link-main" href="http://www.cantv.net/" target="_blank">CANTV</a>
																	</li>
																	<li><?php echo $utilities->lang('date'); ?>
																			<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.march').' '; ?> 2015 - <?php echo ' '.$utilities->lang('month.april').' '; ?>2015</a>
																	</li>
																	<li><?php echo $utilities->lang('services'); ?>
																			<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
																	</li>
															</ul>
															<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
													</div>
											</div>
									</div>
							</div>
					</div>
			</div>
			<!-- SIREDOC -->
				<div class="portfolio-modal modal fade" id="siredoc" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
								<div class="close-modal" data-dismiss="modal">
										<div class="lr">
												<div class="rl">
												</div>
										</div>
								</div>
								<div class="container">
										<div class="row">
												<div class="col-lg-8 col-lg-offset-2">
														<div class="modal-body">
																<h2>SIREDOC</h2>
																<br>
																<img src="main/images/portfolio/pic05.png" class="img-responsive img-centered" alt="SIREDOC">
																<p> <?php echo $utilities->lang('project.siredoc.description'); ?></p>
																<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span><?php echo $utilities->lang('project.siredoc.whatidid'); ?></p>
																<ul class="list-inline item-details item-details-size">
																		<li><?php echo $utilities->lang('client'); ?>
																				<a class="link-main" href="http://www.cantv.net/" target="_blank">CANTV</a>
																		</li>
																		<li><?php echo $utilities->lang('date'); ?>
																				<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.january').' '; ?> 2015</a>
																		</li>
																		<li><?php echo $utilities->lang('services'); ?>
																				<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
																		</li>
																</ul>
																<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- DIRDIGI -->
					<div class="portfolio-modal modal fade" id="dirdigi" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-content">
									<div class="close-modal" data-dismiss="modal">
											<div class="lr">
													<div class="rl">
													</div>
											</div>
									</div>
									<div class="container">
											<div class="row">
													<div class="col-lg-8 col-lg-offset-2">
															<div class="modal-body">
																	<h2>DIRDIGI</h2>
																	<br>
																	<img src="main/images/portfolio/pic04.png" class="img-responsive img-centered" alt="DIRDIGI">
																	<p> <?php echo $utilities->lang('project.dirdigi.description'); ?></p>
																	<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span><?php echo $utilities->lang('project.dirdigi.whatidid'); ?></p>
																	<ul class="list-inline item-details item-details-size">
																			<li><?php echo $utilities->lang('client'); ?>
																					<a class="link-main" href="http://www.cantv.net/" target="_blank">CANTV</a>
																			</li>
																			<li><?php echo $utilities->lang('date'); ?>
																					<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.october').' '; ?> 2014 - <?php echo ' '.$utilities->lang('month.november').' '; ?> 2014</a>
																			</li>
																			<li><?php echo $utilities->lang('services'); ?>
																					<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
																			</li>
																	</ul>
																	<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i><?php echo $utilities->lang('btn.close'); ?></button>
															</div>
													</div>
											</div>
									</div>
							</div>
					</div>
					<!-- MVO -->
						<div class="portfolio-modal modal fade" id="mvo" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-content">
										<div class="close-modal" data-dismiss="modal">
												<div class="lr">
														<div class="rl">
														</div>
												</div>
										</div>
										<div class="container">
												<div class="row">
														<div class="col-lg-8 col-lg-offset-2">
																<div class="modal-body">
																		<h2>MVO</h2>
																		<br>
																		<img src="main/images/portfolio/pic03.png" class="img-responsive img-centered" alt="MVO">
																		<p> <?php echo $utilities->lang('project.mvo.description'); ?></p>
																		<p> <span style="font-weight:bold"><?php echo $utilities->lang('whatidid').' '; ?></span> <?php echo $utilities->lang('project.mvo.whatidid'); ?></p>
																		<ul class="list-inline item-details item-details-size">
																				<li><?php echo $utilities->lang('client'); ?>
																						<a class="link-main" href="http://www.cantv.net/" target="_blank">CANTV</a>
																				</li>
																				<li><?php echo $utilities->lang('date'); ?>
																						<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('month.may').''; ?> 2014 -<?php echo ' '.$utilities->lang('month.july').' '; ?> 2014</a>
																				</li>
																				<li><?php echo $utilities->lang('services'); ?>
																						<a href="#" onClick="javascript:void(0)"><?php echo $utilities->lang('services.webdevelopment'); ?></a>
																				</li>
																		</ul>
																		<button type="button" class="btn btn-default btn-close" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $utilities->lang('btn.close'); ?></button>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
		<!-- Scripts -->

	    <!-- JQuery -->
			<script src="main/assets/js/jquery.min.js"></script>
			<!-- Sweetalert -->
			<script src="main/libs/sweetalert/dist/sweetalert.min.js"></script>
			<!-- Bootstrap Core JavaScript -->
			<script src="main/libs/bootstrap/js/bootstrap.min.js"></script>
			<!-- Sudo Slider Source -->
			<script src="main/libs/slide/jquery.superslides.min.js"></script>
			<script src="main/libs/slide/jquery.sudoslider.min.js"></script>

			<script src="main/assets/js/jquery.scrolly.min.js"></script>
			<script src="main/assets/js/jquery.scrollzer.min.js"></script>
			<script src="main/assets/js/skel.min.js"></script>
			<script src="main/assets/js/util.js"></script>
			<script src="main/assets/js/main.js"></script>
			<script src="main/assets/js/slide.js"></script>
			<script src="main/libs/slick/slick.js"></script>


			<script type="text/javascript">

				$(document).ready(function(){

					document.querySelector('.showcase.sweet button').onclick = function(){

						swal({
						  title: "Are you sure?",
						  text: "",
						  type: "warning",
							confirmButtonColor: "#DD6B55",
						  showCancelButton: true,
						  closeOnConfirm: false,
						  showLoaderOnConfirm: true,
						},
						function(){
						  setTimeout(function(){

								$.ajax({
									method: "POST",
									url: "main/mail/contact_me.php",
									data: $( "form" ).serialize(),
								})
									.done(function(result) {

										if(result==1){

											swal("Message sent");
											$('form').each (function(){ this.reset(); });
										}else{
											swal(result);
										}
								});
						  }, 2000);
						});
					};
					/*
					$(function() {
						var Accordion = function(el, multiple) {
							this.el = el || {};
							this.multiple = multiple || false;

							// Variables privadas
							var links = this.el.find('.link');
							// Evento
							links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
						}

						Accordion.prototype.dropdown = function(e) {
							var $el = e.data.el;
								$this = $(this),
								$next = $this.next();

							$next.slideToggle();
							$this.parent().toggleClass('open');

							if (!e.data.multiple) {
								$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
							};
						}

						var accordion = new Accordion($('#accordion'), false);
					});*/

					jQuery('.skillbar').each(function(){
							jQuery(this).find('.skillbar-bar').animate({
								width:jQuery(this).attr('data-percent')
							},3000);
					});

					 /**
					  *  $(document).ready(function(){
					  *	    $('#frameworks').trigger('click');
					  *  });
           **/

					 $(".center").slick({
						  slidesToShow: 3,
							slidesToScroll: 1,
							autoplay: true,
							autoplaySpeed: 2000,
					});

					$('.btn-back-to-top').hide();

					$(window).scroll(function() {
						var scroll = $(window).scrollTop();
						if (scroll >= 100) {
							$('.btn-back-to-top').show();

						} else {
							$('.btn-back-to-top').hide();
						}
					});
				});

			</script>
	</body>
</html>
