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
                <img class="image-promo" src="/maindir/images/offer-card.png" alt="">
            </div>
            
            <div class="col-md-6 row-right">
                <form action="{{ url('/pass-intent') }}">
                    @csrf  
                    
                    <a class="gen-link" href="{{url()->previous()}}"><i class="fa fa-angle-double-left"></i>&nbsp; Back</a>
                    <p>Pay with your credit card</p>
                    <img class="visa" src="/maindir/images/visa.png" alt="">
                    <div>
                        <label for="">Company</label>
                        <input type="text" name="company_name" value="{{auth()->user()->company}}" placeholder="Company Name" required>
                    </div>
                    <div>
                        <label for="">Payment Plan</label>
                        <input type="text" name="company_name" value="2 Years - ${{session('amount')}}" placeholder="Company Name" readonly required>
                        {{-- <select name="pmt_plan" id="">
                            <option value="1">1 Year - ${{number_format(auth()->user()->amount, 2)}}</option>
                            <option value="2">2 Years - ${{number_format((auth()->user()->amount * 2) - (0.125 * (auth()->user()->amount * 2)), 2)}}</option>
                        </select> --}}
                    </div>
                </form>
                        
                    @if (auth()->user()->status == 'no')
                            
                        <div class="card">
                            <form action="{{route('payments.checkout-page')}}"  method="post" id="payment-form">
                                @csrf                    
                                <div class="form-group">
                                    <div class="card-header">
                                        <label for="card-element">
                                            Enter your credit card information
                                        </label>
                                    </div>
                                    <div class="card-body">
                                        <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                        <input type="hidden" name="plan" value="" />
                                    </div>
                                </div>
                                <div class="card-footer">
                                <button
                                id="card-button"
                                class="btn btn-dark"
                                type="submit"
                                data-secret="{{ $intent }}"
                                > &nbsp; Pay &nbsp;<i class="fa fa-send"></i> &nbsp; </button>
                                </div>
                            </form>
                        </div>

                    @endif
                {{-- </form> --}}

            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)

        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
    
        const stripe = Stripe('pk_live_51NvMfoGUgSRZPj4WzznolUmWELYrYmwXIaEWKbEDPJXhDnJUOcCwjt7257XjJplCoSZFHQ9xe04VjDZjjYJuqVE500pEvzufYa', { locale: 'en' }); // Create a Stripe client.
        // const stripe = Stripe('pk_test_51NvMfoGUgSRZPj4Wlk4f7cLZXfWUqos6h1VHsO81JkSr7pQo8a7zBlLDXiXC0ywDXlKXAoYmB7tCxX988E4sIg0400DdIqwPny', { locale: 'en' }); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.
        const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
    
        cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.
    
        // Handle real-time validation errors from the card Element.
        cardElement.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
    
        // Handle form submission.
        var form = document.getElementById('payment-form');
    
        form.addEventListener('submit', function(event) {
            event.preventDefault();
    
        stripe.handleCardPayment(clientSecret, cardElement, {
                payment_method_data: {
                    //billing_details: { name: cardHolderName.value }
                }
            })
            .then(function(result) {
                console.log(result);
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    console.log(result);
                    form.submit();
                }
            });
        });
    </script>

@endsection