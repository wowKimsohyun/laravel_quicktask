@extends('admin.master')
@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">@lang('label.edit_product')</h1>

        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">@lang('label.name')</label>
                            <input type="text" class="form-control @error ('name') focus @enderror" id="name" placeholder="@lang('label.enter_name')" name="name" value="{{ $product->name }}">
                            @error('name')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">@lang('label.description')</label>
                            <textarea rows="3" class="form-control @error ('description') focus @enderror" id="description" placeholder="@lang('label.enter_description')" name="description">{{ $product->description }}</textarea>
                            @error('description')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type='file' id="input-img" name="photo"/>
                            <img id="img-preview" src="{{ asset(config('img.img_path') . $product->img_url) }}"/>
                            @error('photo')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">@lang('label.price')</label>
                            <input type="number" class="form-control @error ('price') focus @enderror" id="price" placeholder="@lang('label.enter_price')" name="price" value="{{ $product->price }}">
                            @error('price')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category">@lang('label.category')</label>
                            <select class="custom-select" id="category" name="category_id">
                                @foreach ($categories as $category)
                                    @if ($product->category->id == $category->id)
                                        <option selected value={{ $category->id }}>{{ $category->name }}</option>
                                    @else
                                        <option value={{ $category->id }}>{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('label.add')</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
