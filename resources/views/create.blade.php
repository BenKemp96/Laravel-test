<h1>Create</h1>
<form method="post">
	{{ csrf_field() }}
	<input type="text" name="description" required>
	<button>submit</button>
</form>