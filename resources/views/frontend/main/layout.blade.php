<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limit discounts</title>
    
    
    <link rel="stylesheet" href="{{asset('assest/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assest/css/bootstrap.css')}}" >
    <link rel="stylesheet" href="{{asset('assest/css/style.css')}}" >
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css')}}">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
     <link href="{{asset('https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&family=Almarai:wght@300;400;700&display=swap')}}" rel="stylesheet">
    
   
</head>
<body>

    
   
@include('frontend.holdfot.heder')

@yield('content')  {{-- تأكد أن الكلمة هنا هي content --}}

@include('frontend.holdfot.footer')

</body>
</html>