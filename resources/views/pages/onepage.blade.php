@extends('app')

@section('content')
<h3>all notes</h3>
			
<div class="container">
<h3>{{ $page->title }}</h3>
<a href="../pages">pages </a>
@foreach($page->notes as $note)

			<div class="form-control">
					<div class="col-xl-8"> 
						{{ $note->text }}
					</div>
					<div class="col-xl-4">
						<a href="../notes/{{$note->id}}/edit" class="btn btn-danger" type="submit">edit</a>
						<a href="../notes/{{$note->id}}/delete" class="btn btn-danger" type="submit">delete</a>
					</div>	
			</div>
@endforeach

</div>


	<div class="container">
		<form class="form-control" method="POST" action="{{$page->id}}/notesstore">
		{{ csrf_field() }}
			<div class="container">			

					<input name="ftext" type="text" value="{{ old('ftext') }}"  placeholder="Add New notes . . . ."/>
					<button class="btn btn-danger" type="submit">Add New notes</button>

			</div>			
		</form>
	</div>
@if(count($errors))
<ul>
	@foreach($errors->all() as $error)
	<li>
		{{$error}}
	</li>
	@endforeach
</ul>
@endif
@endsection