

<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/estilos.css')}}">
<link rel="stylesheet"href="{{asset('plugins/Bootstrap/css/bootstrap.min.css')}}">


<header>
        <img src="cats.png" style="max-width:100%;">            
</header>
 @foreach($hojaservicioPDF as $hojaservi)

<table border="0" cellpadding="1"> 
    <tr style=""> 
        <td><h5 align="left">Nombre: {{$hojaservi->nombre}}</h5></td> 
        <td><h5 align="left">Técnico responsable: {{$hojaservi->responsable}}</h5></td>
    </tr>
    </table>
<table border="0" cellpadding="1"> 
    <tr style=""> 
        <td><h5 align="left">Dirección: {{$hojaservi->domicilio}}</h5></td> 
        <td><h5 align="right">Fecha: {{$hojaservi->fecha}}</h5></td>
    </tr>
    </table> 
<table border="0" cellpadding="1"> 
    <tr style=""> 
        <td><h5 align="left">Ciudad: {{$hojaservi->ciudad}}</h5></td> 
    </tr>
    </table> 
<table border="0" cellpadding="1"> 
    <tr style=""> 
        <td><h5 align="left">Teléfono: {{$hojaservi->telefono}}</h5></td> 
    </tr>
    </table> 
<table border="0" cellpadding="1"> 
    <tr style=""> 
        <td ><h5 align="left">Lugar de aplicación: {{$hojaservi->lugar_de_aplicacion}}</h5></td> 
    </tr>
    </table> 
<table border="0" cellpadding="1"> 
    <tr style=""> 
        <td></td> 
    </tr>
    </table>
@endforeach

<table border="0" cellpadding="1"> 
    <tr style="background-color:#F8EF89;color:#1A1501;"> 
        <td style="width: 100px;" align="center">Tipo de Plaga</td> 
        <td style="width: 100px;" align="center">Giro del establecimiento</td> 
        <td style="width: 100px;" align="center">Características del local</td> 
        <td style="width: 240px;" align="center">Químicos a utilizar</td> 

    </tr>
</table>
@foreach($tipoplagaPDF as $tipop)
@foreach($giroestablecimientoPDF as $giroesta)
@foreach($caracteristicaslocPDF as $caralocal)
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        @if($tipop->ptz1==0)
            <td align="center" style="width: 100px;"><h5>No Pt1</h5></td> 
        @else
            <td style= align="center" style="width: 100px; background-color:#25E622;"><h5>Si Pt1</h5></td> 
        @endif

        <td style="width: 100px;"><h5>      {{$giroesta->casa_abitacion}}    Casa habitación</h5></td> 
       
         @if($caralocal->no_habitado==0)
            <td style="width: 112px;"><h5>No habitado</h5></td>
            <td style= align="left" style="width: 3px;"></td>
        @else
            <td style= align="left" style="width: 112px; background-color:#25E622;"><h5>Si habitado</h5></td>
            <td style= align="left" style="width: 3px;"></td>
        @endif

        <td style="width: 70px;" align="center" border="2"><h5>CÓDIGO</h5></td> 
        <td style="width: 70px;" align="center" border="2"><h5>DOSIS</h5></td> 
        <td style="width: 70px;" align="center" border="2"><h5>CANTIDAD</h5></td>


    </tr>
</table>



