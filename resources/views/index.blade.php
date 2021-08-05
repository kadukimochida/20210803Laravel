@extends('layout.default')
<style>
  form {
    border: none;
    display: flex;
    justify-content: space-between;
  }
  .form_content {
    display: inline-block;
    width: 70%;
    height: 40px;
    border: solid 1px #dcdcdc;
    border-radius: 5px;
    margin: 0 20px 0 20px;
  }
  .btn {
    display: inline-block;
    height: 40px;
    width: 20%;
    background-color: white;
    color: #ee82ee;
    border: solid 2px #ee82ee;
    border-radius: 5px;
  }
  table {
    width: 100%;
  }
</style>


@section('content')
<form action="/todo/create" method="POST">
@csrf
<input class="form_content" type="text" name="content">
<input class="btn"type="submit" value="追加">
</form>
<table>
  <form action="" method="POST">
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach($items as $item)
  <form action="" method="POST">
    @csrf
  <tr>
    <td>{{$item->created_at}}</td>
    <td><input type="text" name="content" value="{{$item->content}}"></td>
    <td><input type="submit" formaction="/todo/update" value="更新"></td>
    <td><input type="submit" formaction="/todo/delete" value="削除"></td>
  </tr>
  @endforeach
  </form>
</table>
@endsection