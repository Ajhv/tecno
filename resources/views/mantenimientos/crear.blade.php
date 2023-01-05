@extends('layouts.app')

@section('content')
<section class="section">
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Crear Mantenimiento') }}</h1>
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

                <form action="{{ route('mantenimientos.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                               <label for="tipo">tipo</label>
                               <input type="text" name="tipo" class="form-control">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                               <label for="fecha_solicitud">fecha_solicitud</label>
                               <input type="date" name="fecha_solicitud" class="form-control">
                            </div>
                    </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                
                            <div class="form-floating">
                                <textarea class="form-control" name="descripcion" style="height: 100px"></textarea>
                                <label for="descripcion">descripcion</label>
                            </div>
                        </div>

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