<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        @if($tipop->ptz2==0)
            <td align="center" style="width: 100px;"><h5>No Pt2</h5></td> 
        @else
            <td style= align="center" style="width: 100px; background-color:#25E622;"><h5>Si Pt2</h5></td> 
        @endif
        
        <td style="width: 100px;"><h5>       {{$giroesta->restaurante}}     Restaurante </h5></td> 

        @if($caralocal->casa_gardin==0)
            <td style="width: 112px;"><h5>No Casa jardín</h5></td>
            <td style= align="left" style="width: 3px;"></td>
        @else
            <td style= align="left" style="width: 112px; background-color:#25E622;"><h5>Si Casa jardín</h5></td>
            <td style= align="left" style="width: 3px;"></td>
        @endif

        
       
        <td border="1" style="width: 70px;" align="center">{{$var1}}</td> 
        <td border="1" style="width: 70px;" align="center">{{$var2}}</td> 
        @if($var3==0)
            <td border="1" style="width: 70px;" align="center"></td>
        @else
            <td border="1" style="width: 70px;" align="center">{{$var3}}</td>
        @endif


    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        @if($tipop->ptz3==0)
            <td align="center" style="width: 100px;"><h5>No Pt3</h5></td> 
        @else
            <td style= align="center" style="width: 100px; background-color:#25E622;"><h5>Si Pt3</h5></td> 
        @endif
        
        <td style="width: 100px;"><h5>      {{$giroesta->abarrotes}}    Abarrotes</h5></td> 

        @if($caralocal->material_paredes==0)
            <td style="width: 112px;"><h5>No Material paredes</h5></td>
            <td style= align="left" style="width: 3px;"></td>
        @else
            <td style= align="left" style="width: 112px; background-color:#25E622;"><h5>Si Material paredes</h5></td>
            <td style= align="left" style="width: 3px;"></td> 
        @endif

   
        <td border="1" style="width: 70px;" align="center">{{$var4}}</td> 
        <td border="1" style="width: 70px;" align="center">{{$var5}}</td> 
        @if($var6==0)
            <td border="1" style="width: 70px;" align="center"></td>
        @else
            <td border="1" style="width: 70px;" align="center">{{$var6}}</td>
        @endif
        


    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        @if($tipop->ptz4==0)
            <td align="center" style="width: 100px;"><h5>No Pt4</h5></td> 
        @else
            <td style= align="center" style="width: 100px; background-color:#25E622;"><h5>Si Pt4</h5></td> 
        @endif
      
        <td style="width: 100px;"><h5>     {{$giroesta->bodega}}     Bodega</h5></td> 

        @if($caralocal->tipo_de_engarre==0)
            <td style="width: 112px;"><h5>No Tipo enjarre</h5></td>
            <td style= align="left" style="width: 3px;"></td>
        @else
            <td style= align="left" style="width: 112px; background-color:#25E622;"><h5>Si Tipo enjarre</h5></td> 
            <td style= align="left" style="width: 3px;"></td> 
            {{-- ARREGLAR SANGRIAS DE LA TABLAAAAA --}}
        @endif

        <td border="1" style="width: 70px;" align="center">{{$var7}}</td> 
        <td border="1" style="width: 70px;" align="center">{{$var8}}</td> 
        @if($var9==0)
            <td border="1" style="width: 70px;" align="center"></td>
        @else
            <td border="1" style="width: 70px;" align="center">{{$var9}}</td>
        @endif
        


    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        @if($tipop->ptz5==0)
            <td align="center" style="width: 100px;"><h5>No Pt5</h5></td> 
        @else
            <td style= align="center" style="width: 100px; background-color:#25E622;"><h5>Si Pt5</h5></td> 
        @endif
        
        <td style="width: 100px;"><h5>    {{$giroesta->carniceria}}    Carnicería</h5></td> 

        @if($caralocal->tipo_tuberias==0)
            <td style="width: 112px;"><h5>No Tipo tuberías</h5></td>
            <td style= align="left" style="width: 3px;"></td>
        @else
            <td style= align="left" style="width: 112px; background-color:#25E622;"><h5>Si Tipo tuberías</h5></td>
            <td style= align="left" style="width: 3px;"></td> 
        @endif


        <td border="1" style="width: 70px;" align="center">{{$var10}}</td> 
        <td border="1" style="width: 70px;" align="center">{{$var11}}</td> 
        @if($var12==0)
            <td border="1" style="width: 70px;" align="center"></td>
        @else
            <td border="1" style="width: 70px;" align="center">{{$var12}}</td>
        @endif

    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        @if($tipop->ptz6==0)
            <td align="center" style="width: 100px;"><h5>No Pt6</h5></td> 
        @else
            <td style= align="center" style="width: 100px; background-color:#25E622;"><h5>Si Pt6</h5></td> 
        @endif
       
        <td style="width: 100px;"><h5>      {{$giroesta->consutorio}}    Consultorio</h5></td> 

        @if($caralocal->Electrodomesticos==0)
            <td style="width: 112px;"><h5>No Electrodomésticos</h5></td>
            <td style= align="left" style="width: 3px;"></td>
        @else
            <td style= align="left" style="width: 112px; background-color:#25E622;"><h5>Si Electrodomésticos</h5></td>
            <td style= align="left" style="width: 3px;"></td>
        @endif

     
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        @if($tipop->ptz7==0)
            <td align="center" style="width: 100px;"><h5>No Pt7</h5></td> 
        @else
            <td style= align="center" style="width: 100px; background-color:#25E622;"><h5>Si Pt7</h5></td> 
        @endif
       
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        @if($tipop->ptz8==0)
            <td align="center" style="width: 100px;"><h5>No Pt8</h5></td> 
        @else
            <td style= align="center" style="width: 100px; background-color:#25E622;"><h5>Si Pt8</h5></td> 
        @endif
      
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        @if($tipop->ptz9==0)
            <td align="center" style="width: 100px;"><h5>No Pt9</h5></td> 
        @else
            <td style= align="center" style="width: 100px; background-color:#25E622;"><h5>Si Pt9</h5></td> 
        @endif
      
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        @if($tipop->ptz10==0)
            <td align="center" style="width: 100px;"><h5>No Pt10</h5></td> 
        @else
            <td style= align="center" style="width: 100px; background-color:#25E622;"><h5>Si Pt10</h5></td> 
        @endif
      
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td align="center" style="width: 100px;"></td>
    </tr>
