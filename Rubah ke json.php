    <?php 
	header("Access-Control-Allow-Origin: *");
    //Koneksi database MySQL
    $koneksi = mysqli_connect("localhost","u778759434_awp2","ik2KYYC6NC","u778759434_uas") 
        or die("Error ".mysqli_error($koneksi));
    //Mengambil data pada table dari database MySQL
    $sql = "select * from user_login";
    $result = mysqli_query($koneksi, $sql) 
        or die("Error in Selecting " . mysqli_error($koneksi));
    //Membuat array
    $user_login = array();
    while($row = mysqli_fetch_assoc($result))
    {
      $user_login[] = $row;
    }
    //Menampilkan konversi data pada tabel identitas ke format JSON
    echo json_encode($user_login);
	
    //close the db connection
    mysqli_close($koneksi);
    ?>
