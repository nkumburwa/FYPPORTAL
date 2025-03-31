<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
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
        .container {
            max-width: 600px;
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
            text-align: center;
        }
        .form-label {
            text-align: left;
            display: block;
            font-weight: bold;
        }
        .form-control, .form-select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin-bottom: 15px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        .btn-primary { background: #28a745; }
        .btn:hover {
            transform: translateY(-3px);
            opacity: 0.8;
        }
        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Registration</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('student.register') }}">
            @csrf
            <label class="form-label">Registration Number:</label>
            <input type="text" name="student_reg_number" class="form-control" required>

            <label class="form-label">First Name:</label>
            <input type="text" name="student_first_name" class="form-control" required>

            <label class="form-label">Last Name:</label>
            <input type="text" name="student_last_name" class="form-control" required>

            <label class="form-label">Gender:</label>
            <select name="student_gender" class="form-select">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label class="form-label">Email:</label>
            <input type="email" name="student_email" class="form-control" required>

            <label class="form-label">Phone Number:</label>
            <input type="text" name="student_phone_number" class="form-control" required>

            <label class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" required>

            <label class="form-label">Confirm Password:</label>
            <input type="password" name="password_confirmation" class="form-control" required>

            <button type="submit" class="btn btn-primary">Register</button>
            <a href="login">I already have an account! Login</a>
        </form>
    </div>
</body>
</html>
