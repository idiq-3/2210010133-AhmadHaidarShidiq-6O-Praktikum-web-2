@php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=export_user.xls");
@endphp

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Export Users - Laravel Excel</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h1 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>{{ $title }}</h1>
    <p><strong>Tanggal:</strong> {{ $date }}</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
