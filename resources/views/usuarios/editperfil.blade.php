@extends('layouts.app')

@section('title', 'Perfil'.' | '.config('app.name'))

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
                <a href="{{ url ('admin/perfil')}}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ url ('admin/perfil')}}" class="kt-subheader__breadcrumbs-link">
                Perfil </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                Editar</a>
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
                    <h3 class="kt-portlet__head-title">Introduzca la información</h3>
                </div>

            </div>
            <div class="kt-portlet__body">
                <form method="post" class="form-horizontal" action="{{ url('admin/perfil/'.$user->id.'/edit')}}" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field()}}
                    <div class="row">
                        <div class="col-xl-3"></div>
                        <div class="col-xl-6">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body"> 

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Imágen</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-avatar kt-avatar--outline" id="kt_user_add_avatar">
                                                <div class="kt-avatar__holder" style="background-image: url({{asset($user->imagen)}})"></div>
                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Cambiar imágen">
                                                    <i class="fa fa-pen"></i>
                                                    <input type="file" id="imagen" name="imagen">
                                                </label>
                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancelar">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>              

                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Nombre</label>
                                        <div class="col-9">
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                                        </div>
                                    </div> 

                                    <div class="form-group form-show-validation row">
                                        <label class="col-3 col-form-label">Apellido </label>
                                        <div class="col-9">
                                        <div class="input-group date">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" id="last" name="last" value="{{ old('last', $user->last) }}">
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Email</label>
                                        <div class="col-9">
                                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" disabled="disabled">
                                        </div>
                                    </div> 
                                
                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                    <div class="kt-form__actions">
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                        <a href="{{ url ('admin/perfil')}}" class="btn btn-secondary">Cancelar </a>
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

<!-- Data picker -->
<script src="{{asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>

<!-- Date range use moment.js same as full calendar plugin -->
<script src="{{asset('js/plugins/fullcalendar/moment.min.js')}}"></script>

<!-- Date range picker -->
<script src="{{asset('js/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script>
    $(document).ready(function(){

        $('#data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });
    });       

</script>

<script type="text/javascript">
  $('#pais_id').on('change', function(e){
    console.log(e);
    var province_id = e.target.value;

    $.get('http://157.253.198.43/motcarV2/public/api/departamento/' + province_id,function(data) {
      console.log(data);

      $('#departamento_id').empty();

      $.each(data, function(index, regenciesObj){
        $('#departamento_id').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.nombre +'</option>');
      })
    });
  });

</script>

<script type="text/javascript">
  $('#departamento_id').on('change', function(e){
    console.log(e);
    var province_id = e.target.value;

    $.get('http://157.253.198.43/motcarV2/public/api/ciudad/' + province_id,function(data) {
      console.log(data);

      $('#ciudad_id').empty();

      $.each(data, function(index, regenciesObj){
        $('#ciudad_id').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.nombre +'</option>');
      })
    });
  });

</script>


@endsection
