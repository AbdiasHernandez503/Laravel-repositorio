@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h2>Listado de empleados</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('alumnos.create')}}" class="btn btn-success">Nuevo</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('Success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id}}</td>
                <td>{{ $empleado->nombres }}</td>
                <td>{{ $empleado->apelidos }}</td>
                <td>{{ $empleado->telefono }}</td>
                <td>{{ $empleado->edad }}</td>
                <td>
                    <a href="{{ route('alumnos.show',$empleado->id)}}" class="btn btn-info">Mostrar</a>
                    <a href="{{ route('alumnos.edit',$empleado->id)}}" class="btn btn-primary">Editar</a>

                    <form action="{{ route('alumnos.destroy',$empleado->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    
                </td>
            </tr>
            
        @endforeach
    </table>
@endsection 