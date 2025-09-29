
@extends('layouts.app')
@section('content')
<style>
    .news-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }
    .news-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        padding: 1.5rem;
        transition: box-shadow 0.2s, transform 0.2s;
        position: relative;
    }
    .news-card:hover {
        box-shadow: 0 6px 24px rgba(0,0,0,0.15);
        transform: translateY(-4px) scale(1.02);
    }
    .news-title {
        font-size: 1.2rem;
        font-weight: bold;
        color: #007bff;
        margin-bottom: 0.5rem;
        text-decoration: none;
        display: block;
    }
    .news-title:hover {
        color: #0056b3;
        text-decoration: underline;
    }
    .news-snippet {
        color: #444;
        font-size: 1rem;
        margin-bottom: 0.5rem;
    }
    .news-date {
        font-size: 0.9rem;
        color: #888;
        position: absolute;
        bottom: 1rem;
        right: 1.5rem;
    }
</style>
<h1 style="font-size:2rem; color:#222; margin-bottom:1.5rem;">ข่าวทั้งหมด</h1>
<div class="news-list">
    @foreach($news as $item)
        <div class="news-card">
            @if($item->image_url)
                <img src="{{ $item->image_url }}" alt="image" style="width:100%;max-height:180px;object-fit:cover;border-radius:8px 8px 0 0;margin-bottom:1rem;">
            @endif
            <a href="{{ route('news.show', $item->id) }}" class="news-title">{{ $item->title }}</a>
            <div class="news-snippet">
                {{ Str::limit(strip_tags($item->content), 80) }}
            </div>
            @if($item->created_at)
                <div class="news-date">{{ $item->created_at->format('d/m/Y') }}</div>
            @endif
        </div>
    @endforeach
</div>
@endsection
