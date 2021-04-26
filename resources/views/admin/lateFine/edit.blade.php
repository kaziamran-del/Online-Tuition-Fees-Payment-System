@extends('admin.admin_master')

@section('lateFine')
    active
@endsection

@section('page_title')
    Admin Panel | Update Late Fine
@endsection

@section('admin_content')
<div class="data_table">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 align="left" class="head">Update  Late Fine</h4>
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
            	
            	<form method="post" action="{{route('update.lateFine.data')}}">
            		{{csrf_field()}}

                    <input type="hidden" value="{{$lateFines->id}}" name="id" />

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                January <input type="text" name="jan" class="from-control extra"  value="{{$lateFines->jan}}" style="margin-left: 29px;"/>
                            </div>

                            <div class="form-group">
                                February <input type="text" name="feb" class="from-control extra"  value="{{$lateFines->feb}}" style="margin-left: 20px;"/>
                            </div>

                            <div class="form-group">
                                March <input type="text" name="mar" class="from-control extra"  value="{{$lateFines->mar}}" style="margin-left: 40px;"/>
                            </div>

                            <div class="form-group">
                                April <input type="text" name="apr" class="from-control extra"  value="{{$lateFines->apr}}" style="margin-left: 50px;"/>
                            </div>

                            <div class="form-group">
                                May <input type="text" name="may" class="from-control extra"  value="{{$lateFines->may}}" style="margin-left: 53px;"/>
                            </div>

                            <div class="form-group">
                                June <input type="text" name="jun" class="from-control extra"  value="{{$lateFines->jun}}" style="margin-left: 49px;"/>
                            </div>
                        </div>    

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                July <input type="text" name="jul" class="from-control extra"  value="{{$lateFines->jul}}" style="margin-left: 60px;"/>
                            </div>

                            <div class="form-group">
                                August <input type="text" name="aug" class="from-control extra"  value="{{$lateFines->aug}}" style="margin-left: 40px;"/>
                            </div>

                            <div class="form-group">
                                September <input type="text" name="sep" class="from-control extra"  value="{{$lateFines->sep}}" style="margin-left: 16px;"/>
                            </div>

                            <div class="form-group">
                                October <input type="text" name="oct" class="from-control extra"  value="{{$lateFines->oct}}" style="margin-left: 34px;"/>
                            </div>

                            <div class="form-group">
                                November <input type="text" name="nov" class="from-control extra"  value="{{$lateFines->nov}}" style="margin-left: 21px;"/>
                            </div>

                            <div class="form-group">
                                December <input type="text" name="dec" class="from-control extra"  value="{{$lateFines->dec}}" style="margin-left: 21px;"/>
                            </div>
                        </div> 
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
    
    
