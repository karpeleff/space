
@extends('layouts.admin')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12  p-4 ">
                            <div class="pull-left  ">
                                <!-- если успех -->
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>

                                @endif
                                <h2>Create New Reference</h2>
                            </div>
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    {!! Form::open(array('route' => 'add_ref','method'=>'POST')) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group p-3">
                                <strong>Name:</strong>
                                {!! Form::text('tel', null, array('placeholder' => 'tel','class' => 'form-control ')) !!}
                            </div>
                            <div class="form-group p-3">
                                <strong>text:</strong>
                                {!! Form::text('text', null, array('placeholder' => 'text','class' => 'form-control ')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center  ">
                            <button type="submit" class="btn btn-primary   ">Submit</button>
                            <br><br>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>



@endsection
