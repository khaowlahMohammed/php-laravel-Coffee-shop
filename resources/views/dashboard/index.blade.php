@extends('layouts.appdashboard')

@section('content')

<div class="container">
    <h1 class="mt-4">لوحة التحكم</h1>
    <h2 class="fw-bold"><span class="text-primary">Coffee Express</span> - قهوة عالماشي ☕</h2>  



    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">عدد الطلبات اليوم</div>
                <div class="card-body">
                    <h5 class="card-title">120</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">إجمالي المبيعات</div>
                <div class="card-body">
                    <h5 class="card-title">ر.س 5000</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">عدد الزبائن الجدد</div>
                <div class="card-body">
                    <h5 class="card-title">30</h5>
                </div>
            </div>
        </div>
    </div>

  

</div>

@endsection
