@extends('layouts.app')

@section('title', $news->title)

@section('content')
<h1 class="mb-3">{{ $news->title }}</h1>
<p class="text-muted">

</p>
<hr>
<div class="fs-5">
    {{-- ใช้ {!! !!} เพื่อให้แสดงผล HTML จากฐานข้อมูลได้ --}}
    {!! $news->content !!}
</div>
<hr>
<a href="{{ route('news.index') }}" class="btn btn-secondary">← กลับไปหน้ารวมข่าว</a>
@endsection