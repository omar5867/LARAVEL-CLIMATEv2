@extends('layouts.app')
  
@section('title', 'Añadir Punto')
  
@section('contents')
    <h1 class="mb-0">Añadir Punto</h1>
    <hr />
    <form action="{{ route('puntos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="ubicacion" class="form-control" placeholder="Ubicación">
            </div>
            <div class="col">
                <input type="text" name="descripcion" class="form-control" placeholder="Descripción">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="estado" class="form-control" placeholder="Estado">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Añadir</button>
            </div>
        </div>
    </form>
@endsection