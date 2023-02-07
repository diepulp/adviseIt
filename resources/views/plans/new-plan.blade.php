@extends('layout')
@section('content')
@include('partials._hero')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plan</title>
    <link rel="stylesheet" href="{{ URL::asset('css/plan.css') }}">

</head> --}}
<body>
    
</body>
</html>
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<h2 class="flex justify-center m-3 font-bold">New plan token :<span class="text-sky-400 ml-1"> {{$token}}</span> </h2>

<form action="#">
    <div id="form_container" class="grid grid-cols-2 gap-4 col-auto ">
        <div class="fall flex flex-column justify-center">
            <label class="mr-6"  for="fall">Fall</label>
            <textarea class="outline-none border-4 border-indigo" type="text" id="fall" name="fall">

            </textarea>
        </div>
    <div class="winter flex justify-center">
        <label class="mr-6" for="winter ">Winter</label>
        <textarea class="outline-none border-4 border-indigo" type="text" id="winter" name="winter"></textarea>
    </div>
    <div class="spring flex justify-center">
        <label class="mr-6" for="spring">Spring</label>
        <textarea class="outline-none border-4 border-indigo" type="text" id="spring" name="spring"></textarea>
    </div>
   <div class="summer flex justify-center">
        <label class="mr-6" for="summer">Summer</label>
        <textarea class="outline-none border-4 border-indigo" type="text" id="summer" name="summer"></textarea>
   </div>
</div>
<button class="flex justify-end bg-laravel text-white border-white rounded uppercase py-2 px-4 hover:bg-black mt-2">
    Save
    </button>
</form>

<a
                        href="#"
                        class="inline-block border-2 border-white text-cyan py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Save</a
                    >
  
@endsection