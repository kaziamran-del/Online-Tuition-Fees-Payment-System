@include('front_end.pages.card_btn')

<form class="form-inline" action="{{ route('carts.store') }}" method="post">
	@csrf

	<input type="hidden" name="term_fine" value="{{$data->term_fee}}" />
	<input type="hidden" name="st_id" value="{{$data->student_id}}" />
	<button type="submit" class="btn btn-warning"><i class="fa fa-plus"></i> get payment</button>
</form>
