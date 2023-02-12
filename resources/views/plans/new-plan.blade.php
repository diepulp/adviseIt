{{-- @extends('layout')
@section('content') --}}
@include('partials._hero')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plan</title>
    <link rel="stylesheet" href="{{ URL::asset('css/plan.css') }}">

</head>
<body>
    
</body>
</html> --}}
<x-layout>
<x-card>
{{-- <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <p>Some Text</p>
            </h3>
            <div class="text-xl font-bold mb-4">link 2</div>
        
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> 
            </div>
        </div>
    </div>
</div> --}}
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<h2 class="flex justify-center m-3 font-bold">New plan token :<span class="text-sky-400 ml-1"> {{$token}}</span> </h2>
<x-card>
    {{-- Form --}}
<form action="#" >
    {{-- class="grid grid-cols-2 gap-4 col-auto"     --}}
    {{-- grid grid-cols-2 gap-4 --}}
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4" >
        
        <div class="flex flex-col">
            <label class="inline-block justify-center text-center" for="fall ">Fall</label>
            <textarea class="outline-none border-4 border-indigo h-48" type="text" id="fall" name="fall"></textarea>
        </div>

        <div class=" flex flex-col">
            <label class="inline-block justify-center text-center" for="winter ">Winter</label>
            <textarea class="outline-none border-4 border-indigo h-48" type="text" id="winter" name="winter"></textarea>
        </div>

        <div class=" flex flex-col">
            <label class="inline-block justify-center text-center" for="winter ">Spring</label>
            <textarea class="outline-none border-4 border-indigo h-48" type="text" id="spring" name="spring"></textarea>
        </div>

        <div class=" flex flex-col">
            <label class="inline-block justify-center text-center" for="winter ">Summer</label>
            <textarea class="outline-none border-4 border-indigo h-48" type="text" id="summer" name="summer"></textarea>
        </div>
        <button class="min-w-[25px] text-red-300 bg-laravel border-white rounded uppercase py-2 px-4 hover:bg-red-100 mt-2">
            Save
            </button>
</div>

</form>
{{-- end form --}}
</x-card>
<a
                        href="#"
                       class="inline-block border-2 border-white text-cyan py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Save</a
                    >
</x-card>
</x-layout>