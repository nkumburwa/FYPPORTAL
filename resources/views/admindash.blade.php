<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #111;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: #add8e6;
            text-decoration: none;
            padding: 10px;
        }
        .navbar a:hover {
            color: #fff;
        }
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }
        .menu {
            display: flex;
            gap: 20px;
        }
        .container {
            padding: 20px;
        }
        .jumbotron {
            background-color: #111;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .features {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .feature-box {
            text-align: center;
            padding: 20px;
        }
        .feature-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #add8e6;
        }
        @media (max-width: 768px) {
            .menu {
                display: none;
                flex-direction: column;
            }
            .menu-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#">Admin Dashboard</a>
        <button class="menu-toggle" onclick="toggleMenu()">&#9776;</button>
        <div class="menu" id="menu">
            <a href="home">Home</a>
            <a href="admin">Manage</a>
            <a href="{{ url('/adminlogout') }}">Logout</a>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1>Welcome, {{ session('admin_name') }}</h1>
            <p>Manage users, assign supervisors, and generate reports.</p>
            <button class="btn" onclick="location.href='assignSupervisor'">Assign Supervisor to Student</button>
        </div>

        <div class="features">
            <div class="feature-box">
                <div class="feature-icon">&#128101;</div>
                <h3>Assign Supervisors</h3>
                <p>Assign supervisors to students.</p>
            </div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            if (menu.style.display === "flex") {
                menu.style.display = "none";
            } else {
                menu.style.display = "flex";
            }
        }
    </script>
</body>
</html>
