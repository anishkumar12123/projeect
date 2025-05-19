<!DOCTYPE html>
<html>
<head>
    <title>Add New Project</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .form-container {
            background-color: #ffffff;
            max-width: 500px;
            margin: 60px auto;
            padding: 40px 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #444;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px 14px;
            margin-bottom: 8px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="date"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>

<div class="form-container">
    <h2>Add New Project</h2>

    <form method="POST" action="/store-project">
        @csrf

        <label>Project Name:</label>
        <input type="text" name="project_name" value="{{ old('project_name') }}">
        @error('project_name')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label>Project Date:</label>
        <input type="date" name="project_date" value="{{ old('project_date') }}">
        @error('project_date')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label>Project Deadline:</label>
        <input type="date" name="project_deadline" value="{{ old('project_deadline') }}">
        @error('project_deadline')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label>Project Link:</label>
        <input type="text" name="project_link" value="{{ old('project_link') }}">
        @error('project_link')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <button type="submit">Add Project</button>
    </form>
</div>

</body>
</html>
