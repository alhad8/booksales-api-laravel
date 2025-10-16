<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Author</title>
</head>
<body>
    <h1>Daftar Author Buku</h1>
    
    <a href="/">Kembali ke Home</a> | 
    <a href="/genres">Lihat Daftar Genre</a>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Author</th>
                <th>Bio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td>{{ $author['id'] }}</td>
                <td>{{ $author['name'] }}</td>
                <td>{{ $author['bio'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>