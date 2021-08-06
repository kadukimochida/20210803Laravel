@extends('layout.default')
<style>
  li {
    list-style: none;
  }
  form:first-of-type {
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
    margin: 0 20px;
  }
  .btn {
    display: inline-block;
    height: 40px;
    width: 10%;
    background-color: white;
    color: #ee82ee;
    border: solid 2px #ee82ee;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    margin: 0 20px;
  }
  .btn:hover {
    color: white;
    background-color: #ee82ee;
  }
  .update,
  .delete {
    display: block;
    width: 70%;
    margin: auto;
    border-radius: 5px;
    background-color: white;
    cursor: pointer;
    font-weight: bold;
  }
  .update {
    border: solid 2px #f08080;
    color: #f08080;
  }
  .update:hover {
    background-color: #f08080;
    color: white;
  }
  .delete {
    border: solid 2px #00ffff;
    color: #00ffff;
  }
  .delete:hover {
    background-color: #00ffff;
    color: white;
  }
  tr {
    height: 35px;
  }
  .text {
    display: block;
    border: solid 1px #dcdcdc;
    border-radius: 5px;
    width: 80%;
    margin: auto;
  }
  p {
    text-align: center;
  }
  .table-item {
    padding: 20px 0;
  }
  .content-item {
    width: 90%;
    margin: auto;
    padding-bottom: 20px;
  }
  table {
    width: 100%;
  }
</style>


@section('content')
@if(count($errors) > 0)
<ul>
  @foreach($errors->all() as $error)
  <li>・{{$error}}</li>
  @endforeach
</ul>
@endif
<form action="/todo/create" method="POST">
@csrf
<input class="form_content" type="text" name="content">
<input class="btn"type="submit" value="追加">
</form>
<div class="content-item">
  <table>
    <tr>
      <th><p class="table-item">作成日</p></th>
      <th><p class="table-item">タスク名</p></th>
      <th><p class="table-item">更新</p></th>
      <th><p class="table-item">削除</p></th>
    </tr>
    @foreach($items as $item)
    <form action="" method="POST">
      @csrf
    <tr>
      <td><p>{{$item->created_at}}</p></td>
      <td><input type="hidden" name='id' value="{{$item->id}}">
      <input class="text" type="text" name="content" value="{{$item->content}}"></td>
      <td><input class="update" type="submit" formaction="/todo/update" value="更新"></td>
      <td><input class="delete" type="submit" formaction="/todo/delete" value="削除"></td>
    </tr>
    </form>
    @endforeach
  </table>
</div>
@endsection