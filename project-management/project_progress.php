<!DOCTYPE html>
<html>
<head>
    <title>Project Progress</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #198754;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Project Progress</h2>

    <form>

        <label>Project Name</label>
        <input type="text" name="project_name" required>

        <label>Progress Percentage</label>
        <input type="number" name="progress" min="0" max="100" required>

        <label>Current Stage</label>
        <select name="stage">
            <option value="Planning">Planning</option>
            <option value="Development">Development</option>
            <option value="Testing">Testing</option>
            <option value="Completed">Completed</option>
        </select>

        <label>Progress Description</label>
        <textarea name="progress_description"></textarea>

        <button type="submit">Update Progress</button>

    </form>

</div>

</body>
</html>
