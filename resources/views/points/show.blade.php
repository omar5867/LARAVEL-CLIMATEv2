@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Listado de datos del punto {{ $idpunto }}</h1>
        <a href="{{ route('puntos.createdata', $idpunto) }}" class="btn btn-primary">Añadir Dato</a>
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
                <th>Temperatura</th>
                <th>Humedad</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($data->count() > 0)
                @foreach($data as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->temperatura }}</td>
                        <td class="align-middle">{{ $rs->humedad }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('puntos.editdata', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('puntos.destroydata', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">No se tienen datos en este punto</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection