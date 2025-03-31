<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #1f1f1f;
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            background-color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .navbar-brand {
            color: #f39c12;
            font-size: 1.8rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: fadeIn 1.2s ease-in-out;
        }

        .navbar a {
            color: #ddd;
            text-decoration: none;
            font-size: 1rem;
            margin-left: 20px;
            transition: color 0.3s ease;
        }

        .navbar a:hover {
            color: #f39c12;
        }

        /* Jumbotron Section */
        .jumbotron {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 80px 40px;
            border-radius: 10px;
            margin-top: 20px;
            animation: slideIn 1.5s ease-out;
        }

        .jumbotron h1 {
            font-size: 3.5rem;
            letter-spacing: 3px;
            font-weight: bold;
        }

        .jumbotron p {
            font-size: 1.3rem;
            margin-top: 20px;
        }

        .jumbotron .btn {
            background-color: #f39c12;
            color: #fff;
            font-size: 1.1rem;
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-top: 30px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        .jumbotron .btn:hover {
            background-color: #e67e22;
        }

        /* Features Section */
        .feature-container {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .feature {
            text-align: center;
            background-color: #34495e;
            padding: 40px 30px;
            border-radius: 12px;
            width: 250px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeUp 1s ease-in-out;
        }

        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
        }

        .feature i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #f39c12;
        }

        .feature h3 {
            font-size: 1.4rem;
            color: #fff;
        }

        .feature p {
            font-size: 1rem;
            color: #ecf0f1;
            margin-top: 10px;
        }

        /* Footer Section */
        footer {
            background-color: #333;
            color: #ddd;
            text-align: center;
            padding: 20px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: #f39c12;
            text-decoration: none;
        }

        footer a:hover {
            color: #e67e22;
        }

        /* Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="#" class="navbar-brand">Admin Panel</a>
        <div>
            <a href="home">🏠 Home</a>
            <a href="admin">📊 Dashboard</a>
            <a href="#">🔓 Logout</a>
        </div>
    </div>

    <!-- Jumbotron Section -->
    <div class="jumbotron">
        <h1 class="display-4">Welcome to the Admin Panel!</h1>
        <br>
        
        <a class="btn" href="admindash" role="button">💼 Manage Dashboard</a>
    </div>

    <!-- Features Section -->
<div class="feature-container">
    <div class="feature">
        <i class="fas fa-chalkboard-teacher"></i>
        <h3>📚 Assign Supervisors</h3>
        <p>Assign qualified supervisors to guide students through their academic journey.</p>
    </div>
    <div class="feature">
        <i class="fas fa-user-shield"></i>
        <h3>👨‍💻 User Management</h3>
        <p>Easily manage user accounts with intuitive tools for quick updates and settings.</p>
    </div>
    <div class="feature">
        <i class="fas fa-file-alt"></i>
        <h3>📊 Reports & Analytics</h3>
        <p>Generate comprehensive reports to analyze student progress and department performance.</p>
    </div>
</div>


    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Admin Panel. All rights reserved.</p>
        <p><a href="#">📧 Contact Us</a></p>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
