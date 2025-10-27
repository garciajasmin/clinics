<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Clinic Transaction System')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background: #262345ff;
            color: #fff;
            padding: 20px;
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            padding: 12px;
            margin-bottom: 12px;
            background: #fff;
            color: #262345ff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .sidebar a i {
            margin-right: 8px;
        }

        .sidebar a:hover {
            background: #f1f1f1;
        }

        /* Content */
        .content {
            flex: 1;
            padding: 30px;
            background: #fafafa;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background: #262345ff;
            color: #fff;
        }

        table tr:nth-child(even) {
            background: #f9f9f9;
        }

        /* Form fields */
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: #333;
        }

        form input, 
        form select, 
        form textarea {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .btn-success {
            background: #28a745;
            color: #fff;
        }

        .btn-success:hover {
            background: #218838;
        }

        .btn-secondary {
            background: #007bff;
            color: #fff;
        }

        .btn-secondary:hover {
            background: #0056b3;
        }

        .btn-danger {
            background:#262345ff;
            color: #fff;
        }

        .btn-danger:hover {
            background: #262345ff;
        }

        form .btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Clinic System</h2>
        <a href="{{ route('patients.index') }}"><i class="fa fa-users"></i> Patients</a>
        <a href="{{ route('appointments.index') }}"><i class="fa fa-calendar-check"></i> Appointments</a>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
