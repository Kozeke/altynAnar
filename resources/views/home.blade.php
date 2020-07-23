@extends('layouts.app')

@section('content')
    <!-- start slider -->
    <div class="slider_bg">
        <div class="wrap">
            <!---start-da-slider----->
            <div class="da-slide">
                <h2><span>Алтын</span>Анар</h2>
                <p>"Хорошее настроение составляют приятные мелочи"</p>
                <a href="/home" class="da-link">Сделать заказ</a>
                <a href="#portfolio" class="scroll"><span class="da-img"> </span> </a>
            </div>
            <!---//End-da-slider----->
        </div>
    </div>
    <!-----end-slider-------->
    <!--start portfolio------>
    <div class="wrap" id="portfolio">
        <div class="main">
            <!-- start gallery  -->
            <div class="gallery1">
                <!--start-mfp -->
                <div id="small-dialog1" class="mfp-hide">
                    <div class="pop_up">
                        <h2>Lorem ipsum sit amet</h2>
                        <img src="web/images/icon1.png" alt=""/>
                        <p class="para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                    </div>
                </div>
                <!--end-mfp -->
                <!---start-content----->
                <div class="gallery">
                    <div class="clear"> </div>
                    <div class="container">
                        <h2>Portfolio</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <ul id="filters" class="clearfix">
                            <li><span class="filter active" data-filter="app card icon logo web">All</span></li>
                            <li><span class="filter" data-filter="app web">Web Design</span></li>
                            <li><span class="filter" data-filter="icon web card">Graphic Design</span></li>
                            <li><span class="filter" data-filter="web app icon card">Flat Design</span></li>
                        </ul>
                        <div id="portfoliolist">

                            <div class="portfolio logo" data-cat="logo">
                                <div class="portfolio-wrapper">
                                    <a class="popup-with-zoom-anim" href="#small-dialog1">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item ch-img-1">
                                                    <div class="ch-info">
                                                        <img src="web/images/zoom-white.png"/>
                                                        <h3>Example Title</h3>
                                                        <p><a href="#">Wed Desing</a></p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>

                            <div class="portfolio app" data-cat="app">
                                <div class="portfolio-wrapper">
                                    <a class="popup-with-zoom-anim" href="#small-dialog1">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item ch-img-2">
                                                    <div class="ch-info">
                                                        <img src="web/images/zoom-white.png"/>
                                                        <h3>Example Title</h3>
                                                        <p><a href="#">Wed Desing</a></p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="hide">
                                <div class="portfolio web" data-cat="web">
                                    <div class="portfolio-wrapper">
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <ul class="ch-grid">
                                                <li>
                                                    <div class="ch-item ch-img-3">
                                                        <div class="ch-info">
                                                            <img src="web/images/zoom-white.png"/>
                                                            <h3>Example Title</h3>
                                                            <p><a href="#">Wed Desing</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio card" data-cat="card">
                                <div class="portfolio-wrapper">
                                    <a class="popup-with-zoom-anim" href="#small-dialog1">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item ch-img-4">
                                                    <div class="ch-info">
                                                        <img src="web/images/zoom-white.png"/>
                                                        <h3>Example Title</h3>
                                                        <p><a href="#">Wed Desing</a></p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>

                            <div class="hide">
                                <div class="portfolio app" data-cat="app">
                                    <div class="portfolio-wrapper">
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <ul class="ch-grid">
                                                <li>
                                                    <div class="ch-item ch-img-5">
                                                        <div class="ch-info">
                                                            <img src="web/images/zoom-white.png"/>
                                                            <h3>Example Title</h3>
                                                            <p><a href="#">Wed Desing</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="hide">
                                <div class="portfolio card" data-cat="card">
                                    <div class="portfolio-wrapper">
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <ul class="ch-grid">
                                                <li>
                                                    <div class="ch-item ch-img-6">
                                                        <div class="ch-info">
                                                            <img src="web/images/zoom-white.png"/>
                                                            <h3>Example Title</h3>
                                                            <p><a href="#">Wed Desing</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="portfolio card" data-cat="card">
                                    <div class="portfolio-wrapper">
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <ul class="ch-grid">
                                                <li>
                                                    <div class="ch-item ch-img-7">
                                                        <div class="ch-info">
                                                            <img src="web/images/zoom-white.png"/>
                                                            <h3>Example Title</h3>
                                                            <p><a href="#">Wed Desing</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="portfolio logo" data-cat="logo" id="hide">
                                    <div class="portfolio-wrapper">
                                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                                            <ul class="ch-grid">
                                                <li>
                                                    <div class="ch-item ch-img-8">
                                                        <div class="ch-info">
                                                            <img src="web/images/zoom-white.png"/>
                                                            <h3>Example Title</h3>
                                                            <p><a href="#">Wed Desing</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- container -->
                    <script type="text/javascript" src="web/js/fliplightbox.min.js"></script>
                    <script type="text/javascript">$('body').flipLightBox()</script>
                    <div class="clear"> </div>
                </div>
            </div>
        </div>
    </div>
    <!---End-gallery----->
    <!-----start-about-------->

    <div class="about" id="about">
        <div class="wrap">
            <h2>About US</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="about-grids">
                <div class="grid">
                    <div class="dc_zoom_css">
				<span class="roll_css6">
					<div class="social">
						<ul>
							<li><a class="sharefacebook" href="#"> </a> </li>
							<li><a class="sharetwitter" href="#"> </a> </li>
							<li><a class="sharetgoogle" href="#"> </a> </li>
							<li><a class="sharedrible" href="#"> </a> </li>
							<div class="clear"> </div>
						</ul>
					</div>
				</span>
                        <img class="post-person" src="web/images/img1.jpg">
                    </div>
                    <div class="desc">
                        <h3>Lorem Ipsum is Simply</h3>
                        <p>project manager</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Sed ut perspiciatis unde omnis iste natus error sit voluptatem,Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                    </div>

                </div>
                <div class="grid">
                    <div class="dc_zoom_css">
				<span class="roll_css6">
					<div class="social">
						<ul>
							<li><a class="sharefacebook" href="#"> </a> </li>
							<li><a class="sharetwitter" href="#"> </a> </li>
							<li><a class="sharetgoogle" href="#"> </a> </li>
							<li><a class="sharedrible" href="#"> </a> </li>
							<div class="clear"> </div>
						</ul>
					</div>
				</span>
                        <img class="post-person" src="web/images/img2.jpg">
                    </div>
                    <div class="desc">
                        <h3>Lorem Ipsum is Simply</h3>
                        <p>project manager</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Sed ut perspiciatis unde omnis iste natus error sit voluptatem,Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                    </div>
                </div>
                <div class="grid">
                    <div class="dc_zoom_css">
				<span class="roll_css6">
					<div class="social">
						<ul>
							<li><a class="sharefacebook" href="#"> </a> </li>
							<li><a class="sharetwitter" href="#"> </a> </li>
							<li><a class="sharetgoogle" href="#"> </a> </li>
							<li><a class="sharedrible" href="#"> </a> </li>
							<div class="clear"> </div>
						</ul>
					</div>
				</span>
                        <img class="post-person" src="web/images/img3.jpg">
                    </div>
                    <div class="desc">
                        <h3>Lorem Ipsum is Simply</h3>
                        <p>project manager</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Sed ut perspiciatis unde omnis iste natus error sit voluptatem,Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
    <!---------end-about------------->
    <div class="contact" id="contact">
        <div class="wrap">
            <h2>Contact Us</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
            <div class="section group">
                <div class="col span_2_of_3">
                    <div class="contact-form">
                        <form method="post" action="#">

                            <input type="text" class="textbox" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your  Name';}">
                            <input type="text" class="textbox" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
                            <div class="clear"> </div>

                            <div>
                                <textarea value="Your Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Message';}">Your Message...</textarea>
                            </div>
                            <span><input type="submit" class="" value="Submit"></span>
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
                <div class="col span_1_of_3">
                    <div class="company_address">
                        <h5>INFORMATION</h5>
                        <ul class="list3">
                            <li>
                                <img src="web/images/location.png" alt=""/>
                                <div class="extra-wrap">
                                    <p>Lorem ipsum  consectetu</p>
                                    <p>12345-Lorem ipsum  consectetu</p>
                                    <p>Lorem ipsum , consectetu</p>
                                </div>
                                <div class="clear"> </div>
                            </li>

                            <li>
                                <img src="web/images/phone.png" alt=""/>
                                <div class="extra-wrap">
                                    <p>+1 800(Phone) 258 2598</p>
                                </div>
                                <div class="clear"> </div>
                            </li>
                            <li>
                                <img src="web/images/fax2.png" alt=""/>
                                <div class="extra-wrap">
                                    <p>+1 500(Tax) 6343 8690</p>
                                </div>
                                <div class="clear"> </div>
                            </li>
                            <li>
                                <img src="web/images/mail.png" alt=""/>
                                <div class="extra-wrap">
                                    <p> <a href="mailto:info@mycompany.com"> info(at)appstore.com</a></p>
                                </div>
                                <div class="clear"> </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrap">
            <div class="copy">
                <p class="copy">&#169 2014 Template by  <a href="http://w3layouts.com" target="_blank">w3layouts</a> </p>
            </div>
{{--            <script type="text/javascript">--}}
{{--                $(document).ready(function() {--}}

{{--                    var defaults = {--}}
{{--                        containerID: 'toTop', // fading element id--}}
{{--                        containerHoverID: 'toTopHover', // fading element hover id--}}
{{--                        scrollSpeed: 1200,--}}
{{--                        easingType: 'linear'--}}
{{--                    };--}}


{{--                    $().UItoTop({ easingType: 'easeOutQuart' });--}}

{{--                });--}}
{{--            </script>--}}
{{--            <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>--}}
            <script src="web/js/jquery.scrollTo.js"></script>
        </div>
    </div>
@endsection
