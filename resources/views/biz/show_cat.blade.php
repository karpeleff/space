@extends('layouts.service')
@section('content')
    <section class="home-section home-fade home-full-height" id="home">
        <div class="hero-slider">
            <ul class="slides">
                <li class="bg-dark-30 bg-dark shop-page-header">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-3"   >сервис бесплатных обьявлений</div>
                            <div class="font-alt mb-30 titan-title-size-4">для частных лиц</div>
                            <!--  <div class="font-alt mb-40 titan-title-size-1">Your online fashion destination</div>-->
                            <a class="section-scroll btn btn-border-w btn-round" href="{{ url('advt/create ') }}">создать обьявление</a>
                        </div>
                    </div>
                </li>
                <!--  <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/2.jpg&quot;);" -->
                <li class="bg-dark-30 bg-dark shop-page-header ">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-4"  >размещаем бесплатно</div>
                            <div class="font-alt mb-40 titan-title-size-4">продаем быстро</div>
                            <a class="section-scroll btn btn-border-w btn-round" href="{{ url('advt/create ') }}">создать обьявление</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <br>
    <div class="main">
        <div class="container">
            <div class="row">

                @php
                    $routeInfo = \Route::current();
                      $category =  $routeInfo->cat;
                       // dd($routeInfo);
                @endphp
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">{{$cat[$category]}}</h2>
                </div>
            </div>
            <div class="row multi-columns-row">


            @foreach ($data as $item)
                <!--  LOOP  -->
                    @php
                        $img =  json_decode($item->img);
                     //dd($img);

                    @endphp

                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"> <img src="{{asset("storage/biz/".$img[0])}}" alt=""/>
                                <div class="shop-item-detail"><a  href="{{ url('/biz_show/'.$item->id) }}"   class="btn btn-round btn-b"><span class="">подробнее</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">{{$item->title}}</a></h4>
                        </div>
                    </div>

                    <!-- end -->
                @endforeach


            </div>

            <br><br>
        </div>


        <div class="module-small bg-dark">

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

