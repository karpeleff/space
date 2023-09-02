@extends('layouts.service')
@section('content')
    @php
        // dd($data);
          $img =  json_decode($data->img);
    @endphp
    <div class="main">
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mb-sm-40"><a class="gallery" href="{{asset("storage/".$img[0])}}"><img src="{{asset("storage/".$img[0])}}" alt=""  id="largeImg"  /></a>
                        <ul class="product-gallery"  id="thumbs" >
                            @if (count($img) > 1)
                                @foreach ($img as $i)
                                   <li><a class="gallery" href="{{asset("storage/".$i)}}"><img src="{{asset("storage/".$i)}}" alt=""/></a></li>

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

                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12">
                                <div class="price font-alt"><span class="amount">
                                       @if ($data->price > 0)
                                            {{$data->price}} Р.
                                        @endif
                                    </span></div>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12"><b>Контактный телефон: {{$data->contact}}</b></div>
                            <br>
                            <div class="col-sm-12"><b>Населенный пункт : {{$data->city}}</b></div>
                            <div class="col-sm-12">
                                <div class="product_meta"><b>Категория: <a href="#">  {{$all_cat[$data->category_id]}}</a></b></div>
                            </div>
                            <div class="col-sm-12">
                                <div class="description">
                                    <p><b>Описание: {{$data->text}}.</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-20">


                            </div>
                           <!-- <div class="col-sm-4 mb-sm-20">
                                <input class="form-control input-lg" type="number" name="" value="1" max="40" min="1" required="required"/>
                            </div>  -->
                            <div class="col-sm-8 "><a class="btn btn-lg btn-block btn-round btn-b  "   href="tel:{{$data->contact}}" >позвонить</a></div>
<br><br><br>
                            <div class="col-sm-8"><a class="btn  btn-lg btn-round btn-block btn-round btn-b "  href="{{asset("/")}}" >назад  в категорию</a></div>

                            @if ($data->contact === Auth::user()->email)
                            <br><br><br>
                            <div class="col-sm-8">
                                <form method="post" action="{{$data->id}}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"  class="btn btn-default" >удалить обьявление</button>
                                </form>
                            </div>
                            @endif
                        </div>




                        </div>


                </div>
                <div class="row mt-70">

                </div>
            </div>
        </section>
        <hr class="divider-w">


        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2023 &nbsp;<a href="">service box</a>, All Rights Reserved</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>

@endsection




