<!DOCTYPE html>
<html>
<head>
    <title>Approved Files</title>

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

    <h2>Approved Files</h2>

    <form>

        <label>Project Name</label>
        <input type="text" name="project_name" required>

        <label>Select File</label>
        <input type="file" name="project_file" required>

        <label>Approval Status</label>
        <select name="approval_status">
            <option value="Pending">Pending</option>
            <option value="Approved">Approved</option>
            <option value="Rejected">Rejected</option>
        </select>

        <label>Remarks</label>
        <textarea name="remarks"></textarea>

        <button type="submit">Submit File</button>

    </form>

</div>

</body>
</html>
