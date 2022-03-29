@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    @if ($category->exists)
        <form action='{{ route('admin.categories.update', $category->id) }}' method='POST'>
            @method('PUT')
        @else
            <form action="{{ route('admin.categories.store') }}" method="POST">
    @endif
    @csrf


    <div class="form-group">
    </div>
   
    <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</div>

<script src="{{ asset('js/image-preview.js') }}" defer>
</script>
