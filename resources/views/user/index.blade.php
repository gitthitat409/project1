@extends('layout.master')

@section('content')

<h1>หมวดหมู่ข่าว</h1>
<a href="/user/create">+ เพิ่มหมวดหมู่ใหม่</a>
<table>
    <thead>
        <tr>
            <td>ลำดับ</td>
            <td>ชื่อหมวดหมู่</td>
            <td>สร้างเมื่อ</td>
            <td>จัดการ</td>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->created_at}}</td>
            <td><a href="/user/edit/{{$item->id}}">แก้ไข</a> | <a href="/user/delete/{{$item->id}}">ลบ</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
