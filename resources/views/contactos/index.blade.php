@extends('layouts.master')

@section('content')
<div class="container-fluid mb-4" >
    <div class="row align-items-center">
        <div class="col-md-8">
            <div class="title-page px-4 py-5">
                <h3 class="display-1"></h3>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nuevo Contacto
            </button>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTarea">Crear nueva tarea</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <form action="{{route('contactos.store')}}" method="POST">
            <div class="modal-body">
                <!--campo de protección de formulario-->
            {{ csrf_field() }}
            <!--Campos de formulario-->
            <div class="form-group mb-3">
                <label for="">Nombre de contacto</label>
                <input class="form-control"type="text" placeholder="Nombre de contacto" name="name">
            </div> 
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input class="form-control"type="email" placeholder="Email" name="email">
            </div>   
            <div class="form-group mb-3">
                <label for="">Teléfono</label>
                <input class="form-control"type="tel" placeholder="Teléfono" name="number">
            </div>  
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline-success">Guardar</button>
            </div>
        </form>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-3">
            <div class="card text-white bg-dark">
                <h5 class="card-header">Lista de contactos</h5>
                    <div class="card-body">
                        <table class="table table-dark table-hover table-borderless">
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Numero</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contactos as $contacto)
                        <tr>
                            <th scope="row">{{ $contacto->name }}</th>
                            <td>{{ $contacto->email }}</td>
                            <td>{{ $contacto->number }}</td>
                            <td>
                                @if ($contacto->state == 'Contactado')
                                   <span class="badge bg-success text-white">{{ $contacto->state }}</span>
                                @endif
                                @if ($contacto->state == 'Perdido')
                                   <span class="badge bg-danger">{{ $contacto->state }}</span> 
                                @endif
                                @if ($contacto->state == 'Registro Nuevo')
                                   <span class="badge bg-warning">{{ $contacto->state }}</span> 
                                @endif   
                            </td>
                            <td>
                               
                        <button type="button" class="btn btn-outline-light cta bg" data-bs-toggle="modal" data-bs-target="#editarTarea_{{ $contacto->id }}">
  Editar Tarea
</button>                      
                            </td>
                        </tr>
                          <!-- Modal -->
<div class="modal fade" id="editarTarea_{{ $contacto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edición de tarea</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('contactos.update', $contacto->id)}}" method="POST">
      <div class="modal-body">
        <!--campo de protección de formulario-->
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <!--Campos de formulario-->    
        <label for="">Nombre de contacto</label>
        <input class="form-control" type="text" placeholder="Nombre de tarea" name="name" value="{{ $contacto->name }}">
        <label for="">Email</label>
        <input class="form-control" type="email" name="email" value="{{ $contacto->email }}">
        <label for="">Teléfono</label>
        <input class="form-control" type="tel" name="number" value="{{ $contacto->number }}">
        <label for="">Estado</label>
                <select class="form-control mb-3" name="state" id="">
                <option value="Registro Nuevo">Registro Nuevo</option>
                    <option value="Contactado">Contactado</option>
                    <option value="Perdido">Perdido</option>       
                </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
        <a href="{{ route('contactos.show', $contacto->id) }}" type="button" class="btn btn-outline-info">Ver Contacto</a>
      </div>
        </form>
    </div>
  </div>
</div>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
