<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Project Proposal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: white;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function validateForm() {
            let inputs = document.querySelectorAll('input, textarea, select');
            for (let input of inputs) {
                if (input.value.trim() === '') {
                    alert('Please fill all fields before submitting.');
                    return false;
                }
            }
            return true;
        }
    </script>
</head>
<body>

<h2>Submit Your Project Proposal</h2>

<form action="{{ route('projects.store') }}" method="POST" onsubmit="return validateForm()">
    @csrf
    
    <div class="form-group">
        <label for="project_code">Project Code</label>
        <input type="text" id="project_code" name="project_code" required>
    </div>

    <div class="form-group">
        <label for="project_name">Project Name</label>
        <input type="text" id="project_name" name="project_name" required>
    </div>

    <div class="form-group">
        <label for="project_problems">Project Problems</label>
        <textarea id="project_problems" name="project_problems" required></textarea>
    </div>

    <div class="form-group">
        <label for="project_solutions">Project Solutions</label>
        <textarea id="project_solutions" name="project_solutions" required></textarea>
    </div>

    <div class="form-group">
        <label for="project_abstract">Project Abstract</label>
        <textarea id="project_abstract" name="project_abstract" required></textarea>
    </div>

    <div class="form-group">
        <label for="project_dissertation">Project Dissertation</label>
        <textarea id="project_dissertation" name="project_dissertation" required></textarea>
    </div>

    <div class="form-group">
        <label for="project_source_codes">Project Source Codes (GitHub/LinkedIn)</label>
        <input type="text" id="project_source_codes" name="project_source_codes" required>
    </div>

    <div class="form-group">
        <label for="department_code">Department</label>
        <select id="department_code" name="department_code" required>
            <option value="">Select Department</option>
            @foreach($departments as $department)
                <option value="{{ $department->department_code }}">{{ $department->department_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="student_reg_number">Student Registration Number</label>
        <select id="student_reg_number" name="student_reg_number" required>
            <option value="">Select Student Registration Number</option>
            @foreach($students as $student)
                <option value="{{ $student->student_reg_number }}">{{ $student->student_reg_number }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Submit Proposal</button>
</form>

</body>
</html>