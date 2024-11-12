@extends('layouts.appdashboard')



@section('content')
<div class="container">
    <h1>قائمة العملاء</h1>
    <table class="table">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>البريد الإلكتروني</th>
                <th>تاريخ التسجيل</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user) 
            <tr>
                <td>{{ $user->name }}</td> 
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td> <!-- إضافة تاريخ التسجيل -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

