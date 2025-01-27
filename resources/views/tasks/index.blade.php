<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #444;
        }

        .success-message {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid green;
            background-color: #d4edda;
            color: #155724;
            border-radius: 4px;
        }

        a.create-task-link {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        a.create-task-link:hover {
            background-color: #0056b3;
        }

        .table-container {
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            white-space: nowrap;
        }

        th {
            background-color: #007bff;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
        }

        td {
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            word-wrap: break-word;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #eaf4ff;
        }

        td.description-column {
            max-width: 100%;
        }

        .operations {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        form.delete-form,
        a.edit-link {
            display: inline-block;
            margin: 0;
        }

        form input[type="submit"],
        a.edit-link {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: all 0.3s ease;
        }

        form input[type="submit"] {
            background-color: #dc3545;
            color: white;
        }

        form input[type="submit"]:hover {
            background-color: #c82333;
        }

        a.edit-link {
            background-color: #28a745;
            color: white;
            text-decoration: none;
        }

        a.edit-link:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <h1>Tasks</h1>

    @if (session()->has('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('tasks.create') }}" class="create-task-link">Create New Task</a>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th class="description-column">Description</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td class="description-column">{{ $task->description }}</td>
                        <td class="operations">
                            <a href="{{ route('tasks.edit', $task->id) }}" class="edit-link">Edit</a>
                            <form method="POST" action="{{ route('tasks.delete', $task->id) }}" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
