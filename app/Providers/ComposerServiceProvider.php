<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


        View::composer('*', function($view) {

            $cat = [
                'nails' => 'маникюр',
                'hair' => 'стрижка',
                'taxi' => 'такси',
                'snacks' => ' пицца суши роллы  ',
                'pharmacy' => 'аптека',
                'construction' => 'строительство ремонт',
                'job' => 'работа',
                'flowers' => 'цветы',
                'furniture'=> 'мебель',
                'transport'=> 'транспорт',

            ];
            $city = [
                'Красноармейский район' => 'Красноармейский район',
                'Новопокровка'  =>    'Новопокровка',
                'Рощино'        =>  'Рощино',
                'Богуславец'    =>   'Богуславец',
                'Вострецово'    =>     'Вострецово',
                'Восток'        =>    'Восток',
                'Новокрещенка'  =>    'Новокрещенка',
                'Мельничное'    =>    'Мельничное',
                'Лукьяновка'    =>    'Лукьяновка',
                'Гончаровка'    =>   'Гончаровка',
            ];

            $cat_advt = [
                'tech'=> 'техника  и запчасти',
                'clothes'=>'одежда',
                'gadget'=>'электроника',
                'animal'=>'животные',
                'home'=>'дом и быт',
                'realty'=>'недвижимость',

            ];

            $view->with(['cat' => $cat,'city'=> $city,'cat_advt' => $cat_advt]);
        });
    }
}
