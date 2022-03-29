@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container text-center">
    <h2>Crea una nuova Categoria</h2>
    @if ($category->exists)
        <form action='{{ route('admin.categories.update', $category->id) }}' method='POST'>
            @method('PUT')
        @else
            <form action="{{ route('admin.categories.store') }}" method="POST">
    @endif
    @csrf


    <div class="form-group">
        <label for="category_name">Inserire il nome della categoria</label>
        <input type="text" name="name" id="category_name">
    </div>

    <div class="form-group">
        <label for="category_color">Inserire il colore della categoria</label>
        <input type="text" name="color" id="category_color">
    </div>

    <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</div>

<script src="{{ asset('js/image-preview.js') }}" defer>
</script>
