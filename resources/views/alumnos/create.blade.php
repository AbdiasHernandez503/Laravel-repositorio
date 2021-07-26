@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nuevo Empleado</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('alumnos.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
    @if ($errors->any)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors as $error)
                    <li>{{$error}}</li>   
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('alumnos.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="formgroup">
                    <strong>Nombres</strong>
                    <input type="text" name="nombres" class="form-control" placeholder="Ej. LGSUS">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="formgroup">
                    <strong>Apellidos</strong>
                    <input type="text" name="apelidos" class="form-control" placeholder="Ej. Hernandez">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="formgroup">
                    <strong>Telefono</strong>
                    <input type="text" name="telefono" class="form-control" placeholder="Ej. 2222-2222">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="formgroup">
                    <strong>Edad</strong>
                    <input type="numeric" name="edad" class="form-control" placeholder="Ej. 13">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection