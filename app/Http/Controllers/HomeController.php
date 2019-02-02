<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Store\Productgroup;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = $this->getActiveNews();
        $teasers = $this->getTeaserProducts();

        return view('home', compact('news', 'teasers'));
    }

    /**
     * Get the news which are set to active.
     *
     * @return  array
     */
    private function getActiveNews()
    {
        return News::where('active', 1)->orderBy('updated_at', 'DESC')->get();
    }

    /**
     * Get random teaser products.
     *
     * @return  array
     */
    private function getTeaserProducts()
    {
        return Productgroup::where('teaser', 1)
            ->where('active', 1)
            ->inRandomOrder()
            ->limit(8)
            ->get();
    }
}
