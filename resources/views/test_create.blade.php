<!DOCTYPE html>
<html>
<head>
 <title> CRUD </title>
</head>
<body>
 
 <h3>Data </h3>
 
 <a href="/test"> Kembali</a>
 
 <br/>
 <br/>
 
 <form action="/test/store" method="post">
 {{ csrf_field() }}
 Name <input type="text" name="name" required="required"> <br/>
 <input type="submit" value="Simpan Data">
 </form>
 
</body>
</html>