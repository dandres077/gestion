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
                <a href="{{ url ('admin/profesionales')}}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ url ('admin/profesionales')}}" class="kt-subheader__breadcrumbs-link">
                {{ $titulo }}</a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                Editar </a>
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
                    <form method="post" class="form-horizontal" action="{{ url('admin/profesionales/'.$data->id.'/edit')}}" autocomplete="off" enctype="multipart/form-data" onsubmit="return validar(this)">
                    {{ csrf_field()}}
                        <div class="row">
                            <div class="col-6">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">  

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Usuario </label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" value="{{ $usuario->nombre }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Dirección </label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $data->direccion) }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Ciudad </label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ old('ciudad', $data->ciudad) }}" required="">
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
                                            <label class="col-3 col-form-label">Genero </label>
                                            <div class="col-9">
                                                <select class="form-control" name="genero_id" id="genero_id">
                                                @foreach ($generos as $genero)
                                                    <option value="{{$genero->id}}" @if($data->genero_id==$genero->id) selected @endif> {{ $genero->opcion, $data->genero_id }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Tipo documento </label>
                                            <div class="col-9">
                                                <select class="form-control" name="tipo_documento_id" id="tipo_documento_id">
                                                @foreach ($tipo_docs as $tipo)
                                                    <option value="{{$tipo->id}}" @if($data->tipo_documento_id==$tipo->id) selected @endif> {{ $tipo->opcion, $data->tipo_documento_id }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">N° documento</label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="n_documento" name="n_documento" value="{{ old('n_documento', $data->n_documento) }}" required="">
                                            </div>
                                        </div>                                                                
                                    </div>
                                </div>    
                            </div>
                            <div class="col-6">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">   

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Fecha de nacimiento</label>
                                            <div class="col-9">
                                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $data->fecha_nacimiento) }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Estado civl </label>
                                            <div class="col-9">
                                                <select class="form-control" name="civil_id" id="civil_id">
                                                @foreach ($civiles as $civil)
                                                    <option value="{{$civil->id}}" @if($data->civil_id==$civil->id) selected @endif> {{ $civil->opcion, $data->civil_id }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>                                 

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Estudios</label>
                                            <div class="col-9">
                                                <textarea class="form-control" id="estudios" name="estudios" rows="3">{{ old('estudios', $data->estudios) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Perfil profesional</label>
                                            <div class="col-9">
                                            <textarea  class="form-control" id="perfil" name="perfil" rows="3">{{ old('perfil', $data->perfil) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Experiencia</label>
                                            <div class="col-9">
                                            <textarea class="form-control" id="experiencia" name="experiencia">{{ old('experiencia', $data->experiencia) }}</textarea>
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

                                        <div class="hr-line-dashed"></div>

                                        <div class="kt-form__actions">
                                            @can('profesionales.update')
                                            <button type="submit" class="btn btn-primary" name="enviar">Actualizar</button>
                                            @endcan
                                            <a href="{{ url ('admin/profesionales')}}" class="btn btn-secondary">Cancelar</a>
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


@endsection
