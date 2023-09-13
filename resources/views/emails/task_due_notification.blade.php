<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h1>Task Due Notification</h1>
    <p>Hello Customer,</p>
    <p>This is a reminder that your task "{{ $task->title }}" is due tomorrow.</p>
    <p>Task details:</p>
    <ul>
        <li>Title: {{ $task->title }}</li>
        <li>Description: {{ $task->description }}</li>
        <li>Due Date: {{ $task->due_date }}</li>
    </ul>
    <p>Thank you for using our task management system.</p>
</body>
</html>
