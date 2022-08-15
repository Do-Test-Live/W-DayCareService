<footer id="footer" class="footer footer-currenty-style footer-wave-bg">
    <div class="footer-widget-area">
        <div class="footer-top-part">
            <div class="container pb-70 pt-lg-150 pt-md-100" data-tm-padding-top="250px">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="widget widget-about">
                            <img src="images/logo-wide-white.png" alt="" class="mb-30">
                            <p>Lorem ipsum dolor sit amet, consect etur adi pisicing elit sed do eiusmod tempor
                                incididunt ut labore.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">Contact</h4>
                            <div class="footer-contact-address">
                                <div class="phone mb-15">
                                    <p class="m-0 text-white"><i
                                            class="fas fa-phone-alt text-theme-colored1 mr-10"></i>000 888 0000</p>
                                </div>
                                <div class="email mb-15">
                                    <p class="m-0 text-white"><i
                                            class="fas fa-envelope text-theme-colored1 mr-10"></i>needhelp@masim.com
                                    </p>
                                </div>
                                <div class="address">
                                    <p class="m-0 text-white"><i class="fas fa-map text-theme-colored1 mr-10"></i>80
                                        Broklyn Golden Street, Usa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">Explore</h4>
                            <div class="menu-footer-page-list">
                                <ul id="footer-page-list" class="menu">
                                    <li><a href="index.php">Service</a></li>
                                    <li><a href="index.php">About</a></li>
                                    <li><a href="index.php">Get a Quote</a></li>
                                    <li><a href="index.php">Latest Post</a></li>
                                    <li><a href="index.php">Success Story</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="widget widget-newsletter">
                            <h4 class="widget-title">Newsletter</h4>
                            <div class="tm-widget tm-widget-subscribe widget-subscribe">
                                <form id="mailchimp-subscription-form1" class="newsletter-form">
                                    <div class="">
                                        <input type="email" value="" name="EMAIL" placeholder="Email address"
                                               class="form-control mb-15" data-height="45px" id="mce-EMAIL">
                                        <span class="input-group-btn">
                        <button class="btn btn-colored btn-circled btn-theme-colored1 btn-flat m-0" type="submit">Subscribe</button>
                      </span>
                                    </div>
                                </form>

                                <!-- Mailchimp Subscription Form Validation-->
                                <script>
                                    (function ($) {
                                        $('#mailchimp-subscription-form1').ajaxChimp({
                                            callback: mailChimpCallBack,
                                            url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                                        });

                                        function mailChimpCallBack(resp) {
                                            // Hide any previous response text
                                            var $mailchimpform = $('#mailchimp-subscription-form1'),
                                                $response = '';
                                            $mailchimpform.children(".alert").remove();
                                            if (resp.result === 'success') {
                                                $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                            } else if (resp.result === 'error') {
                                                $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                            }
                                            $mailchimpform.prepend($response);
                                        }
                                    })(jQuery);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row pt-30 pb-30">
                    <div class="col"></div>
                    <div class="col-sm-6">
                        <div class="footer-paragraph text-center">
                            © 2021 ThemeMascot. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>