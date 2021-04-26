<link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>" />
<script src="https://js.stripe.com/v3/"></script>

    <form action="<?php echo e(url('charge')); ?>" method="post" id="payment-form">
        <div class="form-row">
            <input type="text" name="amount" placeholder="Enter Amount" />
            <input type="text" name="student_id" placeholder="Enter Student id" />
            <label for="card-element">
                Credit or debit card
            </label>
            <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
            </div>
         
            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button class="btn btn-sm btn-success">Submit</button>
        <?php echo e(csrf_field()); ?>

    </form>

<script>
    var publishable_key = '<?php echo e(env('pk_test_51HeLomHYVURiJ0ImhkYwKR4nQMDknJzicRbjVNz8mIJhABOXsyGrKOFD55att4pAx0T8MR1iYJzSWLFSbxoMz5Cq00SsHx94D5')); ?>';
</script>

<script src="<?php echo e(asset('/js/card.js')); ?>"></script><?php /**PATH E:\laragon\www\p400\resources\views/payment.blade.php ENDPATH**/ ?>