</table>
@endforeach
@endforeach
@endforeach


<table border="0" cellpadding="2"> 
    <tr style="background-color:#F8EF89;color:#1A1501;"> 
        <td style="width: 100px;" align="center">Nivel</td> 
        <td style="width: 200px;" align="center">Código de plaga</td>
        <td style="width: 240px;" align="center">Código de químicos</td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"><h5 align="center">1</h5></td> 
        <td style="width: 220px;"><h5 align="left"> Ptz 1 Cucaracha alemana</h5></td>
        <td style="width: 240px;"><h5 align="left">Qtz 1 Diazinon</h5></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"><h5 align="center">2</h5></td> 
        <td style="width: 220px;"><h5 align="left"> Ptz 2 Cucaracha americana</h5></td>
        <td style="width: 240px;"><h5 align="left">Qtz 2 Diclorvos</h5></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"><h5 align="center">3</h5></td> 
        <td style="width: 220px;"><h5 align="left"> Ptz 3 Cucaracha banda café</h5></td>
        <td style="width: 240px;"><h5 align="left">Qtz 3 Clorpirofos</h5></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"><h5 align="center">Otros</h5></td> 
        <td style="width: 220px;"><h5 align="left"> Ptz 4 Mosca doméstico</h5></td>
        <td style="width: 240px;"><h5 align="left">Qtz 4 Piretrina</h5></td> 
    </tr>
</table>

<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
    

        <td style="width: 100px;"></td> 
        <td style="width: 220px;"><h5 align="left"> Ptz 5 Hormigas</h5></td>
        <td style="width: 240px;"><h5 align="left">Qtz 5 Butoxido de piperonilo</h5></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"></td> 
        <td style="width: 220px;"><h5 align="left"> Ptz 6 Alacrán</h5></td>
        <td style="width: 240px;"><h5 align="left">Qtz 6 Ácido bórico</h5></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"></td> 
        <td style="width: 220px;"><h5 align="left"> Ptz 7 Termitas</h5></td>
        <td style="width: 240px;"><h5 align="left">Qtz 7 Cypermethina</h5></td> 
    </tr>
</table>

