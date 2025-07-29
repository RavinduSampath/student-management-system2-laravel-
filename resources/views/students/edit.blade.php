<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
</head>

<body>
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $student->name }}"><br>
        Email: <input type="email" name="email" value="{{ $student->email }}"><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
