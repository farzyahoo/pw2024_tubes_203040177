<?php

function koneksi()

{
  return mysqli_connect('localhost', 'root', '', 'pw2024_tubes_203040177');
}

function query($query)


{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if($error == 4) {
    // echo "<script>
    //         alert('pilih gambar terlebih dahulu');

    //         </script>";
    return 'nonsp.png';
  }

  // cek ekstensi file 

  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if(!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('yang anda pilih bukan gambar');

            </script>";
    return false;
  }

  // cek tipe file
  if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png'){
    echo "<script>
      alert('yang anda pilih bukan gambar');

      </script>";
    return false;
  }

  // ukuran file 
  // maksimal 5mb == 5000000
  if($ukuran_file > 5000000) {
    echo "<script>
    alert('ukuran gambar terlalu besar');

    </script>";
    return false;
  }

  // lolos dan siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid(); 
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;


  move_uploaded_file($tmp_file,'../php/assets/img/' . $nama_file_baru);

  return $nama_file_baru;


}

function tambah($data)

{
  $conn = koneksi();

  $gambar = upload();
  if(!$gambar) {
    return false;
  }

  $nama = htmlspecialchars($data['nama']);
  $merek = htmlspecialchars($data['merek']);
  $warna = htmlspecialchars($data['warna']);
  $deksripsi = htmlspecialchars($data['deksripsi']);
  $harga = htmlspecialchars($data['harga']);
  // $gambar = htmlspecialchars($data['gambar']);
  // upload gambar
  

  $query = "INSERT INTO
              barang
            VALUES
            (null, '$gambar', '$nama', '$merek', '$warna', '$deksripsi', '$harga');
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  // menghapus gambar di folder img 
  $b = query("SELECT * FROM barang WHERE id = $id");
  if($b['gambar'] != 'nonsp.png') {
    unlink('../php/assets/img/' . $b['gambar']);
  }

  mysqli_query($conn, "DELETE FROM barang WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $gambar_lama = htmlspecialchars($data['gambar_lama']);
  $nama = htmlspecialchars($data['nama']);
  $merek = htmlspecialchars($data['merek']);
  $warna = htmlspecialchars($data['warna']);
  $deksripsi = htmlspecialchars($data['deksripsi']);
  $harga = htmlspecialchars($data['harga']);
  

  $gambar = upload();
   if (!$gambar) {
    return false;
   }


   if ($gambar == 'nonsp.png') {
    $gambar = $gambar_lama;
   }



  $query = "UPDATE barang SET
              gambar = '$gambar',
              nama = '$nama',
              merek = '$merek',
              warna = '$warna',
              deksripsi = '$deksripsi',
              harga  = '$harga'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM barang
              WHERE 
            nama LIKE '%$keyword%' OR
            merek LIKE '%$keyword%'
          ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data) 

{
  $conn = koneksi();
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek username
  if($user = query("SELECT * FROM user WHERE username = '$username'")) {
// cek password
    if (password_verify($password, $user['password'])) {
      $_SESSION['login'] = true;

    header("Location: index.php");
    exit;
      
    }

  } 
    return [
      'error' => true,
      'pesan' => 'username / password salah!'
    ];
}


function registrasi($data) 
{
  $conn = koneksi();


  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_escape_string($conn, $data['password1']);
  $password2 = mysqli_escape_string($conn, $data['password2']);



// jika username dan paswword kosong
  if(empty($username) || empty($password2) || empty($password2)) {

    echo "<script>
             alert('username / password tidak boleh kosong');
            document.location.href = 'registrasi.php';
          </script>";

          return false;
  }

  // jika usernam sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    
    echo "<script>
            alert('username sudah terdaftar');
            document.location.href = 'registrasi.php';
          </script>";

          return false;
  }

  if ($password1 !== $password2) {
    
    echo "<script>
            alert('konfirmasi password salah');
            document.location.href = 'registrasi.php';
          </script>";

          return false;
  }

  // jika password < 5 digit
  if (strlen($password1) < 5) {
     
    echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
          </script>";

          return false;
  }

  // jika usernam dan password sudah sesaui
  // enskripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user
            VALUES
            (null, '$username', '$password_baru')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($error));
  return mysqli_affected_rows($conn);
}


