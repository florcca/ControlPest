<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/estilos.css')}}">
<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/bootstrap.min.css')}}">

<header>
        <img src="CertificadoImg.png" style="max-width:100%;">            
</header>

<table border="0" cellpadding="1"> 
    <tr> 
        <td></td>
    </tr>
</table>
 @foreach($hojaservicioPDF as $hojaservi)
 @foreach($informacionPDF as $info)
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 85px;" align="left"><h2>Nombre: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{$hojaservi->nombre}}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 85px;" align="left"><h2>Domicilio: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{$hojaservi->domicilio}}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 85px;" align="left"><h2>Ciudad: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{$hojaservi->ciudad}}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 85px;" align="left"><h2>Empresa: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{$hojaservi->lugar_de_aplicacion}}</h2></td> 
    </tr>
</table>

<div style="position:absolute;  top:280px; left:400px; visibility:visible;" >
        <img class="d-block bg-dark-center" src="SB.png"  width=111, height=111>
</div>

<table border="0" cellpadding="1"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 210px;" align="left"><h2>Persona responsable: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{$hojaservi->responsable}}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="1"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 210px;" align="left"><h2>Tipo de químico aplicado: </h2></td> 
        <td style="width: 410px;" align="left"><h2>Paracetamol con naproxeno y algo mas</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 210px;" align="left"><h2>Fecha de fumigación: </h2></td> 
        <td style="width: 100px;" align="center" border="1"><h2>{{$info->fecha_de_aplicacion}}</h2></td> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 190px;" align="left"><h2>Fecha de vencimiento: </h2></td> 
        <td style="width: 100px;" align="center" border="1"><h2>{{$info->fecha_proximo_servicio}}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="5"> 
    <tr> 
        <td></td>
    </tr>
</table>


<table border="0" cellpadding="7"> 
    <tr class="alert alert-success"> 
        <td style="width: 10px;" align="left"></td> 
        <td style="width: 216px; background-color:#F8EF89;color:#1A1501;" align="left"><h3>Dr. Benjamin Pinedo Mayorga</h3></td>
        <td style="width: 15px;" align="left"></td>
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="center"><h3>Técnico responsable</h3></td>
        <td style="width: 15px;" align="left"></td>
        <td style="width: 226px; background-color:#F8EF89;color:#1A1501;" align="center"><h3>Autorización</h3></td> 
    </tr>
</table>
<table border="0" cellpadding="5"> 
    <tr class="alert alert-success"> 
        <td style="width: 10px;" align="left"></td> 
        <td style="width: 216px; background-color:#F8EF89;color:#1A1501;" align="left"><h3>RFC PIMB650421-QX1</h3></td>
        <td style="width: 15px;" align="left"></td>
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="left"><h3>Nombre:{{$hojaservi->responsable}}</h3></td>
        <td style="width: 15px;" align="left"></td>
        <td style="width: 226px; background-color:#F8EF89;color:#1A1501;" align="center"><h3>Lic. Erika Mauricio López<br>Gerente General</h3></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 10px;" align="left"></td> 
        <td style="width: 216px; background-color:#F8EF89;color:#1A1501;" align="left"><h3> Licencia sanitaria 2009-32A013</h3></td>
        <td style="width: 15px;" align="left"></td>
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="left"><h3> Firma:_____________________________</h3></td>
        <td style="width: 15px;" align="left"></td>
        <td style="width: 226px; background-color:#F8EF89;color:#1A1501;" align="center"><h3>Dr. Benjamin Pinedo Mayorga</h3></td> 
    </tr>
</table>


<table border="0" cellpadding="5"> 
    <tr> 
        <td></td>
    </tr>
</table>

<table border="0" cellpadding="0"> 
    <tr>
        <td style="background-color:#BAF1A5;color:#030300; width: 773px;" align="center"><h5>Pánfilo Natera No. 06, Fraccionamiento Las Lomitas, Tlaltenango de S.R., Zac. C.P. 99700</h5></td>
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr>
        <td style="background-color:#BAF1A5;color:#030300; width: 773px;" align="center"><h5>Tel. 437 954 0033 Cel. 437 104 2176</h5></td>
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr>
        <td style="background-color:#BAF1A5;color:#030300; width: 773px;" align="center"><h5>E-mail: tlalzac-controlpest@hotmail.com | tlalzac-ventas@hotmail.com</h5></td>
    </tr>
</table>
@endforeach
@endforeach 