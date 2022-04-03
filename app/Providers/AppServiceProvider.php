<?php

namespace App\Providers;

use App\Models\Notice;
use App\Models\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $pages = Page::where('status',1)->get();
        $notices = Notice::where('status','1')->get();
        $data = [
            'pages'=>$pages,
            'notices'=>$notices
        ];
        View::share('data', $data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
