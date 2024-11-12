@extends('layouts.appuserui')  

@section('content')  
  

    <!-- landingpage.blade.php  -->  
<div class="container">  
    <!-- عنوان الصفحة -->  
    <div class="row mt-5 text-center">  
        <div class="col">  
            <h2 class="welcome-text">أهلاً بكم في</h2> <!-- النص بلون أحمر -->  
            <h2 class="fw-bold"><span class="text-primary">Coffee Express</span> - قهوة عالماشي ☕</h2>  
            <p class="text-muted">استمتع بأفضل أنواع القهوة والإكسسوارات اللازمة لتحضيرها في مكان واحد!</p> <!-- النص المعدل -->  
        </div>  
    </div>  

    <!-- البطاقات -->  
    <div class="row mt-5 g-4">  
        <!-- بطاقة أكواب القهوة -->  
        <div class="col-lg-4 col-md-6">  
        <a href="{{route('coffee_cups')}}" class="text-decoration-none">  
            <div class="card h-100 shadow border-0">  
                <div class="card-body text-center">  
                    <i class="bi bi-cup-straw h1 text-danger mb-3"></i>  
                    <h3 class="card-title">أكواب القهوة</h3>  
                    <p class="card-text text-muted">اكتشف تشكيلة واسعة من أكواب القهوة لتناسب ذوقك.</p>  
                </div>  
            </div>  
</a>
        </div>  
        <!-- بطاقة البن -->  
        <div class="col-lg-4 col-md-6">  
        <a href="{{route('coffee_beans')}}" class="text-decoration-none">  

            <div class="card h-100 shadow border-0">  
                <div class="card-body text-center">  
                    <i class="bi bi-basket h1 text-success mb-3"></i>  
                    <h3 class="card-title">البن</h3>  
                    <p class="card-text text-muted">كل ما تحتاجه من أنواع البن المميزة لتحضير قهوتك.</p>  
                </div>  
            </div>  
</a>
        </div>  

        <!-- بطاقة اصنع قهوتك -->  
        <div class="col-lg-4 col-md-6">  
            <a href="{{route('electric')}}" class="text-decoration-none">  
                <div class="card h-100 shadow border-0">  
                    <div class="card-body text-center">  
                        <h1 class="text-primary mb-3">☕</h1> <!-- استخدام رمزالقهوة كأيقونة -->  
                        <h3 class="card-title">اصنع قهوتك</h3>  
                        <p class="card-text text-muted">تعلم كيفية تحضير القهوة المثالية من المنزل.</p>  
                    </div>  
                </div>  
            </a>  
        </div>  
    </div>  
</div>  

@endsection