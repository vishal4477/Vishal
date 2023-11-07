<h1>Student-Form</h1>
<form action="{{url('/SavaData')}}" method="post">
    @csrf
   Name:- <input type="text"name="name">
   @if($errors->has('name'))
   {{$errors->first('name')}}
   @endif
   <br><br>
   Email:- <input type="text"name="email">
   @if($errors->has('email'))
   {{$errors->first('email')}}
   @endif
   <br><br>
    Category:-<input type="text"name="category">
    @if($errors->has('category'))
    {{$errors->first('category')}}
    @endif
    <br><br>
    <button type="submit">AddData</button>
</form>