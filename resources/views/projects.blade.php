<!DOCTYPE html>
<html>
<head>
    <title>All Projects</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 14px 20px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: 500;
        }

        a:hover {
            text-decoration: underline;
        }

        .actions a {
            margin-right: 10px;
        }

        .actions a:last-child {
            color: #dc3545;
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                position: sticky;
                top: 0;
                background-color: #007bff;
            }

            td {
                padding: 10px;
                border-bottom: 1px solid #ddd;
            }

            tr {
                margin-bottom: 15px;
            }

            .actions {
                display: flex;
                flex-direction: row;
                gap: 10px;
            }
        }
    </style>
</head>
<body>

<h2>All Projects</h2>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Deadline</th>
            <th>Link</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <div style="text-align: right; margin: 10px 20px;">
    <button onclick="window.location.href='{{ route('logout') }}'"
            style="padding: 8px 16px; background-color: rgb(59, 10, 234); color: white; border: none; border-radius: 5px; cursor: pointer;">
        Logout
    </button>
</div>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{ $project->project_name }}</td>
                <td>{{ $project->project_date }}</td>
                <td>{{ $project->project_deadline }}</td>
                <td><a href="{{ $project->project_link }}" target="_blank">Open</a></td>
                <td class="actions">
                    <a href="/edit-project/{{ $project->id }}">Edit</a> </td>
                                    <td><a href="/delete-project/{{ $project->id }}" onclick="return confirm('Project Delete successfully')">Delete</a></td>

            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
