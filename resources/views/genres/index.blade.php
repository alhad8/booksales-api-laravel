<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Genre</title>
</head>
<body>
    <h1>Daftar Genre Buku</h1>
    
    <a href="/">Kembali ke Home</a> | 
    <a href="/authors">Lihat Daftar Author</a>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $genre)
            <tr>
                <td>{{ $genre['id'] }}</td>
                <td>{{ $genre['name'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>