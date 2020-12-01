<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<ul>



    @foreach ($tasks as $task)
<li><a href="tasks/show/{{$task->id}}"><h3>{{$task->title}}</h3></a></li>        
    @endforeach


    {{-- @foreach ($tasks as $key => $task)
    <li><a href="{{'task/show/'. $key}}">  <h3>   {{$task}}    </h3></a></li>        
    @endforeach --}}

</ul>

  
</body>
</html>