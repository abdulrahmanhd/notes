@extends('app')

@section('content')
<h3>all delete</h3>
			
<div class="container">
<a href="pages">pages </a>


			<div class="form-control">
					<div class="col-xl-8"> 
						 are you sure data
					</div>
			</div>


</div>


	<div class="container">
		<form class="form-control">

			<div class="container">			
					<button href="../../pages/{{ $page->id }}/deleteall" class="btn btn-danger" >delet all</button>
						<a href="../../pages" class="btn btn-danger">cancel</a>

			</div>			
		</form>
	</div>
<!-- 					<div class="col-xl-4">
						<a href="#" class="btn btn-danger" type="submit">edit</a>
						<a href="#" class="btn btn-danger" type="submit">delete</a>
					</div>	 -->
@endsection