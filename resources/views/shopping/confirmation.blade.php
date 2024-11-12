<!-- resources/views/confirmation.blade.php -->
@extends('layouts.appuserui')

@section('content')
<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                    <div class="card-body p-5">
                        <h2 class="fw-bold mb-4" style="color: #f37a27;">تأكيد العملية</h2>

                        <form action="{{ route('process_order') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="website" class="form-label">الموقع</label>
                                <input type="text" class="form-control" id="website" name="website" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">رقم الهاتف</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">البريد الإلكتروني</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #f37a27;">تأكيد</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
