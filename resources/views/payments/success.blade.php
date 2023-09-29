@extends('layouts.paylay')


@section('main-body')

    @include('incs.navbar')
    <div class="row">
        <div class="col-md-10 offset-md-1 login-container">
            <div class="pay-details-card">
                <div class="row">
                    <div class="col-md-2 row-left success-img">
                        <i class="fa fa-check-circle"></i>
                        {{-- <img class="sign-up-image" src="https://cdn-icons-png.flaticon.com/512/148/148767.png" alt=""> --}}
                    </div>
                    
                    <div class="col-md-9 row-right">
                        {{-- <div> --}}
                            <p class="pay-success"><i class="fa fa-thumbs-o-up"></i>&nbsp; Payment Successful...</p>
                            <p>Thank you for using our services. Please contact your registrar for an electronic receipt.</p>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection