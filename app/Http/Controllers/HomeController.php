<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Models\Advt;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
     // $this->middleware('permission:role-dash-work', ['only' => ['destroy']]);
       // $this->middleware(['role:super-admin','permission:publish articles|edit articles']);
      // $this->middleware(['role:Admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Advt::paginate(6);
       // dd($data);

        return view('welcome')->with('data', $data);
    }


    public function home()
    {
        return view('home');
    }


    public  function sendMail()
    {
        $details['to'] = 'alexey.karpelev@yandex.ru';
        $details['name'] = 'Receiver Name';
        $details['subject'] = 'Hello Laravelcode';
        $details['message'] = 'Here goes all message body.';

        SendMailJob::dispatch($details);

        return response('Email sent successfully');
    }

    public function about()
    {
        return view('advt.about');
    }
}
