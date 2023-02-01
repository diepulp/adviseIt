<h1>Plans</h1>

@unless((count($plans) == 0))

@foreach($plans as $plan)
<h3>{{$plan->token}}</h3>
<p>{{$plan->winter}}</p>
@endforeach
    
@else
<p>No plans available</p>
@endunless