<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            transition: 0.3s;
        }
        button:hover {
            background: #0056b3;
        }
        .btn-secondary {
            background: #6c757d;
        }
        .btn-secondary:hover {
            background: #5a6268;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Project</h2>
    <form id="editForm">
        <label for="project_name">Project Name</label>
        <input type="text" id="project_name" required>

        <label for="project_problems">Project Problems</label>
        <textarea id="project_problems" required></textarea>

        <label for="project_solutions">Project Solutions</label>
        <textarea id="project_solutions" required></textarea>

        <label for="project_abstract">Project Abstract</label>
        <textarea id="project_abstract" required></textarea>

        <label for="project_dissertation">Project Dissertation</label>
        <textarea id="project_dissertation" required></textarea>

        <label for="project_source_codes">Project Source Codes (Link)</label>
        <input type="url" id="project_source_codes" required>

        <button type="submit">Update Project</button>
        <button type="button" class="btn-secondary" onclick="cancelEdit()">Cancel</button>
    </form>
</div>

<script>
    document.getElementById("editForm").addEventListener("submit", function(event) {
        event.preventDefault();
        alert("Project updated successfully!");
    });
    
    function cancelEdit() {
        window.location.href = "student_dashboard.html";
    }
</script>

</body>
</html>
