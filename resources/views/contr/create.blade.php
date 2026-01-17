@extends('layouts.app')

@section('content')
 



<main class="container  p-3 border border-5 " style="width:1120px;">
    <div class="container">
        <div class="form-container">
            <!-- عنوان الصفحة -->
            <div class="text-center mb-4">
                <h1 class="page-title">
                    <i class="bi bi-plus-circle text-primary me-2"></i>
                    إضافة منتج جديد
                </h1>
                <p class="text-muted">املأ النموذج أدناه لإضافة منتج جديد إلى المتجر</p>
            </div>
            
            <!-- نموذج إضافة المنتج -->
            <form method="POST" action="{{route('stor.store')}}"   enctype="multipart/form-data">
             @csrf
                <!-- رسالة نجاح -->
                <div id="successAlert" class="alert alert-success alert-dismissible fade show d-none" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <strong>تمت العملية!</strong> تم إضافة المنتج بنجاح.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
                <!-- معلومات أساسية -->
                <div class="row mb-4  border border-3 border-primary rounded-3 ">
                    <div class="col-12 bg-primary  rounded-1">
                        <h5 class="m-3  pb-2 text-light">
                            <i class="bi bi-info-circle text-light me-2"></i>
                            المعلومات الأساسية
                        </h5>
                    </div>
                    
                    <div class="col-md-8 mb-3">
                        <label for="productName" class="form-label required">اسم المنتج</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="أدخل اسم المنتج" required>
                        <div class="invalid-feedback">
                            يرجى إدخال اسم المنتج.
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="productCategory" class="form-label required">التصنيف</label>
                        <select class="form-select" name="category_id" id="category_id" required>
                            <option value="" selected disabled>اختر التصنيف</option>
                             <option value="1">الرئيسيه</option>
                            <option value="2">إلكترونيات</option>
                            <option value="3"> الجمال</option>
                            <option value="4">المنتجات السحريه </option>
                            <option value="5">العروض الخاصه </option>
                        </select>
                        <div class="invalid-feedback">
                            يرجى اختيار تصنيف للمنتج.
                        </div>
                    </div>
                    
                    <div class="col-12 mb-3">
                        <label for="productDescription" class="form-label required">وصف المنتج</label>
                        <textarea class="form-control" name="title" id="title" rows="4" placeholder="أدخل وصف المنتج" required></textarea>
                        <div class="invalid-feedback">
                            يرجى إدخال وصف للمنتج.
                        </div>
                    </div>


                     <div class="col-md-8 mb-3">
                        <label for="productName" class="form-label required">اسم المنتج</label>
                        <input type="text" class="form-control" name="Classification" id="Classification" placeholder="أدخل اسم المنتج" required>
                        <div class="invalid-feedback">
                            يرجى إدخال نوع المنتج.
                        </div>
                    </div>
                </div>
                
                <!-- التسعير والمخزون -->
                <div class="row mb-4  border border-3 border-primary rounded-3 ">
                    <div class="col-12 bg-primary">
                        <h5 class="m-3  pb-2 text-light">
                             <i class="bi bi-info-circle text-light me-2"></i>
                            التسعير  و  صور  المنتج
                        </h5>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="productPrice" class="form-label required">السعر (ريال)</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="pric" id="pric" min="0" step="0.01" placeholder="0.00" required>
                           
                        </div>
                        <div class="invalid-feedback">
                            يرجى إدخال سعر المنتج.
                        </div>
                    </div>
                    
                    
                   
                
                <!-- صور المنتج -->
               
                    
                    <div class="col-12 mb-3">
                        <div class="image-upload-area" id="uploadArea">
                            <div class="upload-icon">
                                
                            </div>
                           
                            <p class="text-muted mb-3"> انقر لاختيار الملفات</p>
                            
                         
                            <input type="file" name="image" id="image"   class="form-control">
                            <div class="mt-2">
                                <small class="text-muted">الحد الأقصى: 5 صور، حجم كل صورة أقل من 5MB</small>
                            </div>
                        </div>
                        
                       
                           
                        </div>
                         <div class="col-md-6 mb-3">
                        <div class="m-2 form-switch">
                          <label class="form-check-label" for="productPublished">  نشر المنتج فورًا</label>
                            <input class="form-check-input" type="checkbox" value="نشط" name="condition" id="condition">
                            
                        </div>
                    </div>
               
              
        


                </div>
              
                  
                        <button type="submit" class="btn btn-submit bg-primary text-light">
                            <i class="bi bi-check-circle me-1"></i> إضافة المنتج
                        </button>
                        
                    </div>
                </div>
            </form>
        </div>
 
</main>

 



@endsection

