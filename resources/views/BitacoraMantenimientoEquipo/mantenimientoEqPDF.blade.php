<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/estilos.css')}}">
<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/bootstrap.min.css')}}">

<table border="0" cellpadding="0"> 
    <tr> 
        <td style="width: 773px;"><img src="Cats.png"></td> 
    </tr>
</table>


<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 200px;" align="left"><h4>HOJA DE CONTROL</h4></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 80px;" align="left"><h4>No. FOLIO: </h4></td> 
        <td style="width: 410px;" align="left"><h4>FM-33419402AR</h4></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 80px;" align="left"><h4>FECHA: </h4></td> 
        <td style="width: 410px;" align="left"><h4>12/01/19</h4></td> 
    </tr>
</table>

<table border="0" cellpadding="5"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 773px;" align="center"><h4>BITÁCORA DE MANTENIMIENTO DE EQUIPO</h4></td> 
    </tr>
</table>


<table border="1" cellpadding="2"> 
    <tr class="alert alert-success">  
        <td style="width: 130px;" align="center"><h5>TIPO DE EQUIPO</h5></td> 
        <td style="width: 90px;" align="center"><h5>No. DE UNIDAD</h5></td>
        <td style="width: 80px;" align="center"><h5>CAMBIO DE EMPAQUES</h5></td>
        <td style="width: 90px;" align="center"><h5>LUBRICACIÓN</h5></td> 
        <td style="width: 80px;" align="center"><h5>CAMBIO DE BOQUILLAS</h5></td>
        <td style="width: 70px;" align="center"><h5>FECHA</h5></td>
        <td style="width: 233px;" align="center"><h5>OBSERVACIONES</h5></td>
    </tr>
</table>
 @foreach($registros as $regis)
<table border="1" cellpadding="2"> 
    <tr class="alert alert-success">  
        <td style="width: 130px;" align="center"><h6>{{$regis->TipoEquipo}}</h6></td> 
        <td style="width: 90px;" align="center"><h6>{{$regis->NoUnidad}}</h6></td>
        <td style="width: 80px;" align="center"><h6>{{$regis->CambioEmpaques}}</h6></td>
        <td style="width: 90px;" align="center"><h6>{{$regis->Lubricacion}}</h6></td> 
        <td style="width: 80px;" align="center"><h6>{{$regis->CambioBoquillas}}</h6></td>
        <td style="width: 70px;" align="center"><h6>{{$regis->Fecha}}</h6></td>
        <td style="width: 233px;" align="center"><h6>{{$regis->Observaciones}}</h6></td>
    </tr>
</table>

@endforeach


<table border="0" cellpadding="0"> 
    <tr> 
        <td></td>
    </tr>
</table>


<table border="0" cellpadding="3"> 
    <tr class="alert alert-success"> 
        <td style="width: 10px;" align="left"></td>
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="left"><h5>Nombre del responsable: Brenda Lizeth Flores Loma</h5></td>
    </tr>
</table>
<table border="0" cellpadding="3"> 
    <tr class="alert alert-success"> 
        <td style="width: 10px;" align="left"></td> 
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="left"><h5> Firma:_____________________________________</h5></td> 
    </tr>
</table>


<table border="0" cellpadding="0"> 
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
