$(document).ready(function(){
	
   $(".header_right ul li").click(function(){
      $(".header_right ul li ul ").toggle();
  });

	   /* coupon */
    $('#coupon').keyup(function() {
          var v = $(this).val().replace(/\D/g, ''); // Remove non-numerics
          v = v.replace(/(\d{3})(?=\d)/g, '$1-'); // Add dashes every 3th digit
          $(this).val(v)
    });

     

     /* coupon-field */ 
    $('#coupon-id').keyup(function() {
          var v = $(this).val().replace(/\D/g, ''); // Remove non-numerics
          v = v.replace(/(\d{3})(?=\d)/g, '$1-'); // Add dashes every 3th digit
          $(this).val(v)
    });


    //alert
    //var msg = "{{Session::get('alert')}}";
    //var exist = "{{Session::has('alert')}}";
    //if(exist){
     // alert(msg);
   // }

  });


  
 