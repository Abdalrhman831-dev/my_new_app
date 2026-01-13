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
        $stor = Stores::All();
        return view('frontend.main.layout',compact('stor'));
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
       'Classification' => 'required|string|max:50',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp,jfif|max:2048',
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
          'Classification'   => $request->Classification,
        'image'   => $imageName,
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
}
