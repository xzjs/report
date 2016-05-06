<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>汇报情况</title>
</head>
<body>
{{$name}},这是今天的工作汇报<br>
<ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task->name }}
        </li>
    @endforeach
</ul>
</body>
</html>

