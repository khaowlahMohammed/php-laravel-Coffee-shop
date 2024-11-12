@extends('layouts.appuserui')

@section('content')

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                    <div class="card-body p-5">

                        <p class="lead fw-bold mb-5" style="color: #f37a27;">إيصال الشراء</p>

                        <div class="row">
                            <div class="col mb-3">
                                <p class="small text-muted mb-1">التاريخ</p>
                                <p>{{ date('d F Y') }}</p> <!-- دالة التاريخ التلقائي  -->
                            </div>
                            <div class="col mb-3">
                                <p class="small text-muted mb-1">رقم الطلب</p>
                                <p>012j1gvs356c</p>
                            </div>
                        </div>

                        <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                            <div class="row">
                                <div class="col-md-8 col-lg-8">
                                    <p class="lead fw-bold text-danger">وصف المنتج</p>

                                    <p>{{$prod->description}}</p>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <p class="lead fw-bold text-danger">سعر المنتج</p>
                                    <p class="lead fw-bold text-danger">ر.س {{$prod->price}}</p>
                                </div>
                            </div>
                        </div>

                        <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">تتبع الطلب</p>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="horizontal-timeline">
                                    <ul class="list-inline items d-flex justify-content-between">
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                                <a href="{{route('add_to_cart')}}">أضف إلى السلة</a>
                                            </p>
                                        </li>
                                        <li class="list-inline-item items-list">
                                            <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                                <a href="{{route('confirmation')}}" class="text-white">مواصلة الشراء</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="mt-4 pt-2 mb-0">هل تحتاج إلى مساعدة؟ <a href="#!" style="color: #f37a27;">يرجى الاتصال
                                بنا</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection