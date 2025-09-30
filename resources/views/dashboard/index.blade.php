@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">รายชื่อผู้ดูแลระบบ (Admin)</h1>

    @if($admins->isEmpty())
    <p>ยังไม่มีผู้ดูแลระบบในระบบ</p>
    @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ชื่อ</th>
                <th>อีเมล</th>
                <th>วันที่สมัคร</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->created_at->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection