@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div class="card">
    <div class="card-header">
        <h1>Configuración del sistema</h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 col-xl-4 col-md-6 col-xs-12">
                <div class="card bg-gradient-cyan">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text display-2">Usuarios</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <h3><span class="badge badge-danger">Total: {{ $numberUsers }}</span></h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-xl-4 col-md-6 col-xs-12">
                <div class="card bg-gradient-indigo">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text display-2">Roles</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <h3><span class="badge badge-danger">Total: {{ $numberRoles }}</span></h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-xl-4 col-md-6 col-xs-12">
                <div class="card bg-gradient-gray-dark">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text display-2">Permisos</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <h3><span class="badge badge-danger">Total: {{ $numberPermissions }}</span></h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

