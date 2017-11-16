<?php
/**
 * Created by PhpStorm.
 * User: ghisc
 * Date: 2017-11-02
 * Time: 11:10
 */

namespace App\Http\ViewComposers;

use App\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SchoolComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $schools = School::all();
        $view->with('schools', $schools);
    }
}