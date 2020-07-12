@extends('app')

@section('content')
<h3>all notes</h3>
			
<div class="container">
<a href="../pages">pages </a>


			<div class="form-control">
					<div class="col-xl-8"> 
						{{ $note->text }} بءئئئ ئئئئ ئئخقة 
					</div>
			</div>


</div>


	<div class="container">
		<form class="form-control" method="POST" action="update">
		{{ csrf_field() }}
			<div class="container">			

					<input name="fedit" type="text" value="{{ $note->text }}" placeholder="text notes . . . ."/>
					<button class="btn btn-danger" type="submit">Edit</button>
						<a href="notes/{{$note->id}}" class="btn btn-danger" type="submit">cancel</a>

			</div>			
		</form>
	</div>
<!-- 					<div class="col-xl-4">
						<a href="#" class="btn btn-danger" type="submit">edit</a>
						<a href="#" class="btn btn-danger" type="submit">delete</a>
					</div>	 -->
@endsection