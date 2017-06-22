<a href="/create">Add</a>

<ul>
@foreach ($entries as $entry)
    <li><a href="/edit/{{$entry->id}}">{{$entry->description}}</a></li>
@endforeach
</ul>