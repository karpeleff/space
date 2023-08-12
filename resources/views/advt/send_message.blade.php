@extends('layouts.service')
@section('content')
    <div class="main">
        <section class="module" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">

                        <!-- если успех -->

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>

                        @endif

                        <h2 class="module-title font-alt">новое сообщение</h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <form  role="form" method="post" action="{{ route('send_message') }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" rows="7"  name="message" placeholder="текст сообщениея" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-block btn-round btn-d"  type="submit">отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </main>
@endsection
