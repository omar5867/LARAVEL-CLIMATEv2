@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Listado de Puntos</h1>
        <a href="{{ route('puntos.create') }}" class="btn btn-primary">Añadir Punto</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Ubicación</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($punto->count() > 0)
                @foreach($punto as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->ubicacion }}</td>
                        <td class="align-middle">{{ $rs->descripcion }}</td>
                        <td class="align-middle">{{ $rs->estado }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('puntos.show', $rs->id) }}" type="button" class="btn btn-secondary">Valores</a>
                                <a href="{{ route('puntos.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('puntos.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Ningun punto encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection