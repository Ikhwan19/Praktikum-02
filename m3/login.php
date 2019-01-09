<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
    <div class="loginBox">
      <img src=".jpg" class="user">
      <h1>Log In Here</h1>
  
    <form action = "variabel_hasil.php" method="post" onSubmit="validasi()">
Nama : <input type="text" name="nama" id="nama"> <br>
Email : <input type = "text" name ="email" id="email"> <br>
<input type = "submit" name ="submit" value = "Tampilkan">

  </div>
  </body>
  <script type="text/javascript">
    function validasi(){
      var nama = document.getElementById('nama').value;
    var email = document.getElementById('email').value;

    if (nama != "" && email != ""){
      return true;
    }
    else{
      alert ('isi form terlebih dahulu')
    }
    }
  </script>
</html>
