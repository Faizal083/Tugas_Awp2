<?php Header('Content-type: text/xml');
header("Access-Control-Allow-Origin: *"); 
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<xml>
<?php
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
?>
	<user_login>
	  <username><?php echo $row['username']; ?></username>
	  <password><?php echo $row['password']; ?></password>
	  <log_name><?php echo $row['log_name']; ?></log_name>
	  <no_hp><?php echo $row['no_hp']; ?></no_hp>
	  <alamat><?php echo $row['alamat']; ?></alamat>
	  <tgl_lahir><?php echo $row['tgl_lahir']; ?></tgl_lahir>
	</user_login> 
<?php
    }
?>
</xml>
