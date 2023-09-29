@extends('layouts.paylay')


@section('main-body')

    @include('incs.navbar')

    <div class="pay-details-card">
        <div class="row">
            <div class="col-md-6 row-left">
                <i class="fa fa-gg-circle"></i>
                <p>Amount Due</p>
                <h2 class="amount-due">$
                    @if (auth()->user()->status == 'no')
                        {{number_format(auth()->user()->amount, 2)}} 
                    @else
                        0.00
                    @endif
                    <span>/ Year</span></h2>
                <span class="billing-period">Billing Period: Yearly</span>
                <img id="vl" class="image-promo" src="/maindir/images/offer-card.png" alt="">
                <img id="vs" class="image-promo" src="/maindir/images/offer-card3.png" alt="">
            </div>
            
            <div class="col-md-6 row-right">
                <form action="{{ url('/pass-intent') }}">
                    @csrf  
                    
                    @include('incs.messages')
                    <p>Pay with your credit card</p>
                    <img class="visa" src="/maindir/images/visa.png" alt="">
                    <div>
                        <label for="">Company</label>
                        <input type="text" name="company_name" value="{{auth()->user()->company}}" placeholder="Company Name" required>
                    </div>
                    <div>
                        <label for="">Payment Plan</label>
                        <select name="pmt_plan" id="">
                            <option value="1">1 Year - ${{number_format(auth()->user()->amount, 2)}}</option>
                            <option value="2">2 Years - ${{number_format((auth()->user()->amount * 2) - (0.125 * (auth()->user()->amount * 2)), 2)}}</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="login-btn">Checkout &nbsp;<i class="fa fa-caret-right"></i></button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection