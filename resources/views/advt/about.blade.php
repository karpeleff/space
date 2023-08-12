
@extends('layouts.service')


@section('content')

    <div class="main">
        <section class="module bg-dark-60 about-page-header" data-background="assets/images/about_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">About</h2>
                        <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="font-alt">Добро пожаловать!!! </h5><br/>
                        <p>сервис запущен в тестовом режиме </p>
                        <p>Здесь вы можете бесплатно разместить обьявление от частного лица</p>
                        <p>запрещается публикация о продаже запрещенных Российским законодательством предметов веществ  услуг  оружия и тд</p>
                        <p> размер фото желательно  уменшить перед загрузкой </p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="font-alt"><span class="icon-tools-2"></span> Development
                        </h6>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                        </div>
                        <h6 class="font-alt"><span class="icon-strategy"></span> Branding
                        </h6>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                        </div>
                        <h6 class="font-alt"><span class="icon-target"></span> Marketing
                        </h6>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="50" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                        </div>
                        <h6 class="font-alt"><span class="icon-camera"></span> Photography
                        </h6>
                        <div class="progress">
                            <div class="progress-bar pb-dark" aria-valuenow="90" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        <section class="module" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Meet Our Team</h2>
                        <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                        <div class="team-item">
                            <div class="team-image"><img src="assets/images/team-1.jpg" alt="Member Photo"/>
                                <div class="team-detail">
                                    <h5 class="font-alt">Hi all</h5>
                                    <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Jim Stone</div>
                                <div class="team-role">Art Director</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                        <div class="team-item">
                            <div class="team-image"><img src="assets/images/team-2.jpg" alt="Member Photo"/>
                                <div class="team-detail">
                                    <h5 class="font-alt">Good day</h5>
                                    <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Andy River</div>
                                <div class="team-role">Creative director</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                        <div class="team-item">
                            <div class="team-image"><img src="assets/images/team-3.jpg" alt="Member Photo"/>
                                <div class="team-detail">
                                    <h5 class="font-alt">Hello</h5>
                                    <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Adele Snow</div>
                                <div class="team-role">Account manager</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                        <div class="team-item">
                            <div class="team-image"><img src="assets/images/team-4.jpg" alt="Member Photo"/>
                                <div class="team-detail">
                                    <h5 class="font-alt">Yes, it's me</h5>
                                    <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Dylan Woods</div>
                                <div class="team-role">Developer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module bg-dark-60" data-background="assets/images/section-6.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="video-box">
                            <div class="video-box-icon"><a class="video-pop-up" href="https://www.youtube.com/watch?v=TTxZj3DZiIM"><span class="icon-video"></span></a></div>
                            <div class="video-title font-alt">Presentation</div>
                            <div class="video-subtitle font-alt">Watch the video about our new products</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Our Advantages</h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-lightbulb"></span></div>
                            <h3 class="features-title font-alt">Ideas and concepts</h3>
                            <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-bike"></span></div>
                            <h3 class="features-title font-alt">Optimised for speed</h3>
                            <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-tools"></span></div>
                            <h3 class="features-title font-alt">Designs &amp; interfaces</h3>
                            <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-gears"></span></div>
                            <h3 class="features-title font-alt">Highly customizable</h3>
                            <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">About Titan</h5>
                            <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                            <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                            <p>Email:<a href="#">somecompany@example.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Recent Comments</h5>
                            <ul class="icon-list">
                                <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                                <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                                <li>Andy on <a href="#">Eco bag Mockup</a></li>
                                <li>Jack on <a href="#">Bottle Mockup</a></li>
                                <li>Mark on <a href="#">Our trip to the Alps</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Blog Categories</h5>
                            <ul class="icon-list">
                                <li><a href="#">Photography - 7</a></li>
                                <li><a href="#">Web Design - 3</a></li>
                                <li><a href="#">Illustration - 12</a></li>
                                <li><a href="#">Marketing - 1</a></li>
                                <li><a href="#">Wordpress - 16</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Popular Posts</h5>
                            <ul class="widget-posts">
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                                        <div class="widget-posts-meta">23 january</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                                        <div class="widget-posts-meta">15 February</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
