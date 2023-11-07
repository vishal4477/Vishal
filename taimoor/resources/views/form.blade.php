<form action="" action="post">
    @csrf
    Name<input type="text" name="name"><br><br>
    Email<input type="text" name="email"><br><br>
    Password<input type="text" name="password"><br><br>
    Address<input type="text" name="address"><br><br>
    <input type="submit" value="submit">
</form>
@if(isset($data))
@foreach($data as $item) 
{{$item}}
@endforeach
@endif