<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"></td> 
        <td style="width: 220px;"><h5 align="left"> Ptz 8 Ratón doméstico</h5></td>
        <td style="width: 240px;"><h5 align="left">Qtz 8 Ciflufin</h5></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"></td> 
        <td style="width: 220px;"><h5 align="left"> Ptz 9 Rata noruega</h5></td>
        <td style="width: 240px;"><h5 align="left">Qtz 9 Hidrametilona</h5></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"></td> 
        <td style="width: 220px;"><h5 align="left"> Ptz 10 Rata del tejado</h5></td>
        <td style="width: 240px;"><h5 align="left">Qtz 10 Warfanina</h5></td> 
    </tr>
</table>
<table border="0" cellpadding="1"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"></td> 
        <td style="width: 220px;"></td>
        <td style="width: 240px;"><h5 align="left">Qtz 11 Bromadiolona</h5></td> 
    </tr>
</table>
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;"></td> 
        <td style="width: 220px;"></td>
        <td style="width: 240px;"><h5 align="left">Qtz 12 Trifumuron</h5></td> 
    </tr>
</table>
  {{--  style="width: 2000px; height: 44px;" --}}
<table border="0" cellpadding="0"> 
    <tr class="alert alert-success"> 
        <td align="center" style="width: 100px;"></td>
    </tr>
</table>
@foreach($informacionPDF as $info)
<table border="0" cellpadding="1"> 
    <tr style="background-color:#F8EF89;color:#1A1501;"> 
        <td style="width: 100px;" align="center"><h5>Fecha de aplicación<br>{{$info->fecha_de_aplicacion}}</h5></td> 
        <td style="width: 200px;" align="center">Indicacionnes Pre-aplicación</td>
        <td style="width: 240px;" align="center">Indicaciones Pos-aplicación</td> 
    </tr>
</table>
<table border="0" cellpadding="1"> 
    <tr class="alert alert-success"> 
        <td style="width: 100px;" align="center"></td> 
        <td style="width: 200px;" align="left"><h6>{{$info->In_preaplicacion}}</h6></td>
        <td style="width: 240px;" align="left"><h6>{{$info->In_posaplicacion}}</h6></td> 
    </tr>
</table>

<table border="0" cellpadding="1"> 
    <tr style="background-color:#F8BCBC;color:#030300;"> 
        <td style="width: 100px;" align="center"><h5>Próximo servicio:</h5></td> 
        <td style="width: 55px;" align="left"><h5>{{$info->fecha_proximo_servicio}}</h5></td>
    </tr>
</table>

<table border="1" cellpadding="1"> 
    <tr style="background-color:#F8EF89;color:#1A1501;"> 
        <td style="width: 180px;" align="center">Asentó de conformidad</td> 
        <td style="width: 180px;" align="center">Técnico responsable</td>
        <td style="width: 180px;" align="center">Firma de autorización<br>Tlal-Zac Control Pest</td> 
    </tr>
</table>

<table border="1" cellpadding="1"> 
    <tr style="background-color:#EDEBEB;color:#030300;"> 
        <td style="width: 180px;" align="center"><h6 align="left">Nombre: {{$hojaservi->nombre}}</h6><br><h6 align="left">Firma:</h6><br><h1></h1><br><h7></h7><h6 align="left">Fecha: {{$hojaservi->fecha}}</h6></td> 
        <td style="width: 180px;" align="center"><h6 align="left">Nombre: {{$hojaservi->responsable}}</h6><br><h6 align="left">Firma:</h6></td>
        <td style="width: 180px;" align="center"></td> 
    </tr>
</table>
@endforeach
<br>
<table border="0" cellpadding="1"> 
    <tr style="background-color:#BAF1A5;color:#030300;"> 
        <td style="width: 540px;" align="center"><h6>Pánfilo Natera No. 06, Fraccionamiento Las Lomitas, Tlaltenango de S.R., Zac. Tel. 437 954 0033 Cel. 437 104 2176</h6></td>
    </tr>
</table>
<table border="0" cellpadding="1"> 
    <tr style="background-color:#BAF1A5;color:#030300;"> 
        <td style="width: 540px;" align="center"><h6>E-mail: tlalzac-controlpest@hotmail.com | tlalzac-ventas@hotmail.com</h6></td>
    </tr>
</table>