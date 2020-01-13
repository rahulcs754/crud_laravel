<h4>Create New Hobbies</h4>
<form action="/hobby" method="post">
    @csrf
    Title<br>
    <input type="text" name="title">
    <br>
    Description<br>
    <input type="text" name="description" >
    <br>
    <input type="submit" value="submit">

</form>

<a href="/">back</a>