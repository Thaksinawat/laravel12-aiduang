<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // ใช้ middleware ตรวจสอบสิทธิ์แอดมิน
    }

    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_url' => 'nullable|string',
            'source_url' => 'nullable|string',
        ]);
        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image_url' => $request->image_url,
            'source_url' => $request->source_url,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('admin.news.index')->with('success', 'เพิ่มข่าวสำเร็จ');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_url' => 'nullable|string',
            'source_url' => 'nullable|string',
        ]);
        $news = News::findOrFail($id);
        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'image_url' => $request->image_url,
            'source_url' => $request->source_url,
            'updated_at' => now(),
        ]);
        return redirect()->route('admin.news.index')->with('success', 'แก้ไขข่าวสำเร็จ');
    }
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.show', compact('news'));
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'ลบข่าวสำเร็จ');
    }
}
