
<?php $x="aaaa"; ?>
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger error-handler">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success error-handler">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger error-handler">
        {{session('error')}}
    </div>
@endif