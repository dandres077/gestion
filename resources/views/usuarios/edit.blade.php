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
                <a href="{{ url ('user')}}" class="kt-subheader__breadcrumbs-link">
                 Usuarios </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                Actualizar </a>
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
                    <form method="post" class="form-horizontal" action="{{ url('admin/usuarios/'.$user->id.'/edit')}}" autocomplete="off" enctype="multipart/form-data">
                    {{ csrf_field()}}
                        <div class="row">
                            <div class="col-xl-3"></div>
                            <div class="col-xl-6">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">  

                                    <div class="form-group row">
                                            <label class="col-3 col-form-label">Empresa</label>
                                            <div class="col-9">
                                                <select class="form-control" name="empresa_id" id="empresa_id">
                                                @foreach ($empresas as $empresa)
                                                <option value="{{$empresa->id}}" @if($user->empresa_id==$empresa->id) selected @endif> {{ $empresa->nombre, $user->empresa_id }}</option>
                                                @endforeach                                         
                                                </select>
                                            </div>
                                        </div>                                                                    

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Nombre</label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Apellido</label>
                                            <div class="col-9">
                                            <input type="text" class="form-control" id="last" name="last" value="{{ old('last', $user->last) }}" required="">
                                            </div>
                                        </div>                                        

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Email</label>
                                            <div class="col-9">
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                                            </div>
                                        </div>         

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Contrase&ntilde;a</label>
                                            <div class="col-9">
                                                <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_5">Cambiar</button>
                                            </div>
                                        </div>                               

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Rol</label>
                                            <div class="col-9">
                                            @foreach ($roles as $rol)
                                                @foreach ($rol_user as $user)   
                                                    @if($rol->id == $user->role_id)
                                                        <label> <input type="checkbox" value="{{$rol->id}}" name="roles[]" id="roles[]" checked="checked"> {{ $rol->name }} </label><br>
                                                    @break   
                                                    @endif
                                                @endforeach

                                                    @if($rol->id == $user->role_id)
                                                        
                                                    @else
                                                        <label> <input type="checkbox" value="{{$rol->id}}" name="roles[]" id="roles[]"> {{ $rol->name }} </label><br>
                                                    @endif
                                            @endforeach                                             
                                            </div>
                                        </div>                                        

                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>                                       


                                        <div class="kt-form__actions">
                                            @can('usuarios.update')
                                            <button type="submit" class="btn btn-primary">Actualizar</button>
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

<!--begin::Modal-->
<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar contrase&ntilde;a</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('admin/usuarios/pwd')}}" autocomplete="off">
                {{ csrf_field()}}
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Contrase&ntilde;a:</label>
                        <input type="hidden" class="form-control" name="user_id" value="{{ $id }}">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--end::Modal-->

<!-- end:: Content -->

@endsection
    
@section('scripts')

@endsection
