<?php namespace App\Http\ViewComposers\Frontend;

use App\Models\Mst\FotoSlide;
 use Illuminate\Contracts\View\View;

class FotoSlideComposer {


  
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

        $foto = FotoSlide::take(10)->with('ref_jabatan')->orderByRaw("RAND()")->get();
        $view->with('foto', $foto); 


    }

}