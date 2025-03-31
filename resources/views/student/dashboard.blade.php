<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            display: flex;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 260px;
            height: 100vh;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 20px;
            position: fixed;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
        }
        .sidebar h4 {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 12px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .content {
            margin-left: 280px;
            padding: 20px;
            width: 100%;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn-danger { background-color: #dc3545; }
        .btn-primary { background-color: #007bff; }
        .btn-warning { background-color: #06f029; color: #000; }
        .btn:hover { opacity: 0.8; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #007bff;
            color: white;
        }
        .alert {
            padding: 10px;
            color: white;
            margin: 10px 0;
            border-radius: 5px;
        }
        .alert-success { background-color: #28a745; }
        .alert-danger { background-color: #dc3545; }
        .search-box {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .search-box input {
            padding: 10px;
            width: 70%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this project?');
        }
    </script>
</head>
<body>
    <div class="sidebar">
        <h4><i class="fas fa-user-graduate"></i> Student Dashboard</h4>
        <a href="#"><i class="fas fa-home"></i> Home</a>
        <a href="{{ route('projects.create') }}"><i class="fas fa-file-upload"></i> Submit Proposal</a>
        <a href="#"><i class="fas fa-folder"></i> My Projects</a>
        
        <form action="{{ route('student.logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-danger w-100"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
    </div>
    <div class="content">
        <h2>Welcome, {{ $student->student_first_name }} {{ $student->student_last_name }}</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif
        <h4><i class="fas fa-search"></i> Search Projects</h4>
        <form action="{{ route('projects.search') }}" method="GET" class="search-box">
            <input type="text" name="q" placeholder="Search by project name or keyword">
            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
        </form>
        
        <h4><i class="fas fa-list"></i> Your Projects</h4>
        <table>
            <thead>
                <tr>
                    <th>Project Code</th>
                    <th>Project Name</th>
                    <th>Department</th>
                    <th>Problems</th>
                    <th>Solutions</th>
                    <th>Abstract</th>
                    <th>Dissertation</th>
                    <th>Source Codes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                    <tr>
                        <td>{{ $project->project_code }}</td>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->department->department_name }}</td>
                        <td>{{ $project->project_problems }}</td>
                        <td>{{ $project->project_solutions }}</td>
                        <td>{{ Str::limit($project->project_abstract, 50) }}</td>
                        <td>{{ $project->project_dissertation }}</td>
                        <td><a href="{{ $project->project_source_codes }}" target="_blank"><i class="fas fa-code"></i> View Code</a></td>
                        <td>
                            <a href="{{ route('projects.edit', $project->project_code) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('projects.destroy', $project->project_code) }}" method="POST" class="d-inline" onsubmit="return confirmDelete();">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="9">No projects submitted yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>