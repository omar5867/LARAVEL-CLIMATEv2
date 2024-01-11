@extends('layouts.app')
  
@section('title', 'Editar Dato')
  
@section('contents')
    <h1 class="mb-0">Editar Dato con id {{ $id }}</h1>
    <hr />
    <form action="{{ route('puntos.updatedata', $id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Temperatura</label>
                <input type="text" name="temperatura" class="form-control" placeholder="Temperatura" value="{{ $dato->temperatura }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Humedad</label>
                <input type="text" name="humedad" class="form-control" placeholder="Humedad" value="{{ $dato->humedad }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection