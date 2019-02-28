@extends('template.main')
@section('titulo')
Guardar Facturas
@endsection
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header" style="font-kerning: normal">Control de envío de facturas</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"></span>
                            <div class="col-md-5">
                                <h5>Nombre del Ingeniero</h5>
                                <input id="nombre" name="ingeniero" type="text" placeholder="Nombre del Ingeniero" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"></span>
                            <div class="col-md-5">
                                <h5>Unidades a su cargo</h5>
                                <input id="email" name="cargo" type="text" placeholder="Unidades a su cargo" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"></span>
                            <div class="col-md-5">
                                <h5>Folio</h5>
                                <input id="folio" name="Folio" type="text" placeholder="Folio" class="form-control">
                            </div>
                        </div>



                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"></span>
                            <div class="col-md-5">
                                <h5>Fecha de envío</h5>
                                <input class="form-control" min="2000-01-01" name="Fecha_vencim" type="date" id="fecha">
                            </div>
                        </div>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"></span>
                            <div class="col-md-5">
                                <h5>Quién la envió</h5>
                                <input id="Qenvio" name="Quién la envió" type="text" placeholder="Quién la envió" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"></span>
                            <div class="col-md-5">
                                <h5>A quién se envió</h5>
                                <input id="Aenvio" name="A quién se envió" type="text" placeholder="Ej. Eduardo " class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"></span>
                            <div class="col-md-5">
                                <h5>No. CADIN</h5>
                                <input id="No" name="No. CADIN" type="text" placeholder="No. CADIN" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-11 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Agregar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
