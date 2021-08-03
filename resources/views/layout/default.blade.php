<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDoList</title>
  <link rel="stylesheet" href="{{ asset('../../css/reset.css') }}">
</head>
<style>
  body {
    background-color: #000080;
  }
  .todolist {
    background-color: white;
    width: 70%;
    margin: 15%;
    border-radius: 15px;
  }
  h1 {
    padding: 20px;
  }
</style>
<body>
  <div class="todolist">
    <h1>Todo List</h1>
    <div class="content">
    @yield('content')
    </div>
  </div>
</body>
</html>