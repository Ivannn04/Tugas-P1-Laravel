<!DOCTYPE html>
<html>
<head>
    <title>Daftar Author</title>
</head>
<body>
    <h2>Daftar Author</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama Author</th>
        </tr>
        @foreach($authors as $a)
        <tr>
            <td>{{ $a['id'] }}</td>
            <td>{{ $a['nama'] }}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ url('/genre') }}">Lihat Data Genre</a>
</body>
</html>
