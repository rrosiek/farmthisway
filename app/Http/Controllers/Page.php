<?php

namespace App\Http\Controllers;

use App\Products\ProductFactory;

class Page extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $viewData = [
            'products' => ProductFactory::all(),
            'carousel' => true,
        ];

        return view('home', $viewData);
    }

    /**
     * Show CSA join informatinon
     *
     * @return \Illuminate\Http\Response
     */
    public function csaJoin()
    {
        $viewData = [
            'title' => 'Join Our CSA',
            'products' => ProductFactory::all(),
        ];

        return view('csa.join', $viewData);
    }

    /**
     * Show privacy page
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        return view('privacy', ['title' => 'Privacy']);
    }
}
