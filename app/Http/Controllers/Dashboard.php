<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\products_details;
use Illuminate\Support\Facades\DB;
use App\Models\User; // تأكد من استيراد نموذج User


class Dashboard extends Controller
{
    public function index(Request $request)
    {
        //dd($request->user()->password);
        return view('dashboard.index');
    }

    // مهمتها قراءة البيانات و ارسالها للصفحة
    public function products()
    
    {
      // model products المهمة  بتقرأ و بتخزن  من 
        $prod=products::All();
        return view('dashboard.products',['prod'=>$prod]);

    }

    // اضافة 

    public function create_newproducts(Request $request)
    {
      $prod=products::create([

            'name'=>$request->productname,
            'description'=>$request->description

      ]);
      // حفظ المنتجات في كائن 
     // prod

      $prod->save();
      // علشان تتنفذ الدالة لازم احط الراوت 
      return redirect()->route('products');
    }


    //delete

    public function delete()
    {
      $id=$_GET['id_product'];
      $p=products::find($id);
      $p->delete();
      
    }
    

//update
     public function update(Request $request)
     {
        
        products::where('id',$request->id)
        ->update(['name'=>$request->name,'description'=>$request->description]);
        return redirect()->route('products');
     }


     //edit
     //   استدعينها من خلال رابط

    public function edit($id)
    // ببيحث عن المنتج ب id 
    {
        $products=products::find($id);
        //شغل صفحة edit
        return view('dashboard.edit',['products'=>$products]);
    }


    public function create_new_details(Request $request)
    {
        
       $product_details=products_details::Create([
          'id_products'=>$request->product_no,
          'price'=>$request->price,
          'color'=>$request->color,
          'qty'=>$request->qty,
          'image'=>$request->img
       ]);
       $product_details->save();
       return redirect()->route('showdet');
    }


  


    
    public function showproduct_details()
    {
      $prod=products::All();
      $producdetails=DB::table('products')
      ->join('products_details','products.id','=','products_details.id_products')

      ->get();
      return view('dashboard.product_details',['prod'=>$prod,'producdetails'=>$producdetails]);
    }

   


    public function createNewDet(Request $request)  
    {  
        // حفظ المنتج في قاعدة البيانات  
        $product = new Product();  
        $product->name = $request->input('product_name');  
        $product->description = $request->input('description');  
        $product->category = $request->input('category');  
        $product->price = $request->input('price');  
        $product->qty = $request->input('qty');  
        $product->color = $request->input('color');  
        $product->image = $request->input('img');  
        $product->save();  
    
        // التوجيه إلى صفحة الفئة المحددة  
        return redirect()->route($request->input('category'));  
    }


    public function showCoffeeCups()  
{  
    $products = Products::where('category', 'coffee_cups')->get();  
    return view('coffee_cups', compact('products'));  
}  


public function cous()
    {
        $users = User::all(); // جلب جميع المستخدمين من جدول المستخدمين
        return view('dashboard.customers', compact('users')); // تمرير المتغير إلى العرض
    }

}
