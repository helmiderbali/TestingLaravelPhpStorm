<!doctype html>

<html>
<head>

</head>
<body>
    <h1>All Tasks</h1>
    @foreach($tasks as $task)
        <li>{{link_to("tasks/$task->id",$task->title)}}</li>
    @endforeach
</body>

</html>