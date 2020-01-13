<form action="/hobby/{{$hobby->id}}" method="post">
    @csrf
    @method('PUT')
    Title<br>
    <input type="text" name="title" value="{{$hobby->title}}">
    <br>
    Description<br>
    <input type="text" name="description" value="{{$hobby->description}}" >
    <br>
    <input type="submit" value="update">

</form>

<a href="/">back</a>