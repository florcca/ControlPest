<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/estilos.css')}}">
<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/bootstrap.min.css')}}">

<header>
        <img src="catsA.png" style="max-width:100%;">            
</header>

<body>
<table border="0" cellpadding="0"> 
    <tr> 
        <td></td>
    </tr>
</table>
@foreach($certificado as $certi)
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 85px;" align="left"><h2>Nombre: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{ $certi->nombre }}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="1"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 85px;" align="left"><h2>Domicilio: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{ $certi->domicilio }}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="1"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 85px;" align="left"><h2>Ciudad: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{ $certi->ciudad }}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="1"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 85px;" align="left"><h2>Empresa: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{ $certi->empresa }}</h2></td> 
    </tr>
</table>

<div style="position:absolute;  top:28px; left:40px; visibility:visible;" >
        <img class="d-block bg-dark-center" src="SBA.png"  width=1, height=1>
</div>

<table border="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 140px;" align="left"><h2>Tipo de vehículo: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{ $certi->tipo_v}}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="1"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 70px;" align="left"><h2>Placas: </h2></td> 
        <td style="width: 140px;" align="left"><h2>{{ $certi->placas }}</h2></td>
        <td style="width: 150px;" align="left"><h2>Giro del vehículo: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{ $certi->giro_v }}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="1"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 210px;" align="left"><h2>Tipo de químico aplicado: </h2></td> 
        <td style="width: 410px;" align="left"><h2>{{ $certi->tipo_quimico_aplicado }}</h2></td> 
    </tr>
</table>
<table border="0" cellpadding="1"> 
    <tr class="alert alert-success"> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 210px;" align="left"><h2>Fecha de fumigación: </h2></td> 
        <td style="width: 100px; background-color:#F8EF89;color:#1A1501;" align="center" border="0"><h2>{{ $certi->fecha_fumigacion }}</h2></td> 
        <td style="width: 35px;" align="center"></td> 
        <td style="width: 190px;" align="left"><h2>Fecha de vencimiento: </h2></td> 
        <td style="width: 100px; background-color:#F8EF89;color:#1A1501;" align="center" border="0"><h2>{{ $certi->fecha_vencimiento }}</h2></td> 
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
    @endforeach
</table>
<table border="0" cellpadding="5"> 
    <tr class="alert alert-success"> 
        <td style="width: 10px;" align="left"></td> 
        <td style="width: 216px; background-color:#F8EF89;color:#1A1501;" align="left"><h3>RFC PIMB650421-QX1</h3></td>
        <td style="width: 15px;" align="left"></td>
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="left"><h3>Nombre: {{ $certi->tecnico_responsable }}</h3></td>
        <td style="width: 15px;" align="left"></td>
        <td style="width: 226px; background-color:#F8EF89;color:#1A1501;" align="center"></td> 
    </tr>
</table>
<table border="0" cellpadding="2"> 
    <tr class="alert alert-success"> 
        <td style="width: 10px;" align="left"></td> 
        <td style="width: 216px; background-color:#F8EF89;color:#1A1501;" align="left"><h3> Licencia sanitaria 2009-32A013</h3></td>
        <td style="width: 15px;" align="left"></td>
        <td style="width: 290px; background-color:#F8EF89;color:#1A1501;" align="left"><h3> Firma:_____________________________</h3></td>
        <td style="width: 15px;" align="left"></td>
        <td style="width: 226px; background-color:#F8EF89;color:#1A1501;" align="center"><h3>Tlal-Zac Control Pest</h3></td> 
    </tr>
</table>


<table border="0" cellpadding="3"> 
    <tr> 
        <td></td>
    </tr>
</table>
</body>


<footer>
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
</footer>