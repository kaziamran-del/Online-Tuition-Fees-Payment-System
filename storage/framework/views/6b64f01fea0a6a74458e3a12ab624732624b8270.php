<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<title>Stripe</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Main css -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('front_end')); ?>/assets/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>" />
	<script src="https://js.stripe.com/v3/"></script>
	<style type="text/css">
			.StripeElement {
			    box-sizing: border-box;
			    
			    height: 40px;
			    
			    padding: 10px 12px;
			    
			    border: 1px solid transparent;
			    border-radius: 4px;
			    background-color: white;
			    
			    box-shadow: 0 1px 3px 0 #e6ebf1;
			    -webkit-transition: box-shadow 150ms ease;
			    transition: box-shadow 150ms ease;
			}
			  
			.StripeElement--focus {
			    box-shadow: 0 1px 3px 0 #cfd7df;
			}
			  
			.StripeElement--invalid {
			    border-color: #fa755a;
			}
			  
			.StripeElement--webkit-autofill {
			    background-color: #fefde5 !important;
			}

			#card-errors{
				color: #fa755a;
			}
	</style>
</head>

<body>
	<section class="payment_area">
		<div class="container">
			<div class="row">
		        <div class="col-md-8"></div>
		        <div class="col-md-4">
		            <?php if($message = Session::get('success')): ?>
		                <div class="alert alert-success alert-dismissible fade show" role="alert">
		                    <p><?php echo e($message); ?></p>
		                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
		                        <span aria-hidden="true">&times;</span>
		                    </button>
		                </div>
		            <?php endif; ?>
		        </div>
	    	</div>  

		    <div class="reciept area">
				<!-- header_area start -->
				<div class="row">
				    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="title">							
							<img src="<?php echo e(asset('front_end')); ?>/assets/img/logo.jpg" alt="" />
							<p>Student Tuition Fee Apps</p>
						</div>

						<button onclick="window.print()">Print this page</button>
					</div>
				</div>		
				<!-- header_area end -->
		
			<form action="/charge" method="post" id="payment-form">
                	<?php echo csrf_field(); ?>
                <div class="row">
					<div class="col-md-12 col-sm-12">
			 		
					<h6 style="margin-bottom: 30px;">Student Information</h6>

						<div class="form-group row">
						    <label class="col-md-2 col-sm-2 control text-left" for="">Name of the  Student </label>
						   
							<div class="col-md-10 col-sm-10">
								<input style="text-transform: capitalize;" name="student_name" type="text" value="<?php echo e($views->student_name); ?>" class="form-control text-money field_width" readonly="readonly"/>
							</div>
						</div>

						<div class="form-group row">
						    <label class="col-md-2 col-sm-2 control text-left" for="">ID Number(9 digits) </label>
						   
							<div class="col-md-10 col-sm-10">
								<input name="student_id" type="text" value="<?php echo e($views->student_id); ?>" class="form-control text-money field_width" readonly="readonly"/>
							</div>
						</div>

						<div class="form-group row">
						    <label class="col-md-2 col-sm-2 control text-left" for="">Program & Batch </label>
						   
							<div class="col-md-10 col-sm-10">
								<input style="text-transform: capitalize;" name="program_batch" type="text" value="<?php echo e($views->program_batch); ?>" class="form-control text-money field_width" readonly="readonly"/>
							</div>
						</div>		
					</div>	
				</div>


				<div class="row">
					<div class="col-md-12 col-sm-12">
						<br/>
						<h6 style="margin-bottom: 30px;">Payment Detailes</h6>

                        <table class="table table-bordered table-striped">
                        	<thead>
	                            <tr>
	                                <th>S/N</th>                                             
	                                <th>Payment Type</th>                         	         
	                                <th>Select Option</th>  	                       
	                                <th>Late Fine</th>
	                                <th>Total Amount</th>   
	                            </tr>
                            </thead>

                            <tbody>                      

                            	<?php
                            		$i = 1
                            	?>
                            	
                            	<?php
                            		$total = 0;
                            	?>
                            	
                            	<tr>
                            		<td><?php echo e($i++); ?></td>
                            		<td><?php echo e($views->payment_type); ?></td>                        
                            		<td><?php echo e($views->payment_val); ?></td>                           
                            		<td>Tk <?php echo e($views->late_fine); ?></td>
                            		<td>
                            			<?php
		                            		$total += $views->amount;
		                            	?>
                            			Tk <?php echo e($views->amount); ?>

                            		</td>
                            	</tr>                     

                            	<tr>
                            		<td colspan="3"></td>
                            		<td><strong>Total</strong></td>
                            		<td>
                            			<strong>Tk <?php echo e($total); ?></strong>
                            		</td>
                            	</tr>
                            	
                            </tbody>
                        </table>
                    </div>                               

				    <div class="form-row">
					    <label for="card-element">
					      Credit or debit card
					    </label>
					    <div id="card-element">
					      <!-- A Stripe Element will be inserted here. -->
					    </div>

					    <!-- Used to display form errors. -->
					    <div id="card-errors" role="alert"></div>
					    <button type="submit" class="btn btn-success" style="margin-bottom: 40px;">Submit Payment</button>
				    </div>
				  </div>

				</form>

			</div>
		</div>
	</section>	

	<script>
        // Create a Stripe client.
        document.getElementById('total').value = localStorage.getItem('total');
		var stripe = Stripe('<?php echo e(config('services.stripe.key')); ?>');

		// Create an instance of Elements.
		var elements = stripe.elements();

		// Custom styling can be passed to options when creating an Element.
		// (Note that this demo uses a wider set of styles than the guide below.)
		var style = {
		  base: {
		    color: '#32325d',
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

		// Create an instance of the card Element.
		var card = elements.create('card', 'options', {style: style});

		// Add an instance of the card Element into the `card-element` <div>.
		card.mount('#card-element');

		// Handle real-time validation errors from the card Element.
		card.on('change', function(event) {
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

		  stripe.createToken(card).then(function(result) {
		    if (result.error) {
		      // Inform the user if there was an error.
		      var errorElement = document.getElementById('card-errors');
		      errorElement.textContent = result.error.message;
		    } else {
		      // Send the token to your server.
		      stripeTokenHandler(result.token);
		    }
		  });
		});

		// Submit the form with the token ID.
		function stripeTokenHandler(token) {
		  // Insert the token ID into the form so it gets submitted to the server
		  var form = document.getElementById('payment-form');
		  var hiddenInput = document.createElement('input');
		  hiddenInput.setAttribute('type', 'hidden');
		  hiddenInput.setAttribute('name', 'stripeToken');
		  hiddenInput.setAttribute('value', token.id);
		  form.appendChild(hiddenInput);

		  // Submit the form
		  form.submit();
		}
    </script>
</body>
</html>
<?php /**PATH E:\laragon\www\p400\resources\views/stripe.blade.php ENDPATH**/ ?>