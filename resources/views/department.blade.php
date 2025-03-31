<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            background-color: #f7f7f7;
            height: 100vh;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            height: 100%;
            background: linear-gradient(180deg, #6a11cb, #2575fc);
            color: white;
            padding-top: 30px;
            position: fixed;
            transition: all 0.3s ease;
        }

        .sidebar h4 {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 40px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .sidebar a {
            display: block;
            color: #ddd;
            text-decoration: none;
            padding: 15px 20px;
            margin: 10px;
            border-radius: 8px;
            font-size: 1.1rem;
            transition: 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #445c76;
            color: white;
            transform: translateX(10px);
        }

        .sidebar a.active {
            background-color: #1abc9c;
            color: white;
        }

        /* Content styling */
        .content {
            margin-left: 260px;
            padding: 30px;
            flex: 1;
            overflow-y: auto;
            background: #fafafa;
            box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.1);
        }

        /* Heading styling */
        h2 {
            color: #333;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-out forwards;
        }

        /* Form container */
        .form-container {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            animation: slideUp 0.6s ease-out forwards;
        }

        .form-container h3 {
            font-size: 2rem;
            color: #1abc9c;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Form group styling */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1.1rem;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            color: #333;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #1abc9c;
            outline: none;
            box-shadow: 0 0 5px rgba(26, 188, 156, 0.5);
        }

        /* Button styling */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            font-size: 1.1rem;
            color: white;
            background-color: #1abc9c;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #16a085;
            transform: scale(1.05);
        }

        /* Red button for logout */
        .btn-danger {
            background-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        /* Button container for centering buttons */
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        /* Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            0% {
                transform: translateY(30px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4>Admin Panel</h4>
        <a href="assignSupervisor" class="active">Assign Supervisor</a>
        <a href="department">Add Department</a>
        <a href="faculty">Add Faculty</a>
        <a href="campus">Add Campus</a>
        <div class="btn-container">
            <a href="admin" class="btn">Back</a>
            <a href="adminlogin" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Admin Dashboard</h2>

        <div class="form-container">
            <h3>Add Department</h3>
            <form id="departmentForm">
                <div class="form-group">
                    <label for="departmentCode">Department Code</label>
                    <input type="text" id="departmentCode" required>
                </div>
                <div class="form-group">
                    <label for="departmentName">Department Name</label>
                    <input type="text" id="departmentName" required>
                </div>
                <div class="form-group">
                    <label for="studentRegNumber">Student Reg Number</label>
                    <input type="text" id="studentRegNumber" required>
                </div>
                <button type="submit" class="btn">Add</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("departmentForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Department added successfully!");
        });
    </script>
</body>
</html>
