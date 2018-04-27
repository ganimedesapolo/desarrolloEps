@if(session('info'))
  	        <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
		             <span>&times;</span>
	            </button>
                 {{ session('info') }}
            </div>
@endif 