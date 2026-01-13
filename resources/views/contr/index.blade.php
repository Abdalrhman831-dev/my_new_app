@extends('layouts.app')

@section('content')







   






   



<table class="table table-bordered table-striped m-3 " style=" width: 1100px ;">
  <thead>
    <tr>
      <th class="text-center" style="width: 5%;">ID</th>
                            <th class="text-center" style="width: 10%;">الصورة</th>
                            <th class="text-start" style="width: 10%;">اسم المنتج</th>
                            <th class="text-center" style="width: 10%;">التصنيف</th>
                            <th class="text-start" style="width: 35%;">الوصف</th>
                            <th class="text-center" style="width: 5%;">السعر</th>
                            <th class="text-center" style="width: 5%;">الحالة</th>
                            <th class="text-center" style="width: 20%;">التعديل</th>
    </tr>
  </thead>
  <tbody>
   
       @foreach($stor as  $blog)
        <tr >
      <th scope="row" >{{$blog['id']}}</th>
      <td ><img class="img-fluid" src="{{asset('uploads/blogs/'.$blog['image']) }}  "   class="rounded border object-fit-cover"
                                     width="40" 
                                     height="40"
           ></td>

      <td >  <p>  {{$blog['name']}} </p></td>
      <td>{{$blog['Classification']}}</td>
      <td><h3>  {{$blog['title']}} </h3></td>
      <td>${{$blog['pric']}}</td>
      <td>{{$blog['condition']}}</td>
      <td > <button type="submit" class="btn btn-submit bg-danger">
                            <i class="bi bi-trash-fill"></i>  حذف
                        </button>
                       <button type="submit" class="btn btn-submitden bg-primary">
                            <i class="bi bi-pencil"></i>  تعديل
                        </button></td>
       </tr>
       @endforeach
   
   
  </tbody>
</table>

<div class="d-flex justify-content-center">
   <a class="btn btn-submit bg-primary" href="{{route('stor.create')}}"> أضافة منتج اخر </a>
</div>

@endsection