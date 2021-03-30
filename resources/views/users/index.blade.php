@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <div class="card">
        <div class="card-header text-justify bg-light">
            <div class="row">
                <div class="col-8"><h5>Usuarios</h5></div>
                <div class="col-4 text-right">
                    <a href="{{ url('users/create') }}"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="">
            <table id="dt" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                @forelse($users as $user)
                    <tr>
                        <td>
                            <p class="font-weight-bold text-primary">{{ $user->name }} {{ $user->apat }} {{ $user->amat }}</p>
                        </td>

                        @if("admin" === $user->roles->implode('name', ','))
                            <td><span class="badge badge-primary">Administrador</span></td>
                        @elseif("teacher" === $user->roles->implode('name', ','))
                            <td><span class="badge badge-success">Profesor</span></td>
                        @elseif("student" === $user->roles->implode('name', ','))
                            <td><span class="badge badge-secondary">Estudiante</span></td>
                        @elseif("root" === $user->roles->implode('name', ','))
                            <td><span class="badge badge-danger">Super Admin</span></td>
                        @endif
                        <td>Permisos</td>
                        <td>
                            <span><i class="fas fa-edit"></i></span>
                        </td>

                        @empty
                            <h5>No hay registros en la base de datos</h5>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>



    <!-- JavaScript para DataTables -->
    <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.5.1.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.min.css') }}">
    <script>
        $(function () {

            $('#dt').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
