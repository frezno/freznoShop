<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

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

        return view('home', compact('news'));
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
}
