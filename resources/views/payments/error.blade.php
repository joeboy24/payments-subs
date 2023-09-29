@extends('layouts.paylay')


@section('main-body')

    @include('incs.navbar')
    <div class="row">
        <div class="col-md-10 offset-md-1 login-container">
            <div class="pay-details-card">
                <div class="row">
                    <div class="col-md-2 row-left success-img">
                        <i class="fa fa-times-circle"></i>
                        {{-- <img class="sign-up-image" src="https://cdn-icons-png.flaticon.com/512/148/148767.png" alt=""> --}}
                    </div>
                    
                    <div class="col-md-9 row-right">
                        {{-- <div> --}}
                            <p class="pay-error"><i class="fa fa-warning"></i>&nbsp; Transaction Error...</p>
                            <p>Please check card details properly and return to this page to proceed.</p>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection