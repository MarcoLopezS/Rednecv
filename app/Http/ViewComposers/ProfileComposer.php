<?php namespace Rednecv\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Rednecv\Entities\Configuration;

class ProfileComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $conf = Configuration::find(1);

        $view->with('conf', $conf);
    }

}