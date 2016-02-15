<?php namespace Rednecv\Http\ViewComposers;

use Illuminate\Contracts\View\View;

use Rednecv\Entities\ContactoMensaje;

class AdminComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $comContactoMensaje = ContactoMensaje::where('leido', 0)->orderBy('created_at', 'desc')->get();

        $view->with(['comContactoMensaje' => $comContactoMensaje]);
    }

}