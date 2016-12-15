<!DOCTYPE html>
<html>
	<head>
		<title>
			baca data json dari data encoding Sari
		</title>
	</head>
	<body>
		<div id="demo"></div>
	</body>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript">
			var source = "http://randiraju.pe.hu/Rubah%20ke%20json.php";
			$.getJSON(source, function(data){
				$("#demo").append("<table border='1'>");
				$("#demo table").append("<tr><td>No.</td><td>ID Pegawai</td><td>Nama</td><td>Alamat</td><td>Masa Kerja</td><td>Status</td><td>Jml Anak</td></tr>");
				$.each(data, function(i,user){
					$("#demo table").append(
						"<tr><td>" + (i + 1) + ". " + "</td><td>" + user.id_pegawai + "</td>" +
						"<td>" + user.nama +  "</td>" +
						"<td>" + user.alamat +  "</td>" +
						"<td>" + user.masa_kerja +  "</td>" +
						"<td>" + user.status +  "</td>" +
						"<td>" + user.jml_anak +  "</td></tr>"
					);
				});
				$("#demo").append("</table>");
			});
		</script>
</html>