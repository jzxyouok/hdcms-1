<?php

namespace App\Providers;

use App\Http\Controllers\Content\System\Tag;
use Houdunwang\Aliyun\Aliyun;
use Houdunwang\WeChat\WeChat;
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
        \Schema::defaultStringLength(191);
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
        \Carbon\Carbon::setLocale('zh');
        $this->loadConfig();
        //自定义指令
        (new Tag())->make();
    }

    protected function loadConfig()
    {
        //阿里云
        Aliyun::config([
            'regionId' => config('aliyun.regionId'),
            'accessId' => config('aliyun.accessId'),
            'accessKey' => config('aliyun.accessKey'),
        ]);
        //微信公众号
        WeChat::config(config('hd_wechat'));
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
