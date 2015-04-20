<?php namespace App\Http\ViewComposers\Frontend;

use Illuminate\Contracts\View\View;
use Illuminate\Users\Repository as UserRepository;
use SetupVariable;
class NavAtasComposer {


  
    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct() {
     }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view){
        $view->with('sv', new \App\Models\SetupVariable); 
    }

}