@extends('layouts.app')

@section('title', $titulo .' | '.config('app.name'))

@section('style')

@endsection

@section('content')

<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Dashboard </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="{{ url ('admin/empresas')}}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ url ('admin/empresas')}}" class="kt-subheader__breadcrumbs-link">
                {{ $titulo }}</a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                Crear </a>
            </div>
        </div>
    </div>
</div>

<!-- end:: Subheader -->

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">{{ $titulo }}</h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <form method="post" class="form-horizontal" action="{{ url('admin/empresas/'.$data->id.'/edit')}}" autocomplete="off" enctype="multipart/form-data" onsubmit="return validar(this)">
                    {{ csrf_field()}}
                        <div class="row">
                            <div class="col-6">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">  

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Nombre </label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $data->nombre) }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Razón social </label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="razon_social" name="razon_social" value="{{ old('razon_social', $data->razon_social) }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Tipo documento </label>
                                            <div class="col-9">
                                                <select class="form-control" name="tipo_documento" id="tipo_documento">
                                                @foreach ($tipo_doc as $tipo)
                                                    <option value="{{$tipo->id}}" @if($data->tipo_documento==$tipo->id) selected @endif> {{ $tipo->opcion, $data->tipo_documento }}</option>
                                                @endforeach 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">N° documento </label>
                                            <div class="col-9">
                                            <input type="number" class="form-control" id="n_documento" name="n_documento" value="{{ old('n_documento', $data->n_documento) }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">País </label>
                                            <div class="col-9">
                                                <select class="form-control" name="pais_id" id="pais_id">
                                                @foreach ($paises as $paises)
                                                    <option value="{{$paises->id}}" @if($data->pais_id==$paises->id) selected @endif> {{ $paises->nombre, $data->pais_id }}</option>
                                                @endforeach                                                  
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Departamento</label>
                                            <div class="col-9">
                                                <select class="form-control" name="departamento_id" id="departamento_id">
                                                @foreach ($dptos as $dpto)
                                                <option value="{{$dpto->id}}" @if($data->departamento_id==$dpto->id) selected @endif> {{ $dpto->nombre, $data->departamento_id }}</option>
                                                @endforeach                                                 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Ciudad</label>
                                            <div class="col-9">
                                                <select class="form-control" name="ciudad_id" id="ciudad_id">
                                                @foreach ($ciudades as $ciudad)
                                                <option value="{{$ciudad->id}}" @if($data->ciudad_id==$ciudad->id) selected @endif> {{ $ciudad->nombre, $data->ciudad_id }}</option>
                                                @endforeach                                         
                                                </select>
                                            </div>
                                        </div>                                                                         
                                    </div>
                                </div>    
                            </div>
                            <div class="col-6">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">                                   

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Dirección </label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $data->direccion) }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Teléfono </label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $data->telefono) }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Celular </label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="celular" name="celular" value="{{ old('celular', $data->celular) }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Email</label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $data->email) }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Imágen</label>
                                            <div class="col-9">
                                            <input type="file" class="form-control-file" name="imagen" id="imagen">
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                        <label class="col-3 col-form-label">Imágen actual</label>
                                        <div class="col-9">@if ($data->imagen != null) <img src="{{$data->imagen}}" width="100px" height="100px"> @else No se ha cargado una imágen @endif </div>
                                        </div>


                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                        <div class="kt-form__actions">
                                            @can('empresas.update')
                                            <button type="submit" class="btn btn-primary" name="enviar">Actualizar</button>
                                            @endcan
                                            <a href="{{ url ('admin/empresas')}}" class="btn btn-secondary">Cancelar</a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>

            <!--end::Portlet-->
        </div>
    </div>
</div>

<!-- end:: Content -->

@endsection
    
@section('scripts')
<script type="text/javascript">
      $('#pais_id').on('change', function(e){
        var pais_id = e.target.value;

        $.get('{{env("APP_URL")}}/api/departamentos/' + pais_id,function(data) {
          console.log(data);

          $('#departamento_id').empty();
          $('#ciudad_id').empty();

          $.each(data, function(index, regenciesObj){
            $('#departamento_id').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.nombre +'</option>');
          })
        });



      });


      $('#departamento_id').on('change', function(e){
        var departamento_id = e.target.value;
        var pais_id = $("#pais_id").val();

        $.get('{{env("APP_URL")}}/api/pais/' + pais_id + '/departamento/' + departamento_id, function(data) {
          console.log(data);

          $('#ciudad_id').empty();

          $.each(data, function(index, regenciesObj){
            $('#ciudad_id').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.nombre +'</option>');
          })
        });
      });

</script>

@endsection
