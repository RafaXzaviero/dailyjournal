<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
	header("location:admin.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['user'];
  
//menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['pass']);

//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
//database executes the statement
  $stmt->execute();
  
//menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
//mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

//check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
//jika ada, simpan variable username pada session
  $_SESSION['username'] = $row['username'];

//mengalihkan ke halaman admin
  header("location:admin.php");
} else {
//jika tidak ada (gagal), alihkan kembali ke halaman login
  header("location:login.php");
}

//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login BNHA</title>
    <link 
      rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc2sjUZnzNsJIlInbsCsj7fSIVVl3ZJLmX9w&s"
    />
    <link 
      rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
      crossorigin="anonymous"
    />
  </head>

  <body class="bg-warning">
    <div class="container mt-4 pt-2 ">
      <div class="row justify-content-center align-items-center vh-100">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
          <div class="card login-card rounded-4">
            <div class="card-body">
              <div class="text-center mb-4">
                <i class="bi bi-person-circle h1 text-primary"></i>
                <h4 class="mt-3">My Hero Academia</h4>
                <p class="text-muted">Login to your account</p>
                <hr />
              </div>
              <form action="" method="post">
                <div class="mb-3">
                  <input
                    type="text"
                    name="user"
                    class="form-control rounded-4"
                    placeholder="Username"
                    required
                  />
                </div>
                <div class="mb-4">
                  <input
                    type="password"
                    name="pass"
                    class="form-control rounded-4"
                    placeholder="Password"
                    required
                  />
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary rounded-4">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
            <p class="text-muted">© 2024 Rafael Albion Savero</p>
          </div>
        </div>
      </div>
    </div>

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
      crossorigin="anonymous"
    ></script>
  </body>
</html>


<?php
//set variable username dan password dummy
$username = "admin";
$password = "123456";

//check apakah ada request dengan method POST yang dilakukan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//tampilkan isi dari variable array POST menggunakan perulangan
    foreach($_POST as $key => $val){
        echo $key . " : " . $val ."<br>";
    } 

//check apakah username dan password yang di POST sama dengan data dummy
    if($_POST['user'] == $username AND $_POST['passw'] == $password){
        echo "Username dan Password Benar";
    }else{
        echo "Username dan Password Salah";
    }
};
?>

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"
  ></script>
  </body>
</html>
<?php
}
?>
