@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Nuevo registro</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="post">
                @csrf

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Apellido paterno</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="apat" name="apat">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Apellido Materno</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="amat" name="amat">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Correo electrónico</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <!-- <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Repetir contraseña</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="email_verified_at">
                    </div>
                </div> -->
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Rol</label>
                    <div class="col-sm-10">
                        <select name="role" id="" class="form-control">
                            @foreach($roles as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-light me-md-2" type="reset">Restablecer</button>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>

            </form>
        </div>
    </div>

@endsection
