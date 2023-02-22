<x-layout>
@include('partials._hero')
@include('partials._search')
@auth
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<h1 class="flex justify-center text-center font-bold text-3xl m-4">Plans:</h1>
<div
class="lg:grid lg:grid-cols-2 col-auto gap-4 space-y-4 md:space-y-0 mx-4"
>

@unless((count($plans) == 0))

@foreach($plans as $plan)

{{-- pass the prop "plan" variable to the plan component --}}
<x-plan-card :plan="$plan"/>
@endforeach
    
@else
<p>No plans available</p>
@endunless
</div>
<div class="mt-6 p-4">
    {{$plans->links()}}
</div>
@else
<p class='flex justify-center text-center font-bold'> Welcome! </p>
@endauth
</x-layout>