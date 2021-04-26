@extends('admin.admin_master')

@section('regfee')
    active
@endsection

@section('page_title')
    Admin Panel | Update Registration Fee
@endsection

@section('admin_content')
<div class="data_table">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 align="left" class="head">Update Registration Fee</h4>
            </div> 
        </div>

    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            	@if(count($errors) > 0)
            	<div class="alert alert-danger">
            		<ul>
            			@foreach($errors->all() as $error)
            				<li>{{$error}}</li>
            			@endforeach
            		</ul>
            	</div>
            	@endif

            	@if(\Session::has('success'))
            	<div class="alert alert-success">
            		<p>{{ \Session::get('success') }}</p>
            	</div>
            	@endif
            	
            	<form method="post" action="{{route('update.registration.data')}}">
            		{{csrf_field()}}

                    <input type="hidden" value="{{$regFees->id}}" name="id" />

                        <div class="form-group">
                            English <input type="text" name="english" class="from-control extra"  value="{{$regFees->english}}" style="margin-left: 64px;"/>
                        </div> 

                        <div class="form-group">
                            CSE <input type="text" name="cse" class="from-control extra"  value="{{$regFees->cse}}" style="margin-left: 82px;"/>
                        </div>

                        <div class="form-group">
                            EEE <input type="text" name="eee" class="from-control extra"  value="{{$regFees->eee}}" style="margin-left: 82px;"/>
                        </div>

                        <div class="form-group">
                            BBA <input type="text" name="bba" class="from-control extra"  value="{{$regFees->bba}}" style="margin-left: 82px;"/>
                        </div>

                        <div class="form-group">
                            Law & justice <input type="text" name="law_justice" class="from-control extra"  value="{{$regFees->law_justice}}" style="margin-left: 27px;"/>
                        </div>

                        <div class="form-group">
                            Economics <input type="text" name="economics" class="from-control extra"  value="{{$regFees->economics}}" style="margin-left: 42px;"/>
                        </div>

                		<div class="form-group">
                			<input type="submit" value="Update" class="btn btn-sm btn-primary" />
                		</div>
            	</form>
            </div>
    	</div>          
    </div> 
</div> 
@endsection   
    
    
