<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Vihangam Yoga - {{(isset($page_title))?$page_title:'Best Mediation Technique'}}

    </title>
    
    <!-- core CSS -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{URL::asset('assets/js/html5shiv.js')}}"></script>
    <script src="{{URL::asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{URL::asset('assets/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">{{--
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                            <ul class="social-share">
                                <li><a href="mailto:info@vihangamyoga.org"><i class="fa fa-envelope"></i></a></li>
                                <li>
                                    <a class="btn" href="http://www.swarved-mahamandir.org/#events_wrapper" style="width:100%;height:auto;padding:0px;padding-left:4px;padding-right:4px;">Donate Now</a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="http://www.facebook.com/vihangamyoga"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://twitter.com/Vihangam_Yoga"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://www.youtube.com/user/vihangamyoga#p/a"><i class="fa fa-youtube"></i></a></li> 
                                <li><a href="http://groups.yahoo.com/group/vihangamyoga/"><i class="fa fa-yahoo"></i></a></li>
                                <li><a href="mailto:vihangamyoga@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
--}}
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container" style="width:95%">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::Route('home')}}"><img src="{{URL::asset('assets/images/ico/logo.jp')}}" alt="Vihangam Yoga"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{URL::Route('home')}}">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Centres <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" style="min-width:310px">
                                <li><a href="{{URL::Route('vrittikut')}}">Vrittikut Ashram , Ballia </a></li>
                                <li><a href="#">Maharshi Sadafaldeo Ashram , Allahabad</a></li>
                                <li><a href="#">Himalaya Shunya Sikhar Ashram</a></li>
                                <li><a href="#">Madhumati Ashram , Gaya</a></li>
                                <li><a href="#">Dandakvan Ashram , Gujrat</a></li>
                                <li><a href="#">Swarved Mahamandir , Varanasi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Society <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Health &amp; Environment </a></li>
                                <li><a href="#">Social Services</a></li>
                                <li><a href="#">Initiatives</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inspiration<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" style="min-width:320px">
                                <li><a href="#">Sadguru Sadafal Deo Ji Maharaj</a></li>
                                <li><a href="#">Sadguru Dharmachandra Deo Ji Maharaj</a></li>
                                <li><a href="#">Sadguru Swatantra Deo Ji Maharaj</a></li>
                                <li><a href="#">Sant Pravar Vigyan Deo Ji Maharaj</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sadguru Pictures</a></li>
                                <li><a href="#">Sant Pravar Pictures</a></li>
                                <li><a href="#">Ashram Pictures</a></li>
                                <li><a href="#">Vintage Pictures</a></li>
                                <li><a href="http://www.youtube.com/vihangamyoga">Video</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Global Reach<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">India</a></li>
                                <li><a href="#">International</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Scientific Aspects<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Research</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Press Release</a></li>
                                  
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    @yield('body')

   
{{--
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
--}}
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-11">
                    &copy; Sadguru Sadafaldeo Vihangam Yoga Sansthan , registered under Society Registration Act 1861 , Registration No - 1345/2010 , file no. IV-7432</div>
                <div class="col-sm-1">
                    <ul class="pull-right">
                        <li><a href="{{URL::Route('home')}}">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{URL::asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('js/wow.min.js')}}"></script>
</body>
</html>