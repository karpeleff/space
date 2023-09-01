
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 "  >
                <div class="card p-4 ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pull-left">
                                <!-- если успех -->
                                 @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message  }}</p>
                                </div>

                                @endif
                                <h2>Создать новое обьявление</h2>
                            </div>
                            <br>
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>


                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Обнаружены проблемы со вводом!<br><br>
                        <ul>
                           @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif


                    {!!Form::open(['route' => 'advt.store', 'files' => true,'method'=>'POST'])!!}

                                            {!! Form::radio('radio',  'privat',true,['class' => 'radio','id'=>'radio_1']) !!}
                                            {!! Form::label('price', 'Частное обьявление ', array('class' => 'awesome')); !!}
                                            <br><br>
                                            {!! Form::radio('radio', 'bizness',false,['class' => 'radio','id'=>'radio_2']) !!}
                                            {!! Form::label('price', 'Бизнес предложение ', array('class' => 'awesome')); !!}
                                            <br><br>

                                            {!!Form::text('header',null,['class' => 'form-control','placeholder' => 'заголовок']);!!}
                                            <br><br>
                                            {!!Form::textarea('text',null,['class' => 'form-control','placeholder' => 'текст']);!!}
                                            <br><br>
                                             {!! Form::label('email', 'Категория', array('class' => 'awesome')); !!}
                                             {!! Form::select('category', $cat_advt, null, ['class' => 'form-control control-hidden','id'=>'advcat']) !!}

                                              {!! Form::select('category', $cat, null, ['class' => 'form-control control-hidden','id'=>'bizcat']) !!}
                                               <br><br>
                                              {!! Form::label('email', 'Населенный пункт', array('class' => 'awesome')); !!}
                                               {!! Form::select('city', $city, null, ['class' => 'form-control']) !!}
                                             <br><br>

                                           {!!Form::text('price',null,['class' => 'form-control control-hidden','placeholder' => 'цена']) !!}

                                            <br><br>
                                            {!! Form::label('email', 'Выбрать фото(макс. 5шт)', array('class' => 'awesome')); !!}
                                            <br><br>
                                            {!! Form::file('file[]', ['multiple' => true]) !!}
                                            <br><br>
                                        {!! Form::submit('Сохранить', ['class' => 'btn btn-large btn-primary openbutton']); !!}

                                        {!! Form::close() !!}


                                    </div>
                            </div>
                        </div>
                    </div>
@endsection
