<!DOCTYPE html>
<html>
<body>

<ul>
    @foreach ($tasks as $task)
        <li>
            <a href="/tasks/{{$task->id}}">
                {{$task->body}}
            </a>

        </li> <!--body because now $tasks is an array of json objects-->

    @endforeach
</ul>


</body>
</html>