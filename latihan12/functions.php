<?php

       //KONEKSI KE DATABASE
       $conn = mysqli_connect("localhost", "root", "", "phpdasar");

        //Relasi ke tebel mahasiswa
        function query($query) {

            global $conn;
            $result = mysqli_query($conn, $query);
            $rows = [];
            while($row = mysqli_fetch_assoc($result)) {

                $rows[] = $row;

            }
            return $rows;

        }


//-----------------------------------------------------------------------------------------------------------------------------


        //UNTUK HALAMAN TAMBAH.PHP HAPUS.PHP UBAH.PHP
        //SESI CRUD (Create, Read, Update, Delete)
        //----------------------------------------

        //FUNCTION TAMBAH DATA (CREATE)
        function tambah($data){

        //Ambil data dari tiap elemen di dalam form
        global $conn;
        $nama = htmlspecialchars ($data["nama"]);
        $nim = htmlspecialchars ($data["nim"]);
        $email = htmlspecialchars ($data["email"]);
        $jurusan = htmlspecialchars ($data["jurusan"]);
        
        //Upload Gambar
        $gambar = upload();
        if( !$gambar ){

            return false;
        }


        //Query insert data
        $query = "INSERT INTO mahasiswa
                  VALUES('','$nama','$nim','$email','$jurusan','$gambar')
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

        }




        //FUNCTION UPLOAD GAMBAR (UPLOAD)
        function upload() {

            $namaFile = $_FILES['gambar']['name'];
            $ukuranFile = $_FILES['gambar']['size'];
            $error = $_FILES['gambar']['error'];
            $tmpName = $_FILES['gambar']['tmp_name'];

            //Cek apakah tidak ada gambar yang di upload
            if($error === 4) {

                echo "<script>
                        alert('Silahkan Masukan Gambar Terlebih dahulu');
                      </script>";

                return false;

            }


            //Cek yang di upload adalah gambar
            $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
            $ekstensiGambar = explode('.', $namaFile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));

            if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {

                echo "<script>
                         alert('Yang Anda Masukan Bukan File Gambar');
                      </script>";

                return false;

            }


            //Cek jika ukuran gambar terlalu besar
            if($ukuranFile > 1000000){

                echo "<script>
                        alert('File Gambar Yang Anda Masukan Terlalu Besar');
                      </script>";

                 return false;

            }


            //Generate nama gambar baru
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;


            //Lolos pengecekan, gambar siap di upload
            move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

            return $namaFileBaru;

        }






        //FUNCTION HAPUS DATA (DELETE)
        function hapus($id){

            global $conn;
            mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

            return mysqli_affected_rows($conn);

        }





        //FUNCTION UBAH DATA (UPDATE)
        function ubah($data){

        //Ambil data dari tiap elemen di dalam form
        global $conn;

        $id = $data["id"];
        $nama = htmlspecialchars ($data["nama"]);
        $nim = htmlspecialchars ($data["nim"]);
        $email = htmlspecialchars ($data["email"]);
        $jurusan = htmlspecialchars ($data["jurusan"]);
        $gambarLama = htmlspecialchars ($data["gambarLama"]);


        //Cek apakah user pilih gambar baru atau tidak
        if( $_FILES['gambar']['error'] === 4 ){

            $gambar = $gambarLama;

        }else{

            $gambar = upload();

        }
        

        //Query insert data
        $query = "UPDATE mahasiswa SET
                    nama = '$nama',
                    nim = '$nim',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar' 
                    
                    WHERE id = $id ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

        }





        //FUNCTION CARI DATA (READ)
        function cari($keyword) {

            $query = "SELECT * FROM mahasiswa 
                        WHERE nama LIKE '%$keyword%' OR
                    nim LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%'
                    ";

            return query($query);

        }


//-----------------------------------------------------------------------------------------------------------------------------


        //UNTUK HALAMAN REGISTER.PHP
        //PEMBUATAN FUNCTION UNTUK REGISTER
        function registrasi($data){

            global $conn;


            $username = strtolower(stripslashes ($data["username"]));
            $password = mysqli_real_escape_string($conn, $data["password"]);
            $password2 = mysqli_real_escape_string($conn, $data["password2"]);


            //Cek username sudah digunakan atau belum
            $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");

            if(mysqli_fetch_assoc($result)) {

                echo "<script>
                
                        alert('Username Sudah Terdaftar');
                
                      </script>";

                return false;

            }


            //Cek konfirmasi password
            if($password !== $password2){

                echo "<script>
                
                        alert('Konfirmasi password tidak sesuai');
                
                      </script>";

                return false;

            }


            //Enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);


            //Tambahkan user baru ke dalam database
            mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

            return mysqli_affected_rows($conn);


        }


//-----------------------------------------------------------------------------------------------------------------------------


        //HALAMAN INDEX.PHP (LIMIT)
        //PAGINATION (KONFIGURASI)

        //Data yang ditampilkan perhalaman-nya
        $jumlahDataPerHalaman = 3;

        //Menghitung jumlah data yang ada pada tabel mahasiswa
        $jumlahData = count(query ("SELECT * FROM mahasiswa") );

        //Membagi dari seluruh jumlah data tabel mahasiswa dengan jumlah data yang ditampilakn perhalaman
        $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

        //Menampilkan halaman yang aktif/show saat pertama kali user masuk
        $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

        //halaman 2, untuk menampilkan data halaman dua dst. Logika akan dimulai tergantung user ada di halaman berapa
        //Default-nya halaman 1
        //Logika perkalian ini di hitung berdasarkan nomor index yang defaultnya di mulai dari 0.
        $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;






?>