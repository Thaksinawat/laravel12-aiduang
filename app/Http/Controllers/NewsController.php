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

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_url' => 'nullable|string|max:255',
            'source_url' => 'nullable|string|max:255',
        ]);
        News::create($request->only('title', 'content', 'image_url', 'source_url'));
        return redirect()->route('news.index')->with('success', 'เพิ่มข่าวสำเร็จ');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_url' => 'nullable|string|max:255',
            'source_url' => 'nullable|string|max:255',
        ]);
        $news = News::findOrFail($id);
        $news->update($request->only('title', 'content', 'image_url', 'source_url'));
        return redirect()->route('news.index')->with('success', 'แก้ไขข่าวสำเร็จ');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('news.index')->with('success', 'ลบข่าวสำเร็จ');
    }

    public function updateDate($id)
    {
        $news = News::findOrFail($id);
        $news->created_at = now();
        $news->save();
        return redirect()->route('news.show', $news->id)->with('success', 'อัพเดทวันที่สร้างข่าวเรียบร้อยแล้ว');
    }
}
