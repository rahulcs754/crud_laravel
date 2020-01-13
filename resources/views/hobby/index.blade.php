Create New Hobbies  <a href="/hobby/create">create</a> (Click this link)
<hr> 
@foreach($hobbies as $hobby)
<li>{{ $hobby->title }}  / <a href="/hobby/{{ $hobby->id }}">Details</a> / <a href="/hobby/{{$hobby->id}}/edit">Edit</a> 

<form style="display: inline;" action="/hobby/{{$hobby->id}}" method="post">
@csrf
@method('DELETE')
<input type="submit" value="delete">
</form>
</li>
@endforeach
