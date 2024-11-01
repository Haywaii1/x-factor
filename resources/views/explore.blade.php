<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>VOIP Company, css template, free web design layout</title>
    <link href="{{ asset('assets/css/templatemo_style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tabcontent.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/tabcontent.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/video.js') }}"></script>
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
                        <div>
                            @if(Auth::check())
                                Hello, {{ Auth::user()->first_name }}! Welcome to our Website.
                            @else
                                Hello, Guest! Welcome to our Website.
                            @endif
                        </div>

                    <div id="tab5" class="tabcontent">
                        Something you might want to know about us.
                    </div>

                    <div id="tab6" class="tabcontent">
                        Don't be hesitated to contact us if you have something to say.
                    </div>

                </div>
                <script type="text/javascript">
                    var mypets = new ddtabcontent("pettabs")
                    mypets.setpersist(true)
                    mypets.setselectedClassTarget("link")
                    mypets.init(false)
                </script>

            </div> <!-- end of mneu -->

            <div id="templatemo_banner">
                <div class="banner_wrapper">
                    <h1>Listen</h1>
                    <p>Music is life!! Stay tune! Stay Connected</p>
                </div>
                <img src="{{ asset('assets/images/explore/headphone.jpeg') }}" alt="VOIP Image" class="banner-image">
            </div>


            <div id="templatemo_content">
                <div id="content_top"></div>

                <div class="templatemo_content_section_01">
                    <div class="section_01_left">
                        <h1>Welcome to Listen</h1>
                        <img src="{{ asset('assets/images/explore/templatemo_image_01.jpg') }}" alt="image">

                        <p>Nigerian music, particularly Afrobeats, has also gained global acclaim, with artists like
                            Burna Boy, Wizkid, and Davido leading the charge, blending traditional African rhythms with
                            modern genres like hip-hop and dancehall.
                        </p>
                        <p>Social media platforms play a big role, helping entertainers reach audiences locally and
                            internationally, with a strong online presence across YouTube, Instagram, and TikTok.
                        </p>
                    </div>

                    <div class="section_01_right">
                        <div id="video_container">
                            <div id="player"></div> <!-- This div will host the YouTube player -->
                        </div>
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
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque
                            at nulla eu elit adipiscing tempor.</p>
                        <a href="http://www.flashmo.com" target="_blank">Flash Templates</a>

                        <div style="clear: both; margin-top: 30px;">
                            <a href="http://validator.w3.org/check?uri=referer"><img
                                    style="border:0;width:88px;height:31px"
                                    src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional"
                                    width="88" height="31" vspace="8" border="0" /></a>
                            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img
                                    style="border:0;width:88px;height:31px"
                                    src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!"
                                    vspace="8" border="0" /></a>
                        </div>
                    </div>

                    <div class="cleaner">&nbsp;</div>
                </div>


            </div>

            <div id="templatemo_footer">

                <p><a href="#">Home</a> | <a href="#">Products</a> | <a href="#">Services</a> | <a
                        href="#">FAQs</a> | <a href="#">Contact Us</a>
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

<script src="https://www.youtube.com/iframe_api"></script>
<script>
    function onYouTubeIframeAPIReady() {
        new YT.Player('player', {
            videoId: 'dV_FeXAcvaY', // Replace with your desired YouTube video ID
            width: '100%', // Adjusts to fit container width
            height: '200', // Sets the height of the video
            playerVars: {
                autoplay: 1, // Auto-starts video on load
                // mute: 1, // Starts video muted
                controls: 1, // Displays player controls
                showinfo: 0, // Hides video info
                modestbranding: 1 // Minimizes YouTube branding
            }
        });
    }
</script>


</body>

</html>
