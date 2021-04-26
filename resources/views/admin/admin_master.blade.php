<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	 <!-- Title -->
	<title>@yield('page_title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	@include('admin.include.link')
</head>	
<body>
	
	<div class="admin">
        <div class="row">
    		<div class="col-lg-12">
    			@guest
				@else
					@include('admin.include.sidebar')
                    @include('admin.include.header_nav')
				@endguest
            	@yield('admin_content')           
            </div>
            <!-- /.col-lg-12 -->
        </div> 
        <!-- /.row -->    
    </div>
    <!-- /#page-wrapper -->
	
	@include('admin.include.scripts')
</body>	
</html>