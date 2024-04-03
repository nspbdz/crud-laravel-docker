<!DOCTYPE html>
<html>
<head>
 <title>CRUD </title>
</head>
<body>
 
 <h3>Data </h3>
 
 <a href="/place/create"> + Tambah data Baru</a>
 
 <br/>
 <br/>
 
 <table border="1">
 <tr>
 <th>Nama</th>
 <th>Opsi</th>
 </tr>
 @foreach($data as $p)
 <tr>
 <td>{{ $p->name }}</td>
 <td>
    <button>
    <a href="/place/edit/{{ $p->id }}">Edit</a>

    </button>
 |
 <form action="{{ route('destroy', ['id' => $p->id]) }}" method="POST">
 @method('DELETE')
 @csrf
 <button type="submit">Delete</button>               
</form>
 <!-- <a href="/place/hapus/{{ $p->id }}">Hapus</a> -->
 </td>
 </tr>
 @endforeach
 </table>
 
 
</body>
</html>