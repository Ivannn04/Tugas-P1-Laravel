<!DOCTYPE html>
<html>
<head>
    <title>Daftar Genre</title>
</head>
<body>
    <h2>Daftar Genre</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
        </tr>
        @foreach($genres as $g)
        <tr>
            <td>{{ $g['id'] }}</td>
            <td>{{ $g['nama'] }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ url('/author') }}">Lihat Data Author</a>
</body>
</html>
