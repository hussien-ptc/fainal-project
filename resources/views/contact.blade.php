<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  {{-- <h2> Contact Us </h2>
  <h4> link !</h4> --}}
  {{-- @foreach ($tasks as $task)
   <ul>
       <li>{{$task}}</li>
   </ul>

  @endforeach --}}
   <ul>
       @foreach ($tasks as $index=>$task)
       <li>{{++$index}}</li>
       <li>{{$task}}</li>
       @endforeach
   </ul>
   <h1>{{$tasks['task-1']}}</h1>
