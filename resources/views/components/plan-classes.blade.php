@props(['tokens'])

@php
//  dd($classesCsv)
//  $classes = explode(',', $classesCsv);   

@endphp
<ul class="flex justify-center">
    {{-- @foreach ($ids as $id) --}}
    <li 
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/?token={{$tokens}}">PLan UUID: {{$tokens}}</a>
      
    </li>
{{-- @endforeach --}}
</ul>