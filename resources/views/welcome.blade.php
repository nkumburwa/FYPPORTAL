<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Student Portal</title>
    <style>
        body {
            background: linear-gradient(to right, #141E30, #243B55);
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .welcome-container {
            text-align: center;
        }
        .card {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        .btn-success { background: #28a745; }
        .btn-secondary { background: #6c757d; }
        .btn-danger { background: #dc3545; }
        .btn:hover {
            transform: translateY(-3px);
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="card">
            <h1 id="greeting" class="mb-4"></h1>
            <p class="mb-4">This platform helps students submit project proposals, collaborate with supervisors, and manage academic progress efficiently.</p>
            <div>
                <a href="login" class="btn btn-success">Student</a>
                <a href="adminlogin" class="btn btn-secondary">Supervisor</a>
                <a href="adminlogin" class="btn btn-danger">Admin</a>
            </div>
        </div>
    </div>

    <script>
        function getGreeting() {
            let hours = new Date().getHours();
            if (hours < 12) return "Good Morning, Welcome to RP/FYP Portal!";
            else if (hours < 18) return "Good Afternoon, Welcome to RP/FYP Portal!";
            else return "Good Evening, Welcome to RP/FYP Portal!";
        }
        document.getElementById("greeting").innerText = getGreeting();
    </script>
</body>
</html>
