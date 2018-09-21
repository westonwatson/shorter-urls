<?php

namespace App\Http\Controllers;

use App\Link;
use App\Services\LinkMaker;
use App\Services\UrlFinder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UrlController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search($token)
    {
        $urlFinder = App::make(UrlFinder::class);
        $url = $urlFinder->find($token);

        return redirect($url);
    }

    public function create(Request $request)
    {
        $linkMaker = App::make(LinkMaker::class);
        $link = $linkMaker->create($request->get('url'));

        return redirect(route('view', ['link' => $link]));
    }

    public function view(Link $link)
    {
        return view('view', [
            'link' => $link,
            'short_url' => route('search', ['token' => $link->token])
        ]);
    }

}
