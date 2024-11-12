<!-- resources/views/shopping/success.blade.php -->
@extends('layouts.appuserui')

@section('content')
<div class="container mt-5">
    <div class="alert alert-success text-center">
        <h2>عملية الشراء ناجحة</h2>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <a href="{{ url('/') }}" class="btn btn-primary">العودة إلى الصفحة الرئيسية</a>
    </div>
</div>
@endsection
