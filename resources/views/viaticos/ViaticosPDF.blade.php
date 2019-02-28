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
        <td style="width: 773px;" align="center"><h4>VIÁTICOS</h4></td> 
    </tr>
</table>


<table border="1" cellpadding="2"> 
    <tr class="alert alert-success">  
        <td style="width: 128px;" align="center"><h5>RUTA</h5></td> 
        <td style="width: 230px;" align="center"><h5>TÉCNICO</h5></td>
        <td style="width: 114px;" align="center"><h5>FECHA</h5></td>
        <td style="width: 100px;" align="center"><h5>FONDO</h5></td>
        <td style="width: 100px;" align="center"><h5>GASTOS</h5></td>
        <td style="width: 100px;" align="center"><h5>$ TOTAL</h5></td> 
    </tr>
</table>
@foreach($registros as $regis)
<table border="1" cellpadding="2"> 
    <tr class="alert alert-success">  
        <td style="width: 128px;" align="center"><h6>{{$regis->ruta}}</h6></td>
        <td style="width: 230px;" align="center"><h6>{{$regis->tecnico}}</h6></td>
        <td style="width: 114px;" align="center"><h6>{{$regis->fecha}}</h6></td>   
        <td style="width: 100px;" align="center"><h6>{{$regis->fondo}}</h6></td>
        <td style="width: 100px;" align="center"><h6>{{$regis->comida+$regis->gasolina+$regis->hotel+$regis->extra}}</h6></td>
        <td style="width: 100px;" align="center"><h6>{{$regis->fondo-($regis->comida+$regis->gasolina+$regis->hotel+$regis->extra)}}</h6></td>


       
    </tr>
</table>

@endforeach
<table border="0" cellpadding="5"> 
    <tr class="alert alert-success">  
        <td style="width: 772px;" align="center"><h5></h5></td> 
    </tr>

</table>





<table border="0" cellpadding="3"> 
    <tr class="alert alert-success"> 
        <td style="width: 10px;" align="left"></td>
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="left"><h5>Técnico: Flor Carolina Castañeda A.</h5></td>
        <td style="width: 10px;" align="left"></td>
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="left"><h5>Contraloría: Omar Ignacio Carrillo Haro</h5></td>
    </tr>
</table>
<table border="0" cellpadding="3"> 
    <tr class="alert alert-success"> 
        <td style="width: 10px;" align="left"></td> 
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="left"><h5> Firma:_____________________________________</h5></td>
        <td style="width: 10px;" align="left"></td> 
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="left"><h5> Firma:_____________________________________</h5></td> 
    </tr>
</table>
