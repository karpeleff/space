@extends('layouts.service')
@section('content')
<section class="module-medium" id="mailchimp">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">справка</h2>
                <div class="module-subtitle font-serif">
                    <img src="{{asset("storage/biz/call.jpg")}}" alt=""/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <p>Скопировано из открытых источников</p>
<p>Нажмите для набора</p>
                @foreach ($ref as $item)
                    <div class="alert alert-info"><a href="tel:{{$item->tel}}"><b>{{$item->text}} тел: {{$item->tel}}</b></a></div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
