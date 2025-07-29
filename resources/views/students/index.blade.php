<!DOCTYPE html>
<html>

<head>
    <title>Students</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a,
        button {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <h1>Student List</h1>
    <a href="{{ route('students.create') }}"> Add Student</a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $index => $student)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}"> Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')"> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
