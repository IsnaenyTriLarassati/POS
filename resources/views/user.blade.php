{{-- <!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->user_id }}</td>
            <td>{{ $d->username }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->level_id }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html> --}}


{{-- Praktikum 2.1 – Retrieving Single Models -J4 --}}
{{-- <body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td>
        </tr>
        <tr>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->level_id }}</td>
        </tr>
    </table>
</body> --}}

{{-- Praktikum 2.3 – Retreiving Aggregrates -J4--}}
<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1><b>Data User</b></h1>
    <table border="1">
        <tr>
            <td><b>Jumlah Pengguna</b></td>
        </tr>
        <tr>
            <td>{{ $jumlah }}</td>
        </tr>
    </table>
</body>
</html>


