@if ($errors->any())
    <div class="alert alert-danger">{!! implode('', $errors->all('<li style="color:red">:message</li>')) !!}</div>
@endif

@if(session('success'))
<div class="alert alert-success" role="alert">
   <p> {{session('success')}} </p>
</div>
@endif
@if(session('error'))
<div class="alert alert-danger" role="alert">
   <p> {{session('error')}} </p>
</div>
@endif
