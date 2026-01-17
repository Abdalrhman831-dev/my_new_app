<?php

namespace App\Http\Controllers;

use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
 class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
         $stor1 = Stores::where('category_id', 0)->first();
        $stor = Stores::where('category_id', 1)->first();
        
        return view('frontend.main.index',compact('stor','stor1'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contr.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { $request->validate([
        'name' => 'required|string|max:50',
        'title' => 'required|string|max:200',
        'pric' => 'required|string|max:10',
        'condition' => 'required|string|max:50',
    //    'Classification' => 'required|string|max:50',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp,jfif|max:2048',
       'category_id' => 'required|integer',
    ]);

    // 2️⃣ إنشاء الـ slug
   

    // 3️⃣ رفع الصورة
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('uploads/blogs'), $imageName);

    // 4️⃣ حفظ البيانات
    Stores::create([
        'title'   => $request->title,
          'name'   => $request->name,
          'pric'   => $request->pric,
          'condition'   => $request->condition,
        'Classification' => $request->Classification ?? 'عام',
        'image'   => $imageName,
        'category_id' => $request->category_id,
    ]);

    // 5️⃣ إعادة توجيه
    return redirect()->route('stor.index')
                     ->with('success', 'تمت الإضافة بنجاح');
}
    

    /**
     * Display the specified resource.
     */
    public function show(Stores $stores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stores $stores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stores $stores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stores $stores)
    {
        //
    }

// هذه الدالة تجلب فقط الإلكترونيات
public function showElectronics()
{
    // نطلب من الجدول كل الصفوف التي تحمل رقم 2 (رقم الإلكترونيات)
    $products = Stores::where('category_id', 1)->get();

    return view('frontend.Electronics', compact('products'));
}

    // هذه الدالة تجلب فقط المنتجات التي اخترت لها "أدوات تجميل" عند الإضافة
public function showBeauty()
{
    // نطلب من الجدول كل الصفوف التي تحمل رقم 1 (رقم التجميل)
    $products = Stores::where('category_id', 2)->get();

    return view('frontend.Beautification', compact('products'));
}


public function showindex()
{
    // نطلب من الجدول كل الصفوف التي تحمل رقم 1 (رقم التجميل)
    $story = Stores::where('category_id', 3)->get();

    return view('frontend.main.index', compact('story'));
}

}
