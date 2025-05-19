<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        label {
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
            color: #333;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit Project</h2>
    <form method="POST" action="/update-project/{{ $project->id }}">
        @csrf
        <label>Project Name:</label>
        <input type="text" name="project_name" value="{{ $project->project_name }}">

        <label>Project Date:</label>
        <input type="date" name="project_date" value="{{ $project->project_date }}">

        <label>Project Deadline:</label>
        <input type="date" name="project_deadline" value="{{ $project->project_deadline }}">

        <label>Project Link:</label>
        <input type="text" name="project_link" value="{{ $project->project_link }}">

        <button type="submit">Update Project</button>
    </form>
</div>

</body>
</html>
