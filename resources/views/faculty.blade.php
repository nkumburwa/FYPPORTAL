<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
            color: white;
            position: fixed;
        }
        .sidebar h4 {
            text-align: center;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
            width: 100%;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            margin-top: 10px;
        }
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
        .btn-warning {
            background-color: #ffc107;
            color: black;
        }
        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4>Admin Panel</h4>
        <a href="#assignSupervisor">Assign Supervisor</a>
        <a href="department">Add Department</a>
        <a href="faculty">Add Faculty</a>
        <a href="campus">Add Campus</a>
        <a href="admin" class="btn btn-success">Back</a>
        <a href="adminlogin" class="btn btn-danger">Logout</a>
    </div>

    <div class="content">
        <h2>Admin Dashboard</h2>
        
        <div class="form-container">
            <h3>Add Faculty</h3>
            <form id="facultyForm">
                <div class="form-group">
                    <label>Faculty Code</label>
                    <input type="text" id="facultyCode" required>
                </div>
                <div class="form-group">
                    <label>Faculty Name</label>
                    <input type="text" id="facultyName" required>
                </div>
                <div class="form-group">
                    <label>Department Name</label>
                    <input type="text" id="departmentName" required>
                </div>
                <button type="submit" class="btn btn-warning">Add</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("facultyForm").addEventListener("submit", function(event) {
            event.preventDefault();
            const facultyCode = document.getElementById("facultyCode").value;
            const facultyName = document.getElementById("facultyName").value;
            const departmentName = document.getElementById("departmentName").value;
            
            if (facultyCode && facultyName && departmentName) {
                alert("Faculty added successfully!");
                document.getElementById("facultyForm").reset();
            } else {
                alert("Please fill in all fields.");
            }
        });
    </script>
</body>
</html>