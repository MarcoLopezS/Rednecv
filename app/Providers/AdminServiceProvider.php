<?php namespace Rednecv\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composers([
            'Rednecv\Http\ViewComposers\AdminComposer' => ['layouts.admin']
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
