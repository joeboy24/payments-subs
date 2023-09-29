@extends('layouts.paylay')


@section('main-body')

    <div class="row">
        <div class="col-md-10 offset-md-1 login-container">
            <div class="pay-details-card">
                <div class="row">
                    <div class="col-md-5 row-left row-left-login">
                        <img class="sign-up-image" src="/maindir/images/signup-image.jpeg" alt="">
                    </div>
                    
                    <div class="col-md-7 row-right">
                        <form action="{{ route('login') }}" method="POST">
                          @csrf
                            <p class="unlock"><i class="fa fa-unlock-alt"></i> &nbsp;Login here</p>
                            <form action="">
                                <div>
                                    <label for="">Select Company</label>
                                    <select name="pmt_plan" id="">
                                        <option>Macademia Group</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">Email</label>
                                    <input type="email" placeholder="Type Phone / Email" id="email" class="@error('email') is-invalid @enderror login_input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="">Password</label>
                                    <input placeholder="*************" id="password" type="password" class="@error('password') is-invalid @enderror login_input" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <button type="submit" class="login-btn">Login &nbsp;<i class="fa fa-send"></i></button>
                                </div>
                                {{-- <div>
                                    <input type="checkbox">
                                    <p>Remember Me</p>
                                </div> --}}
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection