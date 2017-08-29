function Nuevo(){
	$("#tblData tbody").append(
		"<tr>"+
		"<td><input type='text' id='id' class='form-control'/></td>"+
		"<td><input type='text' id='time' class='form-control'/></td>"+
		"<td><input type='text' id='date' class='form-control'/></td>"+
		"<td><input type='text' id='d' class='form-control'/></td>"+
		"<td><input type='text' id='u' class='form-control'/></td>"+
		"<td><input type='text' id='estado' class='form-control'/></td>"+
		"<td><input type='text' id='monto' class='form-control'/></td>"+
		"<td><input type='text' id='uS' class='form-control'/></td>"+
		"<td><input type='text' id='idCuentaContable' class='form-control'/></td>"+
		"<td><input type='text' id='num' class='form-control'/></td>"+
		"<td><button class='btn btn-info btnSave'>Guardar</button><button class='btnDelete btn btn-danger'>Eliminar</button></td>"+
		"</tr>");
	
		$(".btnSave").bind("click", Grabar);		
		$(".btnDelete").bind("click", Eliminar);
}; 


function Eliminar(){
	var par = $(this).parent().parent(); //tr
	par.remove();
}; 


function Grabar(){
	var par = $(this).parent().parent();	//tr
	var tdid = par.children("td:nth-child(1)");	
	var tdtimezone  = par.children("td:nth-child(2)");
	var tddate  = par.children("td:nth-child(3)");
	var tdd  = par.children("td:nth-child(4)");
	var tdu  = par.children("td:nth-child(5)");
	var tdestado  = par.children("td:nth-child(6)");
	var tdmonto  = par.children("td:nth-child(7)");
	var tduS  = par.children("td:nth-child(8)");
	var tdidCuentaContable  = par.children("td:nth-child(9)");
	var tdnum  = par.children("td:nth-child(10)");
	var tdButtons  = par.children("td:nth-child(11)");

	tdid.html(tdid.children("input[type=text]").val());
	tdtimezone.html(tdtimezone.children("input[type=text]").val());
	tddate.html(tddate.children("input[type=text]").val());
	tdd.html(tdd.children("input[type=text]").val());
	tdu.html(tdu.children("input[type=text]").val());
	tdestado.html(tdestado.children("input[type=text]").val());
	tdmonto.html(tdmonto.children("input[type=text]").val());
	tduS.html(tduS.children("input[type=text]").val());
	tdidCuentaContable.html(tdidCuentaContable.children("input[type=text]").val());
	tdnum.html(tdnum.children("input[type=text]").val());
	tdButtons.html("<button class='btn btn-success btnEdit'>Editar</button><button class='btnDelete btn btn-danger'>Eiminar</button>");

	$(".btnEdit").bind("click", Editar);
	$(".btnDelete").bind("click", Eliminar);
	
	//pa guardar en la BDD
	$.ajax({
		type:'POST',
		url:'crudlogic.php?p=add',
		data:'id='+tdid+'&timezone='+tdtimezone+'&date='+tddate+'&d='+tdd+'&u='+tdu+'&estado='+tdestado+'&monto='+tdmonto+'&uS='+tduS+'&idCuentaContable='+tdidCuentaContable+'&num='+tdnum,
		success: function(){
			alert();
		},
		error: function(){
			alert('error!'+data);
		}

	});

}; 

function Editar(){
	var par = $(this).parent().parent(); //tr
	var tdid = par.children("td:nth-child(1)");
	var tdtimezone  = par.children("td:nth-child(2)");
	var tddate  = par.children("td:nth-child(3)");
	var tdd  = par.children("td:nth-child(4)");
	var tdu  = par.children("td:nth-child(5)");
	var tdestado  = par.children("td:nth-child(6)");
	var tdmonto  = par.children("td:nth-child(7)");
	var tduS  = par.children("td:nth-child(8)");
	var tdidCuentaContable  = par.children("td:nth-child(9)");
	var tdnum  = par.children("td:nth-child(10)");
	var tdButtons  = par.children("td:nth-child(11)");
	

	tdid.html("<input class='form-control' type='text' id='txtid' value='"+tdid.html()+"'/>");
	tdtimezone.html("<input class='form-control' type='text' id='txtName' value='"+tdtimezone.html()+"'/>");
	tddate.html("<input class='form-control' type='text' id='txtPhone' value='"+tddate.html()+"'/>");
	tdd.html("<input class='form-control' type='text' id='txtEmail' value='"+tdd.html()+"'/>");
	tdu.html("<input class='form-control' type='text' id='txtName' value='"+tdu.html()+"'/>");
	tdestado.html("<input class='form-control' type='text' id='txtPhone' value='"+tdestado.html()+"'/>");
	tdmonto.html("<input class='form-control' type='text' id='txtEmail' value='"+tdmonto.html()+"'/>");
	tduS.html("<input class='form-control' type='text' id='txtName' value='"+tduS.html()+"'/>");
	tdidCuentaContable.html("<input class='form-control' type='text' id='txtPhone' value='"+tdidCuentaContable.html()+"'/>");
	tdnum.html("<input class='form-control' type='text' id='txtEmail' value='"+tdnum.html()+"'/>");	
	tdButtons.html("<button class='btn btn-info btnSave'>G</button>");

	$(".btnSave").bind("click", Grabar);
	$(".btnEdit").bind("click", Editar);
	$(".btnDelete").bind("click", Eliminar);
};

$(function(){
	//Add, Save, Edit and Delete functions code
	$(".btnEdit").bind("click", Editar);
	$(".btnDelete").bind("click", Eliminar);
	$("#btnAdd").bind("click", Nuevo);
});