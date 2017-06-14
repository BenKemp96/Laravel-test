<a href="/create">Add</a>

<ul>
@foreach ($entries as $entry)
    <li><a href="/update">{{$entry->description}}</a></li>
@endforeach
</ul>