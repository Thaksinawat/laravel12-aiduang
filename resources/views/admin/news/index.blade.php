{{-- resources/views/news/index.blade.php --}}
@extends('layouts.app')

{{-- กำหนด Title ของหน้านี้ --}}
@section('title', 'ข่าวทั้งหมดที่น่าสนใจ')

{{-- เริ่มส่วนของเนื้อหา --}}
@section('content')


<h2 class="mb-4 border-start border-4 border-primary ps-3 fw-bold text-dark">
    ข่าวทั้งหมดที่น่าสนใจ
</h2>

{{-- ปุ่มเพิ่มข่าวสำหรับแอดมิน --}}
<div class="mb-3">
    <a href="{{ route('admin.news.create') }}" class="btn btn-success">เพิ่มข่าวใหม่</a>
</div>

<div class="row g-4">

    {{-- ✅ ใช้ Loop จาก Controller เพื่อแสดงข่าวทั้งหมด --}}

    @foreach ($news as $item)
    <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
            <img src="{{ $item->image_url }}" class="card-img-top" alt="{{ $item->title }}">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ Str::limit($item->content, 100) }}</p>

                <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary btn-sm mt-auto">อ่านต่อ</a>

                {{-- ปุ่มแก้ไข/ลบสำหรับแอดมิน --}}
                <div class="mt-2">
                    <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-warning btn-sm">แก้ไข</a>
                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบ?')">ลบ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

{{-- ✅ แสดงตัวแบ่งหน้า --}}
<div class="mt-4">
    {{ $news->links() }}
</div>

@endsection