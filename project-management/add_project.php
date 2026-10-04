<! DOCTYPE html>
<html>
  <head>
    <title>And project Details</title>
    <sytle>
      body {
      font-family: Arial,sans-serif;
      blackground-color:
      padding: 30px;
      }
      .container {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 25px;
      border-radius: 10px;
      box-sizing: border-box;
      }
      textarea {
      heigth: 120px;
      }
      button {
      width: 100%;
      padding: 12px;
      background:
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      }
    </sytle>
  </head>
  <body>
    <div class="container">
      <h2>Add project details</h2>
      <form>
        <label>Project Title</label>
        <input type="text" name="project_title" required>
        <label>Project Description</label>
        <textarea> name="project_description" required></textarea>
        <label>Project Category</label>
        <select name="category">
          <option value="Technical">Technical</option>
          <option value="Non-Technical">Non-Technical</option>
          <option value="Research">Research</option>
        </select>
        <label>Team Members</label>

        <input type="text" name="team_members">

        <label>Project Status</label>

        <select name="status">

            <option value="Pending">Pending</option>

            <option value="Approved">Approved</option>

            <option value="In Progress">In Progress</option>

            <option value="Completed">Completed</option>

        </select>

        <button type="submit">Save Project Details</button>

    </form>

</div>

  </body>
</html>
