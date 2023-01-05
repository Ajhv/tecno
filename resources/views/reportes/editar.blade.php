@extends('layouts.app')

@section('content')
<section class="section">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Editar Proyecto') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">                            
               
                    @if ($errors->any())                                                
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                        <strong>¡Revise los campos!</strong>                        
                            @foreach ($errors->all() as $error)                                    
                                <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach                        
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    @endif


                <form action="{{ route('proyectos.update',$proyecto->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                               <label for="nombre">Nombre</label>
                               <input type="text" name="nombre" class="form-control" value="{{ $proyecto->nombre }}">
                            </div>
                        </div>

                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                
                            <div class="form-floating">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" name="descripcion" style="height: 100px">{{ $proyecto->descripcion }}</textarea>                                
                            
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="inicio">Fecha Inicio</label>
                                   <input type="date" name="inicio" class="form-control" value="{{ $proyecto->inicio }}">
                                </div>
                            </div>
    
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="fin">Fecha Fin</label>
                                   <input type="date" name="fin" class="form-control" value="{{ $proyecto->fin }}">
                                </div>
                            </div>
    
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="Presupuesto">Presupuesto</label>
                                   <input type="number" name="Presupuesto" class="form-control" value="{{ $proyecto->Presupuesto }}">
                                </div>
                            </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>                            
                    </div>
                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection