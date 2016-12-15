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
			var source = "http://randiraju.pe.hu/rubah%20ke%20XML%202.php";
			$.ajax({
				url : source,
				method : 'GET',
				success : function(xml){
						$("#demo").append("<table border='1'>");
						$("#demo table").append("<thead><tr><td>No.</td><td>ID Pegawai</td><td>Nama</td><td>Alamat</td><td>Masa Kerja</td><td>Status</td><td>Jml Anak</td></tr></thead><tbody></tbody>");
						$(xml).find('tbkaryawan').each(function(i){
							var row = $(this);
							$("#demo table tbody").append(
								"<tr><td>"+(i+1)+"</td><td>" + row.find('id_pegawai').text() + "</td>" +
								"<td>" + row.find('nama').text() +  "</td>" +
								"<td>" + row.find('alamat').text() +  "</td>" +
								"<td>" + row.find('masa_kerja').text() +  "</td>" +
								"<td>" + row.find('status').text() +  "</td>" +
								"<td>" + row.find('jml_anak').text() +  "</td></tr>"
							);
						});
						$("#demo").append("</table>");
				},
				error : function(data){
					alert(data);
				}
			});
		</script>
</html>