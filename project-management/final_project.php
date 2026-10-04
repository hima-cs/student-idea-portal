<!DOCTYPE html>
<html>
<head>
    <title>Final Project Information</title>

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
            background: #0d6efd;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Final Project Information</h2>

    <form>

        <label>Project Name</label>
        <input type="text" name="project_name" required>

        <label>Project Description</label>
        <textarea name="project_description" required></textarea>

        <label>Team Members</label>
        <textarea name="team_members" required></textarea>

        <label>Project Status</label>
        <select name="status">
            <option value="Completed">Completed</option>
            <option value="Submitted">Submitted</option>
            <option value="Under Review">Under Review</option>
        </select>

        <label>Final Submission Date</label>
        <input type="date" name="submission_date" required>

        <button type="submit">Submit Final Project</button>

    </form>

</div>

</body>
</html>
