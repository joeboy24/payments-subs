@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('notification'))
    <div class="alert alert-notification">
        {{session('notification')}}
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        <i class="fa fa-user"></i>&nbsp; {{session('success')}}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning">
        {{session('warning')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
