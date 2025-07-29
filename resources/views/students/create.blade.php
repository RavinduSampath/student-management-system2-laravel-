<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
</head>

<body>
    <h1>Add New Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        <button type="submit">Save</button>
    </form>
</body>

</html>
