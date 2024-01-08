@extends('layouts.app')
  
@section('title', 'Editar Punto')
  
@section('contents')
    <h1 class="mb-0">Editar Punto</h1>
    <hr />
    <form action="{{ route('puntos.update', $punto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Ubicacion</label>
                <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación" value="{{ $punto->ubicacion }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Descripción</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripción" value="{{ $punto->descripcion }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Estado</label>
                <input type="text" name="estado" class="form-control" placeholder="Estado de punto" value="{{ $punto->estado }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection