<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>perpustakaan undip</title>
<link rel="stylesheet" href="s">
<style>
  body {
    background-color: #FFD700; /* Warna biru muda */
  }
</style>
</head>
<body>
<center>

<form action="login_proses.php" method="post">
  <h2>Perpustakaan UNDIP</h2>
  <hr>
  <div class="imgcontainer">
    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/2/2d/Undip.png/180px-Undip.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <br>
    <input type="text" placeholder="Enter Username" name="name" required><br>

    <br>
    <input type="password" placeholder="Enter Password" name="pw" required><br>
    <br>
    <button type="submit">Login</button><br>
</center>
</form>

</body>
</html>
