<?php
namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    public function updateDate($id)
    {
        $news = News::findOrFail($id);
        $news->created_at = now();
        $news->save();
        return redirect()->route('news.show', $news->id)->with('success', 'อัพเดทวันที่สร้างข่าวเรียบร้อยแล้ว');
    }
}
