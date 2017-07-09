@if(session()->has('message'))
    <div class="container">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" 
                    class="close" 
                    data-dismiss="alert" 
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Operacion Exitosa:</strong> {{ session()->get('message') }}
        </div>
    </div>
@endif