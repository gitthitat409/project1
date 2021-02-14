@extends('layout.master')

@section('content')

<h1>โพสต์กระทู้</h1>
<a href="/post/create">+ เพิ่มกระทู้</a>
<table>
    <thead>
        <tr>
            <td>ลำดับ</td>
            <td>หัวข้อ</td>
            <td>รูปประจำข่าว</td>
            <td>รายละเอียด</td>
            <td>หมวดหมู่ข่าว</td>
            <td>ผู้เขียนข่าว</td>
            <td>สร้างเมื่อ</td>
            <td>จัดการ</td>
        </tr>
    </thead>
    <tbody>
        @foreach($post as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->thumbnail}}</td>
            <td>{{$item->detail}}</td>
            <td>{{$item->category->name}}</td>
            <td>{{$item->user->name}}</td>
            <td>{{$item->created_at}}</td>
            <td><a href="/post/edit/{{$item->id}}">แก้ไข</a> | <a href="/post/delete/{{$item->id}}">ลบ</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
