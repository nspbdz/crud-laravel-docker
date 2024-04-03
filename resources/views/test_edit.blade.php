<!DOCTYPE html>
<html>
<head>
 <title>crud docker</title>
</head>
<body>
 
 <h3>Edit </h3>
 
 <a href="/test"> Kembali</a>
 
 <br/>
 <br/>
 
 <form action="/test/update" method="post">
 {{ csrf_field() }}
 <input type="hidden" name="id" value="{{ $data->id }}"> <br/>
 Nama <input type="text" required="required" name="name" value="{{ $data->name }}"> <br/>
 <input type="submit" value="Simpan Data">
 </form>
 
 
</body>
</html>