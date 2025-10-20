<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <meta charset="utf-8">
    <style>
        body {
            background: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 30px auto;
            max-width: 900px;
            background: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 5px #ccc;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #e0e0e0;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background: #f5f6fa;
        }

        h2 {
            margin-top: 0;
        }

        .navbar {
            background: #1a2236;
            padding: 8px 16px;
            margin-bottom: 20px;
        }

        .navbar a {
            color: #fff;
            text-decoration: underline;
            margin-right: 10px;
            font-size: 15px;
        }
    </style>
    <style>
        /* ...existing code... */
        .pagination {
            display: flex;
            list-style: none;
            padding-left: 0;
        }

        .pagination li {
            margin: 0 2px;
        }

        .pagination .page-link {
            padding: 4px 10px;
            border: 1px solid #ccc;
            color: #1a2236;
            background: #fff;
            text-decoration: none;
            border-radius: 3px;
        }

        .pagination .active .page-link {
            background: #1a2236;
            color: #fff;
            border-color: #1a2236;
        }

        .pagination svg {
            width: 16px !important;
            height: 16px !important;
            vertical-align: middle;
        }
    </style><link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <a href="/">Trang chủ</a>
            <a href="/products">Products</a>
        </div>
        @yield('content')
    </div>
</body>

</html>