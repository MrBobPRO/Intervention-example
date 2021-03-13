<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <h3>Upload file</h3>

   <form action="/upload_file" method="POST" enctype="multipart/form-data">
      @csrf
      
      <input type="file" name="file">
      <br><br><br>
      <button type="submit">Отправить</button>
   </form>

</body>
</html>