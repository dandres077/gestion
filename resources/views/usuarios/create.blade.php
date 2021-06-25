@extends('layouts.app')

@section('title', 'Usuarios'.' | '.config('app.name'))

@section('style')
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
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
                <a href="{{ url ('admin/usuarios')}}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ url ('admin/usuarios')}}" class="kt-subheader__breadcrumbs-link">
                Usuarios  </a>
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
                        <h3 class="kt-portlet__head-title">Ingrese la información</h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <form method="post" class="form-horizontal" action="{{ url('admin/usuarios/store')}}" autocomplete="off" onsubmit="return validar(this)">
                    {{ csrf_field()}}
                        <div class="row">
                            <div class="col-xl-3"></div>
                            <div class="col-xl-6">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">                                      

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Nombre</label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Apellido</label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="last" name="last" value="{{ old('last') }}" required="">
                                            </div>
                                        </div>                                      

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Email</label>
                                            <div class="col-9">
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required="">
                                            </div>
                                        </div>                                        
                                        
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Contraseña</label>
                                            <div class="col-9">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                    <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required="">
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Rol</label>
                                            <div class="col-9">
                                                @foreach ($roles as $rol)
                                                <input type="checkbox" value="{{$rol->id}}" name="roles[]" id="roles[]"> {{ $rol->name }} </label><br>
                                                @endforeach                                                 
                                            </div>
                                        </div>

                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Empresa </label>
                                            <div class="col-9">
                                                <select class="form-control" name="empresa_id" id="empresa_id">
                                                @foreach ($empresas as $empresa)
                                                <option value="{{ $empresa->id }}"> {{ $empresa->nombre }}</option>
                                                @endforeach                                         
                                                </select>
                                            </div>
                                        </div> 

                                        <div class="kt-form__actions">
                                            @can('usuarios.store')
                                            <button type="submit" class="btn btn-primary" name="enviar">Crear</button>
                                            @endcan
                                            <a href="{{ url ('admin/usuarios')}}" class="btn btn-secondary">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-xl-3"></div>
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
