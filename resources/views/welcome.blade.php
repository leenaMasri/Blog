<!DOCTYPE html>
<html>
<body>

    <ul>
       @foreach ($tasks as $task) 
            <li>{{$task}}</li>
        @endforeach
    </ul>


</body>
</html>