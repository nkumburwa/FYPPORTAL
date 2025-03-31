<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #222;
            color: white;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            width: 100%;
            text-align: center;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .dashboard-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }
        .btn {
            padding: 15px 30px;
            font-size: 1.2rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>Admin Panel</h4>
        <a href="assignSupervisor">Assign Supervisor</a>
        <a href="department">Add Department</a>
        <a href="faculty">Add Faculty</a>
        <a href="campus">Add Campus</a>
        <a href="admindash" class="btn" style="background-color: green;">Back</a>
        <a href="adminlogin" class="btn" style="background-color: red;">Logout</a>
    </div>
    <div class="content">
        <h2>Admin Dashboard</h2>
        <div class="dashboard-buttons">
            <a href="assignSupervisor" class="btn">Assigned Supervisor (<span id="supervisorCount">2</span>)</a>
            <a href="department" class="btn">Add Department (<span id="departmentCount">4</span>)</a>
            <a href="faculty" class="btn">Add Faculty (<span id="facultyCount">6</span>)</a>
            <a href="campus" class="btn">Add Campus (<span id="campusCount">1</span>)</a>
        </div>
    </div>
    <script>
        let supervisorCount = 2;
        let departmentCount = 4;
        let facultyCount = 6;
        let campusCount = 1;

        function updateCounts() {
            document.getElementById("supervisorCount").textContent = supervisorCount;
            document.getElementById("departmentCount").textContent = departmentCount;
            document.getElementById("facultyCount").textContent = facultyCount;
            document.getElementById("campusCount").textContent = campusCount;
        }

        updateCounts();
    </script>
</body>
</html>