{{-- Pass props to the plan-card --}}
@props(['plan'])


<div class="mx-4">
<x-card>
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> Plan Created at {{$plan->created_at}}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-light mb-4">
                    Plan Description 
                </h3>

                <h3 class="text-2xl">
                    <a href="/plans/{{$plan->id}}"><span class='text-red-400'> Click to view the View Plan:</span> {{$plan->id}}</a>
                </h3>

                <h3 class="text-2xl mb-2 ">Plan UUID: {{$plan->token}}</h3>
                {{-- <div class="text-xl font-bold mb-4">Fall plan: {{$plan->fall}}</div>
                <div class="text-xl font-bold mb-4">Winter plan: {{$plan->winter}}</div>
                <div class="text-xl font-bold mb-4">Spring plan: {{$plan->spring}}</div>
                <div class="text-xl font-bold mb-4">Summer plan: {{$plan->summer}}</div> --}}
                
                {{-- sends the props to the plan-classes component. TODO: Tweak the DB to get all the classes  --}}
                <x-plan-classes :tokens="$plan->token">
                </x-plan-classes>
                <div class="text-lg space-y-6">
                    <p>
                       PLan updated on {{$plan->updated_at}}
                    </p>
            
                </div>
            </div>
        </div>
</x-card>
    </div>