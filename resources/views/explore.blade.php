<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VOIP Company, css template, free web design layout</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{ asset('assets/css/templatemo_style.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tabcontent.css') }}">
<script type="text/javascript" src="{{ asset('assets/js/tabcontent.js') }}"></script>
</script>

</head>
<body>
<div id="templatemo_wrapper">
<div id="templatemo_container">
	<!--  Free CSS Template is provided by www.TemplateMo.com  -->
    <div id="templatemo_menu">
        <div id="pettabs" class="indentmenu">
            <ul>
                <li><a href="{{ route('home') }}" rel="tab1" class="selected">Home</a></li>
                <li><a href="#" rel="tab2">Services</a></li>
                  <li><a href="#" rel="tab5">About Us</a></li>
                  <li><a href="#" rel="tab6" style="border-right: none;">Contact Us</a></li>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">


                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('create.post') }}">
                                    Create post
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    Logout
                                </a>

                            </div>
                        </li>
                    @endguest
                </ul>
                </div>
            </ul>
        </div>
        <div class="tabcontentstyle">

            <div id="tab1" class="tabcontent">
                Hello Guest! Welcome to our Website.
            </div>

            <div id="tab2" class="tabcontent">
            	<ul>
                  <li><a href="#">Service 1</a></li>
                  <li><a href="#">Service 2</a></li>
                  <li><a href="#">Service 3</a></li>
                  <li><a href="#">Service 4</a></li>
                  <li><a href="#">Service 5</a></li>
                </ul>
            </div>

            <div id="tab3" class="tabcontent">
            	<ul>
                  <li><a href="#">Product 1</a></li>
                  <li><a href="#">Product 2</a></li>
                  <li><a href="#">Product 3</a></li>
                  <li><a href="#">Product 4</a></li>
                </ul>
            </div>

            <div id="tab4" class="tabcontent">
            	<ul>
                  <li><a href="#">Link 1</a></li>
                  <li><a href="#">Link 2</a></li>
                  <li><a href="#">Link 3</a></li>
                  <li><a href="#">Link 4</a></li>
                  <li><a href="#">Link 5</a></li>
                  <li><a href="#">Link 6</a></li>
                </ul>
            </div>

            <div id="tab5" class="tabcontent">
            	Something you might want to know about us.
            </div>

            <div id="tab6" class="tabcontent">
            	Don't be hesitated to contact us if you have something to say.
            </div>

        </div>
<script type="text/javascript">

        var mypets=new ddtabcontent("pettabs")
        mypets.setpersist(true)
        mypets.setselectedClassTarget("link")
        mypets.init(false)
</script>

    </div> <!-- end of mneu -->

    <div id="templatemo_banner">
    	<h1>VOIP Company</h1>
        <p>the most reliable connection, the best network and support</p>

    </div>

	<div id="templatemo_content">
    	<div id="content_top"></div>

        <div class="templatemo_content_section_01">
        	<div class="section_01_left">
                <h1>Welcome to VOIP Company</h1>
          	  <img src="{{ asset('assets/images/explore/templatemo_image_01.jpg') }}" alt="image">

              <p>This free CSS template is brought to you by <a title="free css templates" href="#">TemplateMo.com</a>. You may use this template in your websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos used in this website.</p>
              <p>Donec in nisi. Etiam sit amet turpis. Duis nulla diam, posuere ac, varius id, ullamcorper sit amet, libero. Nam sodales, pede vel dapibus lobortis, ipsum diam molestie risus, a vulputate risus nisl pulvinar lacus.</p>
			</div>

            <div class="section_01_right">
	            <h1>Site News</h1>

                <h3>Etiam dictum nisi</h3>
                <p>Donec enim enim, imperdiet quis, mollis a, elementum a, diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><a href="#">Read more</a>

            </div>

            <div class="cleaner">&nbsp;</div>
		</div>

        <div class="templatemo_content_section_02">

            <div class="section_02_subsection">
                <h2>Featured Services</h2>
                <p>Suspen disse a nibh tristique justo rhoncus volutpat.</p>
                <ul>
                	<li><a href="#">Free Flash Templates</a></li>
                    <li><a href="#">CSS Web Templates</a></li>
					<li><a href="#">Web Design Blog</a></li>
					<li><a href="#">Premium Templates</a></li>
                </ul>
                <a href="#">read more...</a>
            </div>

            <div class="section_02_subsection">
                <h2>Why choose us?</h2>
                <p>Pellentesque lectus justo, fermentum in, ornare vitae, vehicula eu, felis.</p>
                <ul>
                	<li>Quisque facilisis suscipit elit</li>
                    <li>Lacus et dictum tristique</li>
                    <li>Eeros ac tincidunt aliquam</li>
                    <li>Nullam commodo arcu non facilisis</li>
                </ul>
                <a href="#">read more...</a>
            </div>

 			<div class="section_02_subsection" style="border-right: none;">
                <h2>Testimonials</h2>

                <h3>Phasellus id purus</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque at nulla eu elit adipiscing tempor.</p>
                <a href="http://www.flashmo.com" target="_blank">Flash Templates</a>

                <div style="clear: both; margin-top: 30px;">
                <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
				</div>
            </div>

            <div class="cleaner">&nbsp;</div>
		</div>


    </div>

    <div id="templatemo_footer">

	       <p><a href="#">Home</a> | <a href="#">Products</a> | <a href="#">Services</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a>
           </p>
        	<p>Copyright © 2024 <a href="#"><strong>Your Company Name</strong></a>
            <!-- Credit: www.templatemo.com --></p>
	</div> <!-- end of footer -->
	<!--  Free CSS Templates from www.TemplateMo.com  -->
</div>
</div>
<!--
Voip Template
http://www.templatemo.com/preview/templatemo_097_voip
-->
</body>
</html>
