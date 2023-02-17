{{-- @extends('layout')
@section('content') --}}
@include('partials._hero')

<x-layout>
<x-card>

<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<h2 class="flex justify-center m-3 font-bold"> Plan token :<span class="text-sky-400 ml-1"> {{$plan->token}}</span> </h2>
<x-card>
    {{-- Form --}}
<form method='POST' action="/plans/{{$plan->id}}" enctype='multipart/form-data'>
    {{-- prevents cross-site scripting atacks --}}
    @csrf

    {{-- PUt method directive --}}
    @method('PUT')

    {{-- class="grid grid-cols-2 gap-4 col-auto"     --}}
    {{-- grid grid-cols-2 gap-4 --}}
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4" >
        
        <div class="flex flex-col">
            <label class="inline-block justify-center text-center" for="fall ">Fall</label>
            <textarea class="outline-none border-4 border-indigo h-48" type="text" id="fall" name="fall">
                {{$plan->fall}}
            </textarea>
        </div>

        <div class=" flex flex-col">
            <label class="inline-block justify-center text-center" for="winter ">Winter</label>
            <textarea class="outline-none border-4 border-indigo h-48" type="text" id="winter" name="winter">
                {{$plan->winter}}
            </textarea>
        </div>

        <div class=" flex flex-col">
            <label class="inline-block justify-center text-center" for="winter ">Spring</label>
            <textarea class="outline-none border-4 border-indigo h-48" type="text" id="spring" name="spring">
                {{$plan->spring}}
            </textarea>
        </div>

        <div class=" flex flex-col">
            <label class="inline-block justify-center text-center" for="winter ">Summer</label>
            <textarea class="outline-none border-4 border-indigo h-48" type="text" id="summer" name="summer">
                {{$plan->summer}}
            </textarea>
        </div>
        <div class="hidden">
            <label class="inline-block justify-center text-center" for="token ">Token</label>
            <textarea class="outline-none border-4 border-indigo h-48" type="text" id="token" name="token">{{$plan->token}}</textarea>
        </div>
        <button type='submit' class="inline-block text-red-300 bg-laravel border-white rounded uppercase py-2 px-4 hover:bg-red-100 mt-2">
            Update
            </button>
</div>

</form>
{{-- end form --}}

</x-card>
{{-- <a href="#" class="inline-block border-2 border-white text-cyan py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Save</a> --}}
</x-card>
</x-layout>