@extends('layouts.master')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title"><i class="fas fa-home"></i> Datos de la Institución</h1>
        </div>
        <form action="{{ route('institute.store') }}" method="post">

            @csrf
            <div class="card-body">
                <div class="row">
                    <p>Rellena con la información de tu Institución. Esta información será utilizada para personalizar
                        la
                        identidad del sistema.</p>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Nombre oficial: </label>
                        <input class="form-control" type="text" name="officialName" id="" placeholder="Nombre oficial"
                               autofocus
                               required style="text-transform: uppercase">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Nombre: </label>
                        <input class="form-control" type="text" name="name" id="" placeholder="Nombre local" required
                               style="text-transform: uppercase">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Siglas o nombre corto: </label>
                        <input class="form-control" type="text" name="shortName" id=""
                               placeholder="Siglas o nombre corto"
                               required style="text-transform: uppercase">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
                        <label for="">Imagen para portada: </label>
                        <input class="" type="file" name="img" required accept=".png, .jpeg, .bmp">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
                        <label for="">Logo: </label>
                        <input class="" type="file" name="logo" required accept=".png, .jpeg, .bmp">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Eslogan: </label>
                        <input class="form-control" type="text" name="slogan" id="" placeholder="Eslogan" required>
                    </div>
                </div>
                <br>


                <div class="row">
                    <p>Agrega la información de contacto.</p>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Email institucional: </label>
                        <input class="form-control" type="email" name="email" id="" placeholder="Email institucional"
                               required>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Teléfono: </label>
                        <input type="text" class="form-control" name="phone"
                               data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                        <label for="">Sitio web: </label>
                        <input class="form-control" type="url" name="website" placeholder="https://www.example.com"
                               required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Dirección: </label>
                        <input class="form-control" type="text" name="address" id="" placeholder="Dirección" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Contacto para recibir soporte: </label>
                        <input class="form-control" type="text" name="support" id="" placeholder="" required>
                    </div>
                </div>

                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input class="btn btn-info" type="reset" value="Restablecer">
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </div>
            </div>
        </form>

    </div>
    <br><br><br>

    <script>
        $("#telefono").autoNumeric('init', {aSep: ' ', dGroup: '4', mDec: '0'});
    </script>
@endsection
