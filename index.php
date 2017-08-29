<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>crud</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="micrud.js"></script>
</head>
<body>

<div class="container">
<br>
<button class="btn btn-info" id="btnAdd">Nuevo</button>
<hr>
		<table class="table table-bordered" id="tblData">
		<thead>
			<tr>
				<td>id</td>
				<td>f</td>
				<td>h</td>
				<td>d</td>
				<td>u</td>
				<td>estado</td>
				<td>monto</td>
				<td>uS</td>
				<td>idCuentaContable</td>
				<td>num</td>
				<td>Accion</td>				
			</tr>
	</thead>
	<tbody id="tb">
		
	</tbody>
		</table>
</div>
	
</body>
</html>

<script>
	$(document).ready(function(){

		$.ajax({
			url:'json.json',
			dataType: 'json',
			type:'get',
			cache:false,
			success: function(data){
				var info = '';
				$(data.entidad).each(function(index,value){
					//console.log(value);
						info += '<tr>';
						info += '<td>'+value.id+'</td>';
						info += '<td>'+value.f.timezone+'</td>';
						info += '<td>'+value.h.date+'</td>';
						info += '<td>'+value.d+'</td>';
						info += '<td>'+value.u+'</td>';
						info += '<td>'+value.estado+'</td>';
						info += '<td>'+value.monto+'</td>';
						info += '<td>'+value.uS+'</td>';
						info += '<td>'+value.idCuentaContable+'</td>';
						info += '<td>'+value.num+'</td>';
						info += "<td></td>";
						info +='</tr>';
							
						$('#tb').append(info);
				});

			}
		});


	});
</script>
