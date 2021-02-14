@extends('layout.master')

@section('content')

<h1>โพสต์กระทู้</h1>
<a href="/post/create">+ เพิ่มกระทู้</a>
<table>
    <thead>
        <tr>
            <td>ลำดับ</td>
            <!--<td>หมวดหมู่</td> -->
            <td>ชื่อโพสต์</td>
            <td>รายละเอียด</td>
           <!-- <td>สร้างโดย</td> -->
            <td>สร้างเมื่อ</td>
            <td>จัดการ</td>
        </tr>
    </thead>
    <tbody>
        @foreach($post as $item)
        <tr>
            <td>{{$item->id}}</td>
            <!--<td>{{$item->category_id}}</td> -->
            <td>{{$item->title}}</td>
            <td>{{$item->detail}}</td>
            <!--<td>{{$item->thumbnail}}</td> -->
            <!--<td>{{$item->user_id}}</td>-->
            <td>{{$item->created_at}}</td>
            <td><a href="/post/edit/{{$item->id}}">แก้ไข</a> | <a href="/post/delete/{{$item->id}}">ลบ</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
