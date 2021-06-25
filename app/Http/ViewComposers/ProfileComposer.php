<?php 

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;


class ProfileComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $usuarios = \App\User::all();
        view()->share('usuarios', $usuarios);

       
    }

}
