@extends('layout')
@section('content')
<h1>Plans</h1>
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
@unless((count($plans) == 0))

@foreach($plans as $plan)
{{-- <h3>{{$plan->token}}</h3>
<p>{{$plan->winter}}</p> --}}

<div class="mx-4">
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{asset('images/no-image.png')}}"
            alt=""
        />

        <h3 class="text-2xl mb-2 font-bold">Plan UUID {{$plan->token}}</h3>
        <div class="text-xl font-bold mb-4">Winter plan {{$plan->winter}}</div>
       
        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> Plan Created at {{$plan->created_at}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-light mb-4">
                Plan Description 
            </h3>
            <div class="text-lg space-y-6">
                <p>
                   PLan updated on {{$plan->updated_at}}
                </p>
        
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
    
@else
<p>No plans available</p>
@endunless

@endsection