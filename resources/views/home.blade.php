@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                                            <!-- If user is not subscribed to a plan, show them the payment form -->
                    @if(!auth()->user()->subscribed('starter'))

                        @if(session('error_message'))
                           <div class="alert alert-success" role="alert">
                             <h4 class="alert-heading">Failed</h4>
                             <p>{{ session('error_message') }}</p>
                           </div>
                        @endif

                        <div class="container">
                            
                           <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">You are not a subscribed to a plan!</h4>
                            <p>To become a subscriber enter your billing info below:</p>
                          
                            </div>
                           <form id="signup-form" action="{{ route('billing') }}" method="post">
                                @csrf
                                <div class="flex flex-wrap mb-6 mt-8 px-6">
                                        <label for="card-element">
                                            Name on Card
                                        </label>
                                        <input type="text" name="name" id="name" >
                                </div>
                                <div class="flex flex-wrap border border-info p-5">
                                    <label for="card-element">
                                        Credit Card Info
                                    </label>
                                    <!-- Stripe Elements Placeholder -->
                                    <div id="card-element" ></div>
                                    <div id="card-errors"></div>
                                </div>
                                
                                <button type="submit" id="card-button" class="">
                                    Subscribe
                                </button>
                            </form>
                        </div>

                    <!-- Otherwise if the user is subscribed, show them a success message -->
                    @else
                    
                        <div class="alert alert-success" role="alert">
                          <h4 class="alert-heading">Thanks for being a customer!</h4>
                          <p>You Are Subscribed to the Starter Plan.</p>
                          
                        </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
    @if(!auth()->user()->subscribed('starter'))
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            const stripe = Stripe('{{ env("STRIPE_KEY") }}');
            console.log(stripe);

            const elements = stripe.elements();
            const cardElement = elements.create('card');

            cardElement.mount('#card-element');

            const cardHolderName = document.getElementById('name');
            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;
            let validCard = false;
            const cardError = document.getElementById('card-errors');

            cardElement.addEventListener('change', function(event) {
                
                if (event.error) {
                    validCard = false;
                    cardError.textContent = event.error.message;
                } else {
                    validCard = true;
                    cardError.textContent = '';
                }
            });

            var form = document.getElementById('signup-form');

            form.addEventListener('submit', async (e) => {
                event.preventDefault();

                const { paymentMethod, error } = await stripe.createPaymentMethod(
                    'card', cardElement, {
                        billing_details: { name: cardHolderName.value }
                    }
                );

                if (error) {
                    // Display "error.message" to the user...
                    console.log(error);
                } else {
                    // The card has been verified successfully...
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'payment_method');
                    hiddenInput.setAttribute('value', paymentMethod.id);
                    form.appendChild(hiddenInput);
                    // Submit the form
                    form.submit();
                }

            });
        
        </script>
    @endif
@endsection