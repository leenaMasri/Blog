<!DOCTYPE html>
<html>
<body>

    <ul>
       @foreach ($tasks as $task)
            <li>{{$task->body}}</li> <!--body because now $tasks is an array of json objects-->

        @endforeach
    </ul>


</body>
</html>