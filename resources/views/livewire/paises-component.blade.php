<div class="row">    
    <div class="col-sm-3">    
    @include("paises.$view")
    
    @if (session('success'))
        <div class="alert alert-primary" role="alert">
        {{ session('success') }}
        </div>
    @endif

    </div> 
    <div class="col-sm-9">
        @include('paises.table')
    </div>        
</div>

