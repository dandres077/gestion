<div class="dropdown dropdown-inline">
	<button type="button" class="btn btn-brand btn-elevate-hover btn-icon btn-sm btn-icon-md btn-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="flaticon-more-1"></i>
	</button>
	<div class="dropdown-menu dropdown-menu-right">
		
		<a class="dropdown-item" href="{{ url('admin/silleteria/'.$id.'/edit')}}"><i class="la la-edit"></i>Editar</a>
		

		
		<form method="post" action="{{ url('admin/silleteria/'.$id)}}">
            @method('DELETE')
            {{ csrf_field() }}

            <button type="submit" type="button" class="dropdown-item"> <i class="la la-trash"></i>&nbsp;&nbsp;&nbsp;Eliminar</button>
        </form>  
        

        @if ($status==1)
        	
            <form method="post" action="{{ url('admin/silleteria/'.$id.'/inactive')}}">
                {{ csrf_field() }}
                <button type="submit" type="button" class="dropdown-item"><i class="la la-info-circle"></i>&nbsp;&nbsp;&nbsp;Inactivar</button>
            </form>
            
        @else
        	
            <form method="post" action="{{ url('admin/silleteria/'.$id.'/active')}}">
                {{ csrf_field() }}
                <button type="submit" type="button" class="dropdown-item"><i class="la la-info-circle"></i>&nbsp;&nbsp;&nbsp;Activar</button>
            </form>
            
        @endif

	</div>
</div>

