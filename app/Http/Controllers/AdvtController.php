<?php

namespace App\Http\Controllers;

use App\Jobs\EditPicJob;
use App\Models\Category;
use App\Models\Reference;
use App\Models\User;
use App\Models\UserMessage;

use Illuminate\Http\Request;
use App\Models\Advt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;use SMSRU;
use Spatie\Permission\Models\Role;
use stdClass;


class AdvtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $i = 0;
        $cat = Category::all();
       // $data = $cat['name'];
        foreach ($cat as $item) {
            //$data[$i] = $item->name;
            $data[$item->id] = $item->name;
           // $i++;
        }
       // $advert = Advt::all();

        return view('advt.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function  advt_cat($cat)
{
    $data = Advt::where('category_id', $cat)->paginate(8);

    // dd($data);

    ///dd($data);
    // echo $data[0]['category_id'];
   // die();

    return view('advt.show_cat')->with('data', $data);
}


    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|digits_between:2,6',
            'header' => 'required',
        ]);

           $i = 0;
           $list = [];

        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(storage_path('images'), time() . '_' . $f->getClientOriginalName());
                $list[$i] =  time() . '_' . $f->getClientOriginalName();
              $i++;
            }
            $img  = json_encode($list);
            $record = new Advt;
            $record->contact = Auth::user()->email ? Auth::user()->email : 'гость' ;
            $record->category_id = $request->category;
            $record->city = $request->city;
            $record->title = $request->header;
            $record->text  =  $request->text;
            $record->price =$request->price;
            $record->img = $img;

                if($record->save())
                {
                  $this->imageResize($list);
                }

            return   redirect('advt/create')->with('success','Обьявление добавлено успешно !');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Advt::find($id);
      //  $data['cat'] = Category::find($data->category_id)->name;

        // dd($data);

        return view('advt/single_advt')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$advt = Advt::where('id', $id)->get();
        $advt = DB::table('advts')->where('id', $id)->first();

       // dd($advt);
        $img = $advt->img;

        $advt = DB::table('advts')->where('id', $id)->delete();

$out = [];

$out = json_decode($img, true);

//dd($out);

        $path =  storage_path('app/public');

        foreach($out as $value)
        {
            File::delete($path.'/'.$value);
        }

        return redirect('/');
    }

    public function editPic($data)
    {
        EditPicJob::dispatch($data);
    }

    public function test()
    {


    }

    public  function send_message_form()
    {
       return view('advt/send_message');
    }

    public  function send_message(Request $request)
    {
        $record = new UserMessage();
        $record->user =  Auth::user()->email ? Auth::user()->email : 'гость';
        $record->message = $request->message;
        $record->save();

//   3B3C642C-DDAF-A2AF-C45D-3F4DBA6FADC1
        $smsru = new SMSRU('3B3C642C-DDAF-A2AF-C45D-3F4DBA6FADC1');
        $data = new stdClass();
        $data->to = '79020648016';
        $data->text = 'Cообщение с сайта от '.Auth::user()->email.': '.$request->message;

        $sms = $smsru->send_one($data);

        $this->myMicroBot($request->message);

        return   redirect('send_message')->with('success','Сообщение отправлено !');
    }

    public function cat_form()
    {
        return view('admin.category_create');
    }

    public function add_cat(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name',
        ]);
         Category::create(['name' => $request->input('name')]);

        return view('admin.category_create')->with('success','Category created successfully');

    }

    public  function imageResize($list)
    {

        $storage_path =  storage_path('app/public');
        $sourse_path =  storage_path('images');

        foreach ($list  as $item) {

            $img = Image::make($sourse_path.'/'.$item);
            $img->resize(665, 750, function ($constraint) {
                $constraint->aspectRatio();
            })->save($storage_path.'/'.$item);

            File::delete($sourse_path.'/'.$item);

        }



    }

    public function ref_form()
    {
        return view('admin.reference_create');
    }

    public function add_ref(Request $request)
    {

        Reference::create(['tel' => $request->input('tel'),'text' => $request->input('text')]);

        return view('admin.reference_create')->with('success','Category created successfully');

    }

    public function    myMicroBot($message)
    {
        $tg_user = '1298815822'; // id пользователя, для отправки сообщения
        $bot_token = '5341890072:AAGssXpXuVjhEzzy6WeWVZYZHh8Gy6hCHeI'; // токен бота

       // $text = "Первая строка сообщения со ссылкой \n Вторая строка с жирным текстом";

// параметры, которые отправятся в api телеграм
        $params = array(
            'chat_id' => $tg_user, // id получателя
            'text' => $message, // текст сообщения
            'parse_mode' => 'HTML', // режим отображения сообщения HTML (не все HTML теги работают)
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'.$bot_token.'/sendMessage'); // адрес вызова api функции телеграм
        curl_setopt($curl, CURLOPT_POST, true); // отправка методом POST
        curl_setopt($curl, CURLOPT_TIMEOUT, 10); // время выполнения запроса
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION , true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params); // параметры запроса
        $result = curl_exec($curl); // запрос к api
        curl_close($curl);

       // var_dump(json_decode($result));
    }

}
