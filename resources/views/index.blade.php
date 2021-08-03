@extends('layout.default')
<style>
  form {
    display: flex;
    justify-content: space-between;
  }
  input:first-of-type {
    display: inline-block;
    width: 70%;
    height: 40px;
    border: solid 1px #dcdcdc;
    border-radius: 5px;
    margin: 0 20px 0 20px;
  }
  input:last-of-type {
    display: inline-block;
    height: 40px;
    width: 10%;
    background-color: white;
    color: #ee82ee;
    border: solid 2px #ee82ee;
    border-radius: 5px;
    margin-right: 20px;
  }
</style>


@section('content')
<form action="/todo/create" method="POST">
<input type="text" name="content">
<input type="submit" value="追加">
</form>
@foreach($items as $item)
<p>{{$item}}</p>
@endforeach
@endsection