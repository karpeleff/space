<?php

namespace App\Http\Controllers;

use App\Models\Biz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BizzController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
       //  $this->middleware('permission:biz-create', ['only' => ['add_biz']]);
        // $this->middleware(['role:super-admin','permission:publish articles|edit articles']);
        // $this->middleware(['role:Admin']);
    }


    public function  add_biz()
    {
        return view('biz.create');
    }

        public function store_biz(Request $request)
    {

        $request->validate([
            'header' => 'required',
            'text'=> 'required',
        ]);

        $i = 0;
        $list = [];

        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(storage_path('images/biz'), time() . '_' . $f->getClientOriginalName());
                $list[$i] =  time() . '_' . $f->getClientOriginalName();
                $i++;
            }
            $img  = json_encode($list);
            $record = new Biz;

            $record->category = $request->cat;
            $record->tel      = $request->tel;
            $record->city     = $request->city;
            $record->title    = $request->header;
            $record->text     =  $request->text;
            $record->img      = $img;
            if($record->save())
            {
                $this->imageResize($list);
            }

//echo $request->input('text');
            // return "Успех";
            return   redirect('add_biz')->with('success','ип добавлено !');
        }
    }

    public function biz_cat($cat)
    {
       // dd($cat);

        $data = Biz::where('category', $cat)->get();

      // dd($data);

        return view('biz.show_cat')->with('data', $data);
    }

    public  function biz_show($id)
    {
        $data = Biz::find($id);
        //  $data['cat'] = Category::find($data->category_id)->name;

        // dd($data);

        return view('biz/single_biz')->with('data', $data);
    }

    public function  electro()
    {
        $path = storage_path('');

        //echo $path;
       // die();

        $quest = file_get_contents($path.'/2.txt');
        $resp = file_get_contents($path.'/3.txt');

        $key = explode("\n", $quest);
        $val = explode("\n", $resp);

//echo count($key);

        $out =   array_combine($key,$val);
        $i;

        return view('biz.electro',compact('out'));

    }
    public  function imageResize($list)
    {

        $storage_path =  storage_path('app/public/biz');
        $sourse_path =  storage_path('images/biz');

        foreach ($list  as $item) {

            $img = Image::make($sourse_path.'/'.$item);
            $img->resize(665, 750, function ($constraint) {
                $constraint->aspectRatio();
            })->save($storage_path.'/'.$item);

            File::delete($sourse_path.'/'.$item);

        }



    }
}
