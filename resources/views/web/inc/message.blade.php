@if(session('sent'))
<div class="alert alert-success">

{{session('sent')}}
</div>

@endif

@if($errors->any())
<div class="alert alert-danger">

@foreach($errors->all() as $error)

<p>{{$error}}</p>
@endforeach
</div>

@endif