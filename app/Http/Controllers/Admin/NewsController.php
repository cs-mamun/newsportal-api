<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
//        $news = News::all();
//        return (new NewsResource($news))
//            ->response()
//            ->setStatusCode(Response::HTTP_FOUND);
        return NewsResource::collection(News::all());
    }
}
