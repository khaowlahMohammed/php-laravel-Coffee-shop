<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showConfirmation()
    {
        return view('shopping.confirmation'); // استخدم المسار الصحيح للعرض
    }

    public function processOrder(Request $request)
    {
        // معالجة البيانات
        $website = $request->input('website');
        $phone = $request->input('phone');
        $email = $request->input('email');

        // هنا يمكنك تنفيذ أي عملية تريدها (مثل حفظ البيانات في قاعدة البيانات)

       // تخزين رسالة نجاح في الجلسة
    session()->flash('success', 'شكرا لك! تمت عملية الشراء بنجاح.');

    return redirect()->route('success_page'); // توجيه المستخدم إلى صفحة النجاح
}
}
