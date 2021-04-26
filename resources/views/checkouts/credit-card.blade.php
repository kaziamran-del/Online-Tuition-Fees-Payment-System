<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fast Pay Service | Stripe Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon Css -->
    <link rel="shortcut icon" href="{{ asset('front_end') }}/assets/img/faviconn.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @php
    $stripe_key = 'pk_test_51HeLomHYVURiJ0ImhkYwKR4nQMDknJzicRbjVNz8mIJhABOXsyGrKOFD55att4pAx0T8MR1iYJzSWLFSbxoMz5Cq00SsHx94D5';
 @endphp
</head>
<body>
   

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div style="text-align: center;margin-top: 15px;">
                    <h4 style="margin-bottom: 30px;">Fast Pay Service | Tuition Fees Apps | Stripe Account Page</h4>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                    
                    <h5 style="margin-bottom: 30px;font-weight: bold;">Student Information</h5>

                        <div class="form-group row">
                            <label class="col-md-2 col-sm-2 control text-left" for="">Name of the  Student </label>
                           
                            <div class="col-md-10 col-sm-10">
                                <input style="text-transform: capitalize;" name="student_name" type="text" value="{{$card->student_name}}" class="form-control text-money field_width" readonly="readonly"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-sm-2 control text-left" for="">ID Number(9 digits) </label>
                           
                            <div class="col-md-10 col-sm-10">
                                <input name="student_id" type="text" value="{{$card->student_id}}" class="form-control text-money field_width" readonly="readonly"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-sm-2 control text-left" for="">Program & Batch </label>
                           
                            <div class="col-md-10 col-sm-10">
                                <input style="text-transform: capitalize;" name="program_batch" type="text" value="{{$card->program_batch}}" class="form-control text-money field_width" readonly="readonly"/>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label class="col-md-2 col-sm-2 control text-left" for="">Total Amount(Taka)</label>
                           
                            <div class="col-md-10 col-sm-10">
                                <input style="text-transform: capitalize;" name="amount" type="text" value="{{$card->amount}}" class="form-control text-money field_width" readonly="readonly"/>
                            </div>
                        </div>     
                    </div>  
                </div>
                
                <div class="card">
                    <form action="{{route('checkout.credit-card')}}"  method="post" id="payment-form">
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
                          <button id="card-button" class="btn btn-dark" type="submit" data-secret="{{ $intent }}"> Pay </button>
                        </div>
                    </form>
                </div>
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

    
        const stripe = Stripe('{{ $stripe_key }}', { locale: 'en' }); // Create a Stripe client.
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
</body>
</html>
