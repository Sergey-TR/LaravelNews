<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsStoreRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('category')->get();
        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        $category = $news->category()->get()[0];
        $comments = [];
        if (Storage::exists(FILE_NEWS_COMMENT_NAME)){
            $comments = json_decode(Storage::get(FILE_NEWS_COMMENT_NAME));
        }
        return view('news.show', compact(['news', 'category', 'comments']));
    }

    public function create()
    {
        $categories = Category::all();
        return view('news.create', compact('categories'));
    }

    public function store(NewsStoreRequest $request): RedirectResponse
    {
        return redirect()->route('news.index')->with('success', 'Новость успешно добавлена!');
    }
}
