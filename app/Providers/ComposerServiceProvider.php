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
                'beauty and health' => 'Красота и здоровье',

                'equipment and transportation' => 'техника и перевозки',
                'snacks' => ' пищевая индустрия',

                'construction' => 'строительство и  ремонт',
                'job' => 'работа',




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
                'gadget'=>'бытовая техника и электроника',
                'animal'=>'животные',
                'home'=>'дом и быт',
                'realty'=>'недвижимость',
                'free'  => 'отдам '

            ];

            $view->with(['cat' => $cat,'city'=> $city,'cat_advt' => $cat_advt]);
        });
    }
}
