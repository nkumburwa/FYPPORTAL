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
            height: 100vh;
            background-color: #f7f7f7;
            transition: all 0.3s ease;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            height: 100%;
            background-color: #2d3e50;
            color: white;
            padding-top: 30px;
            position: fixed;
            transition: all 0.3s ease;
        }

        .sidebar h4 {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: #f7f7f7;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px;
            text-decoration: none;
            font-size: 1.1rem;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .sidebar a:hover {
            background-color: #1abc9c;
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
            width: 100%;
            background-color: #f7f7f7;
            transition: all 0.3s ease;
        }

        /* Heading styling */
        h2 {
            color: #333;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Form container */
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            animation: slideUp 0.5s ease-out forwards;
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
            border-radius: 8px;
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
        <a href="#assignSupervisor">Assign Supervisor</a>
        <a href="department">Add Department</a>
        <a href="faculty">Add Faculty</a>
        <a href="campus" class="active">Add Campus</a>
        <div class="btn-container">
            <a href="admin" class="btn">Back</a>
            <a href="adminlogin" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Admin Dashboard</h2>

        <div class="form-container">
            <h3>Add Campus</h3>
            <form id="campusForm">
                <div class="form-group">
                    <label for="campusID">Campus ID</label>
                    <input type="text" id="campusID" required>
                </div>
                <div class="form-group">
                    <label for="campusName">Campus Name</label>
                    <input type="text" id="campusName" required>
                </div>
                <div class="form-group">
                    <label for="facultyCode">Faculty Code</label>
                    <input type="text" id="facultyCode" required>
                </div>
                <button type="submit" class="btn">Add</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("campusForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Campus added successfully!");
        });
    </script>
</body>
</html>
