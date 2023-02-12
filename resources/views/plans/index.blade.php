<x-layout>
@include('partials._hero')
@include('partials._search')
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<h1 class="flex justify-center text-center font-bold text-3xl m-4">Plans:</h1>
<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>
@unless((count($plans) == 0))

@foreach($plans as $plan)
<x-plan-card :plan="$plan"/>
@endforeach
    
@else
<p>No plans available</p>
@endunless
</div>
</x-layout>