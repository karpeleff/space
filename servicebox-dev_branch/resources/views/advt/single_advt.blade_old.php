@extends('layouts.service')
@section('content')
    <div class="main">
        <section class="module">
            <div class="container">
                <!--  LOOP  -->
                @php
                 // dd($data);
                   $img =  json_decode($data->img);
                @endphp

                    <div class="row">

                        <div class="col-sm-6 mb-sm-40"><a class="gallery" ><img src={{asset("storage/".$img[0])}} alt=""/  id="largeImg"  ></a>
                            <ul class="product-gallery" id="thumbs" >
                                @if (count($img) > 1)

                                    @foreach ($img as $i)
                                        <li><a class="gallery" href="/"></a><img src={{asset("storage/".$i)}} alt="Single Product"/></li>
                                    @endforeach

                                @endif

                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="product-title font-alt">{{$data->title}}</h1>
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-sm-12"><span><i class="fa fa-star star"></i></span>
                                    <span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span>
                                    <span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span>
                                    <a class="open-tab section-scroll" href="#reviews">-2customer reviews</a>
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-sm-12">
                                    <div class="price font-alt"><span class="amount">{{$data->price}} р.</span></div>
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-sm-12">
                                    <div class="description">
                                        <p>{{$data->text}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-20">

                                телефон: {{$data->contact}}

                                <div class="col-sm-8"><a class="btn btn-lg btn-block btn-round btn-b"   href="tel:{{$data->contact}}" >позвонить</a></div>
                            </div>
                            <div class="row mb-20">

                                <div class="col-sm-12">
                                    <div class="product_meta">Категория: {{$data->cat}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end -->
                <p><img id="largeImg" src="https://js.cx/gallery/img1-lg.jpg" alt="Large image"></p>

                <ul id="thumbs">
                    <!-- При наведении на изображение показывается встроенная подсказка браузера (title) -->
                    <li>
                        <a href="https://js.cx/gallery/img2-lg.jpg" title="Image 2"><img src="https://js.cx/gallery/img2-thumb.jpg"></a>
                    </li>
                    <li>
                        <a href="https://js.cx/gallery/img3-lg.jpg" title="Image 3"><img src="https://js.cx/gallery/img3-thumb.jpg"></a>
                    </li>
                    <li>
                        <a href="https://js.cx/gallery/img4-lg.jpg" title="Image 4"><img src="https://js.cx/gallery/img4-thumb.jpg"></a>
                    </li>
                    <li>
                        <a href="https://js.cx/gallery/img5-lg.jpg" title="Image 5"><img src="https://js.cx/gallery/img5-thumb.jpg"></a>
                    </li>
                    <li>
                        <a href="https://js.cx/gallery/img6-lg.jpg" title="Image 6"><img src="https://js.cx/gallery/img6-thumb.jpg"></a>
                    </li>
                </ul>



        </section>


        <div class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">about service box</h5>
                            <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                            <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                            <p>Email:<a href="#">admin@servicebox.com</a></p>
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
                        <p class="copyright font-alt">&copy; 2022&nbsp;<a href="index.html">Service box</a>, All Rights Reserved</p>
                    </div>
                    <div class="col-sm-6">
                        <!--     <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a> -->
                    </div>
                </div>
            </div>
    </div>
    </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>

@endsection
