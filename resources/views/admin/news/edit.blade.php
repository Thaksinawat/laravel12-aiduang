@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('admin.news.update', $news->id) }}">
    @csrf
    @method('PUT')
    <label>หัวข้อข่าว</label>
    <input type="text" name="title" value="{{ $news->title }}" required>
    <label>เนื้อหา</label>
    <textarea name="content" required>{{ $news->content }}</textarea>
    <button type="submit">แก้ไข</button>
</form>
@endsection