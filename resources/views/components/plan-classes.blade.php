@props(['classesCsv'])

@php
//  dd($classesCsv)
 $classes = explode(',', $classesCsv);   

@endphp
<ul class="flex">
    @foreach ($classes as $class)
    <li 
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/plans/?class={{$class}}">{{$class}}</a>
    </li>
@endforeach
</ul>