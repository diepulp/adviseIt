@extends('layout')
@section('content')
<h1>Plan</h1>
<h2>{{$plan->token}}</h2>
<p>{{$plan->created_at}}</p>

@endsection