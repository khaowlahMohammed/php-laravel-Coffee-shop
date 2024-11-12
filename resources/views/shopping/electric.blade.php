@extends('layouts.appuserui')

@section('content')
<div class="container">
<div class="container" dir="rtl">
    <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center">
            <h3 class="alert alert-success"> اصنع قهوتك</h3>
        </div>
    </div>
    <div class="row">
        @foreach($product as $item)
            <div class="col-md-4 mt-3 d-flex align-items-stretch">
                <div class="card h-100 shadow-sm">
                    <img src='https://cdn.salla.sa/Pdrpyq/65336e29-7e38-4731-9f43-b7ebbfb7cda3-500x500-zHioJ5UEkZtRSziIeON1j7fqRgRNdMPy2DAJhV4n.png' class="card-img-top"  style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">السعر: {{ $item->price }} ريال</li>
                        <li class="list-group-item">الكمية: {{ $item->qty }}</li>
                        <li class="list-group-item">اللون: {{ $item->color }}</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('proddet', ['id' => $item->id]) }}" class="btn btn-primary">شراء</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
