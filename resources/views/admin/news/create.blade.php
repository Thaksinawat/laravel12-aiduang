@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('admin.news.store') }}">
    @csrf
    <label>หัวข้อข่าว</label>
    <input type="text" name="title" required>
    <label>เนื้อหา</label>
    <textarea name="content" required></textarea>
    <button type="submit">บันทึก</button>
</form>
@endsection