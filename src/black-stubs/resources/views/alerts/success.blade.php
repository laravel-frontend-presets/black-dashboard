@if (session($key ?? 'status'))
    <div class="alert alert-success" role="alert">
        {{ session($key ?? 'status') }}
    </div>
@endif
