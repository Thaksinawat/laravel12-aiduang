
@extends('layouts.app')
@section('content')
<style>
    .news-detail-card {
        max-width: 800px;
        margin: 2rem auto;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.10);
        padding: 2.5rem 2rem;
    }
    .news-detail-title {
        font-size: 2.2rem;
        font-weight: bold;
        color: #222;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }
    .news-detail-date {
        font-size: 1rem;
        color: #888;
        margin-bottom: 1.5rem;
    }
    .news-detail-image {
        width: 100%;
        max-height: 350px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .news-detail-content {
        font-size: 1.15rem;
        color: #333;
        margin-bottom: 2rem;
        line-height: 1.7;
    }
    .back-btn {
        display: inline-block;
        padding: 0.5rem 1.2rem;
        background: #007bff;
        color: #fff;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.2s;
    }
    .back-btn:hover {
        background: #0056b3;
    }
</style>
<div class="news-detail-card">
    <div class="news-detail-title">{{ $news->title }}</div>
    @if($news->created_at)
        <div class="news-detail-date">
            วันที่สร้างข่าว: {{ $news->created_at->format('d/m/Y H:i') }}
            <form method="POST" action="{{ route('news.updateDate', $news->id) }}" style="display:inline; margin-left:1rem;">
                @csrf
                <button type="submit" class="update-date-btn" style="background:#ffc107;color:#222;border:none;padding:0.3rem 0.8rem;border-radius:5px;font-size:0.95rem;cursor:pointer;">อัพเดทวันที่</button>
            </form>
        </div>
    @endif
    @if($news->image_url)
        <img src="{{ $news->image_url }}" alt="image" class="news-detail-image">
    @endif
    <div class="news-detail-content">{!! nl2br(e($news->content)) !!}</div>
</div>
    @if($news->source_url)
        <a href="{{ $news->source_url }}" target="_blank" class="source-btn" style="display:inline-block;margin-bottom:1.5rem;padding:0.5rem 1.2rem;background:#28a745;color:#fff;border-radius:6px;text-decoration:none;font-weight:500;transition:background 0.2s;margin-right:1rem;">อ่านข่าวต้นฉบับ</a>
    @endif
    <a href="{{ route('news.index') }}" class="back-btn">ย้อนกลับ</a>
</div>
@endsection
