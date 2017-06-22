<h1>Edit</h1>
<form method="post">
	{{ csrf_field() }}
	<input type="text" name="description" placeholder="{{$TodoEntry->description}}" required>
	<button>submit</button>
</form>

<h1>Delete</h1>
<form method="post" action="/delete/{{$TodoEntry->id}}">
	{{ csrf_field() }}
	<button>submit</button>
</form>