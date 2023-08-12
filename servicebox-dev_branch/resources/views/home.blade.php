@extends('layouts.admin')

@section('content')
    @role('Admin')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Панель управления') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Вы вошли') }}
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/advt/create') }}"> {{ __('создать обьявление') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/add_biz') }}"> {{ __('создать бизнес предложение  ') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}"> {{ __('на главную') }}</a>
                            </li>
                        </ul>



                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        U are  not a admin...
        @endrole

@endsection
