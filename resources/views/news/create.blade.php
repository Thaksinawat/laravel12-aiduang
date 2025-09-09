@extends('layouts.app')

@section('content')
<div class="container">
    <h1>เพิ่มข่าวใหม่</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('news.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>หัวข้อข่าว</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>เนื้อหาข่าว</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">บันทึกข่าว</button>
    </form>
</div>
@endsection