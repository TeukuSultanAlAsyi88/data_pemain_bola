<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Data Pemain Bola' }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
            min-height: 100vh;
            color: #1f2937;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            border-radius: 18px;
            padding: 18px 24px;
            margin-bottom: 25px;
            color: white;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.18);
        }

        .navbar h1 {
            font-size: 28px;
            margin-bottom: 6px;
        }

        .navbar p {
            font-size: 14px;
            opacity: 0.9;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .page-header h2 {
            font-size: 28px;
            color: #111827;
        }

        .page-header p {
            color: #6b7280;
            margin-top: 6px;
            font-size: 14px;
        }

        .btn {
            display: inline-block;
            padding: 12px 18px;
            border-radius: 12px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-success {
            background: #16a34a;
            color: white;
        }

        .btn-success:hover {
            background: #15803d;
        }

        .btn-warning {
            background: #f59e0b;
            color: white;
        }

        .btn-warning:hover {
            background: #d97706;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
        }

        .btn-danger:hover {
            background: #b91c1c;
        }

        .btn-secondary {
            background: #64748b;
            color: white;
        }

        .btn-secondary:hover {
            background: #475569;
        }

        .table-wrapper {
            overflow-x: auto;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 16px;
        }

        table thead {
            background: #1e3a8a;
            color: white;
        }

        table th, table td {
            padding: 16px 14px;
            text-align: left;
        }

        table tbody tr {
            border-bottom: 1px solid #e5e7eb;
            transition: 0.2s;
        }

        table tbody tr:hover {
            background: #eff6ff;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #374151;
        }

        .form-group input {
            width: 100%;
            padding: 14px 14px;
            border: 1px solid #d1d5db;
            border-radius: 12px;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .form-group input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
        }

        .detail-box {
            display: grid;
            gap: 18px;
            margin-top: 20px;
        }

        .detail-item {
            background: #f8fafc;
            border-left: 6px solid #2563eb;
            padding: 18px;
            border-radius: 14px;
        }

        .detail-item h4 {
            color: #6b7280;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .detail-item p {
            font-size: 20px;
            font-weight: bold;
            color: #111827;
        }

        .empty-state {
            text-align: center;
            padding: 30px;
            color: #6b7280;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            border-radius: 18px;
            padding: 20px;
        }

        .stat-card h3 {
            font-size: 14px;
            color: #475569;
            margin-bottom: 10px;
        }

        .stat-card p {
            font-size: 30px;
            font-weight: bold;
            color: #1d4ed8;
        }

        .alert {
            padding: 14px 16px;
            border-radius: 12px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
        }

        .alert-danger {
            background: #fee2e2;
            color: #991b1b;
        }

        ul.error-list {
            margin-top: 8px;
            padding-left: 18px;
        }

        @media (max-width: 768px) {
            .container {
                width: 94%;
            }

            .page-header h2 {
                font-size: 22px;
            }

            .navbar h1 {
                font-size: 22px;
            }

            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="navbar">
            <h1>⚽ Data Pemain Bola</h1>
            <p>Selamat Datang di Aplikasi Manajemen Pemain Bola</p>
        </div>

        <div class="card">
            @yield('content')
        </div>

    </div>
</body>
</html>