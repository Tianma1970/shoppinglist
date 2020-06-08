@if(session('status'))

<div class="alert alert-success col-10">
    {{ session('status') }}
</div>

@endif
