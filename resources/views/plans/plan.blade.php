{{-- @extends('layout')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/plan.css') }}">

</head>
<body>
    
</body>
</html>
<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<h1>Plan</h1>
<h2>New plan id token : {{$token}}</h2>

<form action="#">
    <div id="form_container">
        <div class="fall">
            <label  for="fall">Fall</label>
            <textarea type="text" id="fall" name="fall">

            </textarea>
        </div>
    <div class="winter">
        <label for="winter">Winter</label>
        <textarea type="text" id="winter" name="winter"></textarea>
    </div>
    <div class="spring">
        <label for="spring">Spring</label>
        <textarea type="text" id="spring" name="spring"></textarea>
    </div>
   <div class="summer">
        <label for="summer">Summer</label>
        <textarea type="text" id="summer" name="summer"></textarea>
   </div>
</div>
</form>

<button>Save</button>
{{-- @endsection --}}