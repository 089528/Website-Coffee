<?php 
// koneksi ke db
$koneksi = mysqli_connect("localhost", "root", "", "penelitian_ilmiah");

// dashboard
function query($query) {
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    $rows = [];

    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[]= $row;
    }
    return $rows;
}

// search 
function cari($data) {
    $query = "SELECT * FROM konten
                WHERE
            kategori LIKE '%$data%' OR
            judul LIKE '%$data%'
            ";
    return query($query);
}

// // kategori
// function kategori($data) {
//     $query = " SELECT * FROM konten
//  					WHERE	
//  				kategori LIKE '$data'
//  			";
//  	return query($query);
// }

// tambah konten
function konten($data) {
    global $koneksi;

    // ambil data konten
    $judul = htmlspecialchars($data["judul"]);
    $kategori = $data["kategori"];
    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $konten = $data["konten"];

    $query = "INSERT INTO konten
                VALUES
                ('','$judul', '$kategori','$gambar', '$konten')
             ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// upload gambar 
function upload() {
    $namaFile = $_FILES['img']['name'];
    $ukuranFile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpName = $_FILES['img']['tmp_name'];

    // cek file yang diupload gambar atau bukan
    $eksImgValid = ['jpg', 'jpeg', 'png'];
    
    $eksImg = explode('.', $namaFile);

    $eksImg = strtolower(end($eksImg));

    // if ( !in_array ($eksImg, $eksImgValid) ) {
    //     echo "<script>
    //             alert('Hai Admin, Mohon upload gambar / foto dengan format (jpeg, jpg, png) !');
    //         </script>";
    //     return false;
    // }

    // upload gambar
    $newNamaFile = uniqid();
    $newNamaFile .= '.';
    $newNamaFile .= $eksImg;
    move_uploaded_file($tmpName, "../../img/" . $newNamaFile);
    return $newNamaFile;
}

// ubah konten
function ubah($data) {
    global $koneksi;

    // ambil data konten
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $kategori = $data["kategori"];
    $oldImg = $data["oldImg"];

    if ( $_FILES['img']['error'] === 4 ) {
        $gambar = $oldImg;
    } else {
        $gambar = upload();
    }

    $konten = $data["konten"];
    $query = "UPDATE konten
                SET
                judul = '$judul',
                kategori = '$kategori',
                gambar = '$gambar',
                konten = '$konten'
               WHERE id = $id
             ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// hapus konten
function hapus($id) {
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM konten WHERE id = $id");

    return mysqli_affected_rows($koneksi);
}

// registrasi admin
function registrasi($data) {
    global $koneksi;

    $user = strtolower(stripslashes($data["username"]));
    $pass = mysqli_real_escape_string($koneksi, $data["password"]);
    $pass2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    // cek username sudah ada / belum
    $result = mysqli_query($koneksi, "SELECT username FROM admin WHERE username = '$user'");

    if(mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Username sudah tersedia');
              </script>";
        return false;
    }

    // cek konfirmasi password
    if ($pass !== $pass2) {
        echo "<script>
                alert ('Password tidak sesuai');
              </script>";
        return false;
    }

    // enkripsi password
    // ada dua parameter 1 password yg akan dienkripsi, 2 dengan algo apa password di enkripsi, gunakan default untuk algo acak
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    // tambahkan user baru ke db
    mysqli_query($koneksi, "INSERT INTO admin VALUES ('','$user','$pass')");

    return mysqli_affected_rows($koneksi);
}