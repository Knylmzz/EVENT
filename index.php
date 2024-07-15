<?php include 'sessionLang.php';?>
<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <title><?php echo $lang['title'];  ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" id="bootstrap-grid">
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" id="bootstrap-reboot">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/rev-settings.css" rel="stylesheet" type="text/css">
    <link href="css/color.css" rel="stylesheet" type="text/css">

    <!-- color scheme -->
	<link rel="stylesheet" href="css/colors/magenta.css" type="text/css" id="colors">

    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/navigation.css" type="text/css">
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">
	
	<!-- custom font -->
	<link rel="stylesheet" href="css/font-style.css" type="text/css">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header class="transparent">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="column">Working Hours Monday - Friday <span class="id-color"><strong>08:00-16:00</strong></span></div>
                            <div class="column">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
                            <!-- social icons -->
                            <div class="column social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo" src="images/logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                            <!-- small button begin -->
                            <span id="menu-btn"></span>
                            <!-- small button close -->

                            <div class="header-extra">
                                <div class="v-center">
                                    <span id="b-menu">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </div>
                            </div>

                            <!-- mainmenu begin -->
							<ul id="mainmenu" class="ms-2">
								<li><a href="#section-hero"><?php echo $lang['menuHome'];  ?><span></span></a>
                                    <ul>
                                        <li><a href="index.html">Slider Dark</a></li>
                                        <li><a href="index-event-particle-dark.html">Particle Dark</a></li>
                                        <li><a href="index-event-video-background-dark.html">Video Background Dark</a></li>
                                        <li><a href="index-event-speaker-dark.html">Speaker Dark</a></li>
                                        <li><a href="index-event-parallax-dark.html">Parallax Dark</a></li>
                                        <li><a href="index.html">Slider Light</a></li>
                                        <li><a href="index-event-particle.html">Particle Light</a></li>
                                        <li><a href="index-event-video-background.html">Video Background Light</a></li>
                                        <li><a href="index-event-speaker.html">Speaker Light</a></li>
                                        <li><a href="index-event-parallax.html">Parallax Light</a></li>
                                        <li><a href="index-event-slide-background-dark-menu-expand.html">Slider Dark V2</a></li>
                                        <li><a href="index-event-particle-dark-menu-expand.html">Particle Dark V2</a></li>
                                        <li><a href="index-event-video-background-dark-menu-expand.html">Video Background Dark V2</a></li>
                                        <li><a href="index-event-speaker-dark-menu-expand.html">Speaker Dark V2</a></li>
                                        <li><a href="index-event-parallax-dark-menu-expand.html">Parallax Dark V2</a></li>
                                    </ul>
                                </li>
								<li><a href="#section-about">About<span></span></a></li>
								<li><a href="#section-speakers">Speakers<span></span></a></li>
								<li><a href="#section-schedule">Schedule<span></span></a></li>
								<li><a href="#section-ticket">Ticket<span></span></a></li>
								<li><a href="#section-sponsors">Sponsors<span></span></a></li>
								<li><a href="#section-register">Register<span></span></a></li>
                                <li><a href="#section-register"><?php echo $lang['menuContact'];  ?><span></span></a></li>

							</ul>
							
							<!-- mainmenu close -->

                            

                    </div>
                    

                </div>
            </div>
        </header>
        <!-- header close -->


        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->
            <section id="section-hero" class="fullwidthbanner-container" aria-label="section-slider" data-bgcolor="#101010">
                <div id="slider-revolution">
                    <ul>
                        <li data-transition="random-premium" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
							<img alt="" class="rev-slidebg" data-bgparallax="0" src="images/slider/wide1.jpg">
                        </li>
						
						<li data-transition="random-premium" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
							<img alt="" class="rev-slidebg" data-bgparallax="0" src="images/slider/wide2.jpg">
                        </li>

                    </ul>
					
					<div style="" class="tp-static-layers">
                            <div
                                class="text-center tp-caption size-28 font-weight-bold text-white tp-static-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['185']"
                                data-lineheight="['90','90','90','90']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-startslide="0"
                                data-endslide="3"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            >
                                <span class="id-color-2">June 20, 2023</span>
                            </div>
							
                            <div
                                class="text-center tp-caption size-84 font-weight-bold text-white tp-static-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0']"
                                data-y="['center','center','center','center']"
                                data-lineheight="['90','90','90','90']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-startslide="0"
                                data-endslide="3"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            >
                                Creative Design<br>
								Expo 2023
                            </div>
							
							
							<div
                                class="text-center tp-caption size-20 text-white tp-static-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['430']"
                                data-lineheight="['90','90','90','90']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-startslide="0"
                                data-endslide="3"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            >
                                
                                <div class="spacer-single"></div>
                                    <div class="d-lg-flex justify-content-center sm-hide">
                                        <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-calendar-check-o id-color"></i>June 20th to 25th</div>
                                        <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-user id-color"></i>12 Speakers</div>
                                        <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-map-marker id-color"></i>Palo Alto, California</div>
                                    </div>
                            </div>

                            
                            <div
                                class="tp-caption tp-static-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['506']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button"
                                
                                data-responsive_offset="on"
                                data-responsive="off"
                                data-startslide="0"
                                data-endslide="3"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(255, 255, 255, 0.15);bw:2px 2px 2px 2px;"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[12,12,12,12]"
                                data-paddingright="[20,20,20,20]"
                                data-paddingbottom="[12,12,12,12]"
                                data-paddingleft="[20,20,20,20]"
                            >
                                <a href="#section-ticket" class="btn-custom text-white scroll-to">Get Ticket</a>
                            </div>
							
							<div
                                class="tp-caption tp-static-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['0']"
                                data-y="['top','top','top','top']"
                                data-voffset="['506']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button"
                                
                                data-responsive_offset="on"
                                data-responsive="off"
                                data-startslide="0"
                                data-endslide="3"
                                data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bg:rgba(255, 255, 255, 0.15);bw:2px 2px 2px 2px;"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[12,12,12,12]"
                                data-paddingright="[20,20,20,20]"
                                data-paddingbottom="[12,12,12,12]"
                                data-paddingleft="[20,20,20,20]"
                            >
                            </div>
                        </div>
                </div>
            </section>
            <!-- revolution slider close -->
			
			<section id="section-countdown" aria-label="section" class="gradient-to-right pt40 pb40">
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="spacer-single"></div>
							<div id="defaultCountdown"></div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- section begin -->
			<section id="section-about" data-bgimage="url(images/bg/1.png) fixed no-repeat">
				<div class="wm wm-border dark wow fadeInDown">welcome</div>
                    <div class="container">
                        <div class="row align-items-center">
                            
                            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0s">
                                <h2>Welcome to the Biggest<br>Creative Design Conference</h2>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                </p>
								
								<div class="spacer10"></div>
								
								<a href="#" class="btn-custom font-weight-bold text-white sm-mb-30">About Us</a>
                            </div>
							
							<div class="col-lg-6 mb-sm-30 text-center wow fadeInRight">
                                <div class="de-images">
									<img class="di-small wow fadeIn" src="images/misc/2.jpg" alt="">
									<img class="di-small-2 wow fadeIn" src="images/misc/3.jpg" alt="">
									<img class="di-big img-fluid wow fadeInRight" data-wow-delay=".25s" src="images/misc/1.jpg" alt="">
								</div>
                            </div>

                        </div>
                    </div>
                </section>
				
				
				<!-- section begin -->
            <section id="section-features">
				<div class="wm wm-border dark wow fadeInDown ">features</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Why you should Join Event</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>


                        <div class="col-lg-4 wow fadeIn" data-wow-delay="0s">
                            <div class="box-number square">
                               <i class="bg-color hover-color-2 fa fa-microphone text-light"></i>
                                <div class="text">
                                    <h3><span>World Class Speakers</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".25s">
                            <div class="box-number square">
                                <i class="bg-color hover-color-2 fa fa-lightbulb-o text-light"></i>
                                <div class="text">
                                    <h3><span>Best Experience</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".5s">
                            <div class="box-number square">
                                <i class="bg-color hover-color-2 fa fa-sitemap text-light"></i>
                                <div class="text">
                                    <h3><span>Networking</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-single sm-hide"></div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".75s">
                            <div class="box-number square">
                                <i class="bg-color hover-color-2 fa fa-building text-light"></i>
                                <div class="text">
                                    <h3><span>Modern Venue</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="1s">
                            <div class="box-number square">
                                <i class="bg-color hover-color-2  fa fa-users text-light"></i>
                                <div class="text">
                                    <h3><span>New People</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeIn" data-wow-delay="1.25s">
                            <div class="box-number square">
                                <i class="bg-color hover-color-2 fa fa-mortar-board text-light"></i>
                                <div class="text">
                                    <h3><span>Certificates</span></h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                                </div>
                            </div>
                        </div>
						

                    </div>
                </div>
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-speakers" class="jarallax text-light">
                <img src="images/bg/1.jpg" class="jarallax-img" alt="">
				<div class="wm wm-border dark wow fadeInDown">speakers</div>
                <div class="container">
                    <div class="row">
						<div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>The Speakers</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
						
						<div class="clearfix"></div>
                      
                       <div class="col-xl-3 col-lg-4 col-sm-6 mb30 wow fadeInUp">
							<!-- team member -->
							<div class="de-team-list">
								<div class="team-pic">
									<img src="images/team/1.jpg" class="img-responsive" alt="">
								</div>
								<div class="team-desc">
									<h3>John Smith</h3>
									<p class="lead">Expert Designer</p>
									<div class="small-border"></div>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>

									<div class="social">
										<a href="#"><i class="fa fa-facebook fa-lg"></i></a>
										<a href="#"><i class="fa fa-twitter fa-lg"></i></a>
										<a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
										<a href="#"><i class="fa fa-skype fa-lg"></i></a>
									</div>
								</div>
							</div>
							<!-- team close -->
						</div>
						
						<div class="col-xl-3 col-lg-4 col-sm-6 mb30 wow fadeInUp">
							<!-- team member -->
							<div class="de-team-list">
								<div class="team-pic">
									<img src="images/team/2.jpg" class="img-responsive" alt="">
								</div>
								<div class="team-desc">
									<h3>Michael Dennis</h3>
									<p class="lead">Expert Designer</p>
									<div class="small-border"></div>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>

									<div class="social">
										<a href="#"><i class="fa fa-facebook fa-lg"></i></a>
										<a href="#"><i class="fa fa-twitter fa-lg"></i></a>
										<a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
										<a href="#"><i class="fa fa-skype fa-lg"></i></a>
									</div>
								</div>
							</div>
							<!-- team close -->
						</div>
						
						<div class="col-xl-3 col-lg-4 col-sm-6 mb30 wow fadeInUp">
							<!-- team member -->
							<div class="de-team-list">
								<div class="team-pic">
									<img src="images/team/3.jpg" class="img-responsive" alt="">
								</div>
								<div class="team-desc">
									<h3>Sarah Michelle</h3>
									<p class="lead">Expert Designer</p>
									<div class="small-border"></div>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>

									<div class="social">
										<a href="#"><i class="fa fa-facebook fa-lg"></i></a>
										<a href="#"><i class="fa fa-twitter fa-lg"></i></a>
										<a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
										<a href="#"><i class="fa fa-skype fa-lg"></i></a>
									</div>
								</div>
							</div>
							<!-- team close -->
						</div>
						
						<div class="col-xl-3 col-lg-4 col-sm-6 mb30 wow fadeInUp">
							<!-- team member -->
							<div class="de-team-list">
								<div class="team-pic">
									<img src="images/team/4.jpg" class="img-responsive" alt="">
								</div>
								<div class="team-desc">
									<h3>Katty Wilson</h3>
									<p class="lead">Expert Designer</p>
									<div class="small-border"></div>
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>

									<div class="social">
										<a href="#"><i class="fa fa-facebook fa-lg"></i></a>
										<a href="#"><i class="fa fa-twitter fa-lg"></i></a>
										<a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
										<a href="#"><i class="fa fa-skype fa-lg"></i></a>
									</div>
								</div>
							</div>
							<!-- team close -->
						</div>

						<div class="clearfix"></div>

                    </div>
                </div>
            </section>
            <!-- section close -->
			
			
			<!-- section begin -->
            <section id="section-schedule" aria-label="section-services-tab" data-bgimage="url(images/bg/2.png) fixed center no-repeat">
                <div class="wm wm-border dark wow fadeInDown ">schedule</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Event Schedule</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12 wow fadeInUp">
                            <div class="de_tab tab_style_4 text-center">
                                <ul class="de_nav de_nav_dark">
                                    <li class="active" data-link="#section-services-tab">
                                        <h3>Day <span>01</span></h3>
                                        <h4>June 20, 2023</h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>02</span></h3>
                                        <h4>June 21, 2023</h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>03</span></h3>
                                        <h4>June 22, 2023</h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>04</span></h3>
                                        <h4>June 23, 2023</h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>05</span></h3>
                                        <h4>June 24, 2023</h4>
                                    </li>
                                </ul>

                                <div class="de_tab_content text-left">

                                    <div id="tab1" class="tab_single_content dark">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 10:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/1.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Smith</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Introduction Creative Design</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">12:00 - 14:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/2.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Michael Dennis</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Getting Started With Creative Design</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">16:00 - 18:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/3.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Sarah Michelle</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Prepare Your Design Concept</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">20:00 - 22:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/4.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Katty Wilson</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Creative Design Implementation Basic</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab2" class="tab_single_content dark">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/5.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Rose Shipp</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Creative Design Implementation Basic 2</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">12:00 - 14:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/6.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Isaac Nicholas</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>How to Design Happiness</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">16:00 - 18:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/7.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Arnold</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Good Storytelling For Great Design</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">20:00 - 22:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/1.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Smith</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Unintuitive Lessons on Being a Designer</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab3" class="tab_single_content dark">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/2.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Michael Dennis</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>The Secret of Great App Design</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">12:00 - 14:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/3.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Sarah Michelle</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Use Design Thinking in Your Everyday Routine</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">16:00 - 18:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/4.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Katty Wilson</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Design Into The Real World</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">20:00 - 22:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/5.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Rose Shipp</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Advanced Design Implementation</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab4" class="tab_single_content dark">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/6.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Isaac Nicholas</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Advanced Design Implementation 2</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">12:00 - 14:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/7.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Arnold</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Branding, Identity &amp; Logo Design Explained</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">16:00 - 18:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/1.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Smith</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>The Art of Personal Branding</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">20:00 - 22:00 PM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/2.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Michael Dennis</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>8 Secret Benefits of Branding</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab5" class="tab_single_content dark">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/1.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Smith</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>How To Brand A Startup On A Small Budget</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/2.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>John Smith</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Establishing a Brand Identity</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/3.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Sarah Michelle</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Interview With World Class Designer</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <div class="schedule-listing">
                                                    <div class="schedule-item">
                                                        <div class="sc-time">08:00 - 12:00 AM</div>
                                                        <div class="sc-pic">
                                                            <img src="images/team/4.jpg" class="img-circle" alt="">
                                                        </div>
                                                        <div class="sc-name">
                                                            <h4>Katty Wilson</h4>
                                                            <span>Founder & CEO</span>
                                                        </div>
                                                        <div class="sc-info">
                                                            <h3>Close Event Ceremony &amp; Doorprize</h3>
                                                            <p>In this session we will discuss about digital topics in detail. You need laptops and other tech support equipment. This session will last for 2 hours. So prepare yourself.</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-ticket" class="jarallax text-light">
                <img src="images/bg/2.jpg" class="jarallax-img" alt="">
                <div class="wm wm-border dark wow fadeInDown">tickets</div>
				<div class="container">
                    <div class="row">
						<div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Choose a Ticket</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-s1 mb30 wow fadeInUp">
                                <div class="top">
                                    <h2>Day Pass</h2>
                                    <p class="price"><span class="currency id-color">$</span> <b>49.99</b></p>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><i class="icon_check_alt2"></i>Conference Tickets</li>
                                        <li><i class="icon_check_alt2"></i>Free Lunch Nad Coffee</li>
                                        <li><i class="icon_check_alt2"></i>Certificates</li>
                                        <li><i class="icon_close_alt2"></i>Private Access</li>
                                        <li><i class="icon_close_alt2"></i>Experts Contacts</li>
                                    </ul>
                                    <a href="" class="btn btn-custom text-white">Buy Ticket</a>
                                </div>
								<div class="ps1-deco"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-s1 mb30 wow fadeInUp">
                                <div class="ribbon color-2 text-white">Recommend</div>
                                <div class="top">
                                    <h2>Full Pass</h2>
                                    <p class="price"><span class="currency id-color">$</span> <b>79.99</b></p>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><i class="icon_check_alt2"></i>Conference Tickets</li>
                                        <li><i class="icon_check_alt2"></i>Free Lunch Nad Coffee</li>
                                        <li><i class="icon_check_alt2"></i>Certificates</li>
                                        <li><i class="icon_check_alt2"></i>Private Access</li>
                                        <li><i class="icon_close_alt2"></i>Experts Contacts</li>
                                    </ul>
                                    <a href="" class="btn btn-custom text-white">Buy Ticket</a>
                                </div>
								<div class="ps1-deco"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-s1 mb30 wow fadeInUp">
                                <div class="top">
                                    <h2>Group Pass</h2>
                                    <p class="price"><span class="currency id-color">$</span> <b>139.99</b></p>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><i class="icon_check_alt2"></i>Conference Tickets</li>
                                        <li><i class="icon_check_alt2"></i>Free Lunch Nad Coffee</li>
                                        <li><i class="icon_check_alt2"></i>Certificates</li>
                                        <li><i class="icon_check_alt2"></i>Private Access</li>
                                        <li><i class="icon_check_alt2"></i>Experts Contacts</li>
                                    </ul>
                                    <a href="" class="btn btn-custom text-white">Buy Ticket</a>
                                </div>
								<div class="ps1-deco"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-sponsors" data-bgimage="url(images/bg/3.png) fixed center no-repeat">
                <div class="wm wm-border dark wow fadeInDown ">sponsors</div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Official Sponsors</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12 text-center wow fadeInUp">
                            <h3>Gold Sponsors</h3>
                            <div class="spacer-single"></div>
                            <img src="images/logo/1.png" alt="" class="grey-hover">
                            <img src="images/logo/2b.png" alt="" class="grey-hover">
                            <img src="images/logo/3b.png" alt="" class="grey-hover">
							<img src="images/logo/4b.png" alt="" class="grey-hover">
                            <div class="spacer-double"></div>

                            <h3>Silver Sponsors</h3>
                            <div class="spacer-single"></div>
                            <img src="images/logo/5.png" alt="" class="grey-hover">
                            <img src="images/logo/6.png" alt="" class="grey-hover">
                            <img src="images/logo/7.png" alt="" class="grey-hover">
                            <img src="images/logo/8b.png" alt="" class="grey-hover">
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-testimonials" class="text-light" aria-label="section">
				<div class="wm wm-border dark wow fadeInDown">testimonials</div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-8 offset-md-2">
                            
							<div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp">
								<blockquote class="testimonial-big">
									<span class="title">I've got lot experiences!</span>
									I'm always impressed with the event. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.

									<span class="name">John, Customer</span>
								</blockquote>
								
								<blockquote class="testimonial-big">
									<span class="title">Exceeded my expectations!</span>
									Just wow! I'm always impressed with the event. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.

									<span class="name">Sandra, Customer</span>
								</blockquote>
								
								<blockquote class="testimonial-big">
									<span class="title">Better than I think!</span>
									I'm always impressed with the event. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.

									<span class="name">Michael, Customer</span>
								</blockquote>
							</div>
							
                        </div>

                    </div>
					
                </div>
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-portfolio" class="no-top no-bottom" aria-label="section">                
                <div id="gallery" class="gallery zoom-gallery full-gallery de-gallery pf_full_width wow fadeInUp" data-wow-delay=".3s">

                    <!-- gallery item -->
                    <div class="item residential">
                        <div class="picframe">
                            <a href="images/portfolio/1.jpg" title="Event Photo">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Image</span>
                                    </span>
                                </span>
                                <img src="images/portfolio/1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item hospitaly">
                        <div class="picframe">
                            <a href="images/portfolio/2.jpg" title="Event Photo">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Image</span>
                                    </span>
                                </span>
                                <img src="images/portfolio/2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item hospitaly">
                        <div class="picframe">
                            <a href="images/portfolio/3.jpg" title="Event Photo">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Image</span>
                                    </span>
                                </span>
                                <img src="images/portfolio/3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item residential">
                        <div class="picframe">
                            <a href="images/portfolio/4.jpg" title="Event Photo">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">View Image</span>
                                    </span>
                                </span>
                                <img src="images/portfolio/4.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- close gallery item -->
                </div>             
            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="section-register">
                <div class="wm wm-border dark wow fadeInDown">register</div>
				<div class="container">
                    <div class="row">
						<div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Register Now</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-8 offset-md-2 wow fadeInUp">
                            <form name="contactForm" id='contact_form' method="post" action='email.php'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id='name_error' class='error'>Please enter your name.</div>
                                        <div>
                                            <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                        </div>

                                        <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                        <div>
                                            <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                        </div>

                                        <div id='phone_error' class='error'>Please enter your phone number.</div>
                                        <div>
                                            <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id='message_error' class='error'>Please enter your message.</div>
                                        <div>
                                            <textarea name='message' id='message' class="form-control" placeholder="Additional Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <p id='submit'>
                                            <input type='submit' id='send_message' value='Register Now' class="btn btn-line">
                                        </p>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>

            </section>
            <!-- section close -->
			
			<!-- section begin -->
            <section id="call-to-action" class="gradient-to-right text-light call-to-action" aria-label="cta">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <h3 class="size-2 no-margin">Get your seat before the price goes up</h3>
                        </div>

                        <div class="col-lg-4 col-md-5 text-right">
                            <a href="#section-ticket" class="btn-custom text-white scroll-to">Get Ticket</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- logo carousel section close -->
			
		    <section id="section-fun-facts" class="jarallax text-light">
                <img src="images/bg/3.jpg" class="jarallax-img" alt="">
                <div class="container">
					<div class="row">
                        <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="de_count" >
                                <i class="icon_id-2 id-color-2"></i>
                                <h3>8800</h3>
                                <span class="text-white">Participants</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="de_count">
                                <i class="icon_easel id-color-2"></i>
                                <h3>300</h3>
                                <span class="text-white">Topics</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="de_count">
                                <i class="icon_headphones id-color-2"></i>
                                <h3>50</h3>
                                <span class="text-white">Speakers</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="de_count">
                                <i class="icon_globe id-color-2"></i>
                                <h3>20</h3>
                                <span class="text-white">Awards</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- footer begin -->
        <footer class="style-2">
            <div class="container">
                <div class="row align-items-middle">
                    <div class="col-md-3">
                        <img src="images/logo.png" class="logo-small" alt=""><br>
                    </div>

                    <div class="col-md-6">
                        &copy; Copyright 2023 - Exhibiz - Event Conference Website Template by <span class="id-color">Designesia</span>
                    </div>

                    <div class="col-md-3 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                            <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <a href="#" id="back-to-top" class="custom-1"></a>
        </footer>
        <!-- footer close -->
        </div>
    </div>

    
    <div id="de-extra-wrap" class="de_light">
        <span id="b-menu-close">
            <span></span>
            <span></span>
        </span>
        <div class="de-extra-content">
            <h3>Information</h3>
            <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>

            <div class="spacer10"></div>
            
            <div class="p-4 border">
                <div class="text-center">
                    <h1>485 of 1000</h1>
                   <p>Seats available</p>
                    <a href="#section-ticket" class="btn-custom btn-fullwidth text-white scroll-to">Get Your Ticket</a>
                </div>
            </div>

            <div class="spacer-single"></div>

            <h3>Where &amp; When?</h3>
            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-calendar-check-o id-color"></i>June 20th to 25th</div>
            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-map-marker id-color"></i>Palo Alto, California</div>
            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-phone id-color"></i>1 200 300 9000</div>
            <div class="h6 padding10 pt0 pb0"><i class="i_h3 fa fa-envelope-o id-color"></i>info@exhibiztheme.com</div>
        </div>
    </div>
    <div id="de-overlay"></div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/countdown-custom.js"></script>

    <!-- RS5.0 Core JS Files -->
    <script src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

    <!-- RS5.0 Extensions Files -->
    <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            // revolution slider
            jQuery("#slider-revolution").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 5000,
                navigation: {
                    arrows: {
                        enable: true
                    },
                    bullets: {
                        enable: false,
                        style: 'hermes'
                    },

                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 700,
                disableProgressBar: "on"
            });
        });
    </script>
	
	</body>

</html>