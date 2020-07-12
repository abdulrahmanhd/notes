@extends('app')

@section('content')
<h3>All pages</h3>

	@foreach($allpages as $page)
<div class="container">
<a href="pages/{{$page->id}}">
		<div class="form-control  method="POST" action="pages/delete"">
				<div class="col-xl-8"> title :
					{{ $page->title }}
				</div>
				<div class="col-xl-4">
				<a href="pages/{{ $page->id }}/delete" class="btn btn-danger" type="submit">delete</a>
				</div>			

		</div>
</a>	
</div>

	@endforeach

	<div class="container">
		<form class="form-control" method="POST" action="pages/store">
		{{ csrf_field() }}
			<div class="container">			

					<input name="ftitle" type="text" placeholder="Add New Page . . . ."></input>
					<button class="btn btn-danger" type="submit">Add</button>

			</div>			
		</form>
	</div>

@endsection