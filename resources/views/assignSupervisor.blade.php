<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Reset the margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Verdana', sans-serif;
            background-color: #181818;
            color: #ddd;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 270px;
            height: 100%;
            background: linear-gradient(180deg, #3a3a3a, #222);
            color: #fff;
            padding-top: 50px;
            position: fixed;
            transition: 0.4s ease-in-out;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.3);
        }

        .sidebar h4 {
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 40px;
            color: #f39c12;
            font-weight: bold;
            text-transform: uppercase;
        }

        .sidebar a {
            display: block;
            padding: 15px 25px;
            color: #bbb;
            font-size: 1.1rem;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #16a085;
            color: white;
            transform: scale(1.05);
        }

        .sidebar a.active {
            background-color: #1abc9c;
            color: white;
        }

        .sidebar a:active {
            background-color: #1abc9c;
            color: white;
        }

        /* Content Section */
        .content {
            margin-left: 270px;
            padding: 50px 40px;
            flex: 1;
            background-color: #2b2b2b;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        /* Heading Styling */
        h2 {
            font-size: 2.8rem;
            text-align: center;
            color: #f39c12;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 30px;
            animation: fadeIn 1s ease-out forwards;
        }

        /* Form Styling */
        .form-container {
            background: #34495e;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.6s ease-out forwards;
        }

        .form-container h3 {
            font-size: 2rem;
            color: #f39c12;
            text-align: center;
            margin-bottom: 20px;
            animation: fadeIn 1.2s ease-out forwards;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1.1rem;
            color: #f1f1f1;
            margin-bottom: 10px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #f0f0f0;
            color: #333;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border: 2px solid #1abc9c;
            box-shadow: 0 0 5px rgba(26, 188, 156, 0.5);
        }

        /* Button Styling */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            font-size: 1.1rem;
            color: white;
            background-color: #16a085;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
            text-align: center;
        }

        .btn:hover {
            background-color: #1abc9c;
            transform: scale(1.05);
        }

        .btn-danger {
            background-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        /* Button Container */
        .btn-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 30px;
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
                transform: translateY(40px);
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
    <div class="sidebar">
        <h4>Admin Panel</h4>
        <a href="#assignSupervisor" class="active">Assign Supervisor</a>
        <a href="department">Add Department</a>
        <a href="faculty">Add Faculty</a>
        <a href="campus">Add Campus</a>
        <a href="admin" class="btn btn-primary btn-container">Back</a>
        <a href="adminlogin" class="btn btn-danger btn-container">Logout</a>
    </div>

    <div class="content">
        <h2>Admin Dashboard</h2>
        <div class="form-container">
            <h3>Assign Supervisor To Student</h3>
            <form id="assignForm">
                <div class="form-group">
                    <label>Student Registration Number</label>
                    <input type="text" required>
                </div>
                <div class="form-group">
                    <label>Supervisor Email</label>
                    <input type="email" required>
                </div>
                <div class="form-group">
                    <label>Department Code</label>
                    <input type="text" required>
                </div>
                <div class="form-group">
                    <label>Faculty Code</label>
                    <input type="text" required>
                </div>
                <div class="form-group">
                    <label>Campus Code</label>
                    <input type="text" required>
                </div>
                <div class="btn-container">
                    <button type="submit" class="btn">Assign</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("assignForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Supervisor assigned successfully!");
        });
    </script>
</body>
</html>
