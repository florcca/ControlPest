@extends('template.main')
@section('titulo')
BITACORAS DE SERVICIO
@endsection
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header" style="font-kerning: normal">BITACORA DE SERVICIOS DE FUMIGACIÓN Y CONTROL DE PLAGAS NOCIVAS</legend>

                        
                        <SELECT NAME="selCombo" SIZE=1> 
                            <OPTION VALUE="link pagina 1">UMF.57 IRAPUATO </OPTION>
                            <OPTION VALUE="link pagina 2">PREPARATORIA 17</OPTION>
                            <OPTION VALUE="link pagina 3">RESTAURANT </OPTION>
                            <OPTION VALUE="link pagina 4">TOCATIC </OPTION> 
                        </SELECT> 
                        

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-5">
                                <input id="nombre" name="ingeniero" type="text" placeholder="Área" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-5">
                                <input id="email" name="cargo" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-5">
                                <input id="folio" name="Matrícula" type="text" placeholder="Matricula" class="form-control">
                            </div>
                        </div>


                        
                        

                        <div class="form-group">
                            <div class="col-md-10 text-center">
                                <button type="submit" onChange="javascript:alert('Guardado');" class="btn btn-primary btn-lg" >Agregar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
