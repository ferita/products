<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputName" class="font-weight-bold">Название продукта *</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" name = "name" id="exampleInputName" value="{{ old('name', '') }}" placeholder="Не менее 10 символов">
        @if ($errors->has('name'))
            <div class="inputError">
                {{ $errors->first('name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputArt" class="font-weight-bold">Артикул *</label>
        <input type="text" class="form-control {{ $errors->has('art') ? 'border-danger' : '' }}" name = "art" id="exampleInputArt" value="{{ old('art', '') }}" placeholder="Только латинские символы и цифры">
        @if ($errors->has('art'))
            <div class="inputError">
                {{ $errors->first('art') }}
            </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary mt-4">Сохранить</button>
</form>
