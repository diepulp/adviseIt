{{-- Reusable Border --}}
{{-- attributes array makes the component class modifiable --}}
<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 p-10 rounded'])}}>
    {{-- output inside the tags goes inside the slot --}}
    {{$slot}}
</div>