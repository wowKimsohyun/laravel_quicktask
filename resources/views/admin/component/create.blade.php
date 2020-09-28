@extends('admin.master')
@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">@lang('label.create_product')</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">@lang('label.name')</label>
                            <input type="text" class="form-control @error ('name') focus @enderror" id="name" value="{{ old('name') }}" placeholder="@lang('label.enter_name')" name="name">
                            @error ('name')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">@lang('label.description')</label>
                            <textarea rows="3" class="form-control @error ('description') focus @enderror" id="description" placeholder="@lang('label.enter_description')" name="description" value="{{ old('description') }}"></textarea>
                            @error('description')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type='file' id="input-img" name="photo"/>
                            <img id="img-preview" src="#" class="d-none"/>
                            @error('photo')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">@lang('label.price')</label>
                            <input type="number" class="form-control @error ('price') focus @enderror" id="price" placeholder="@lang('label.enter_price')" name="price" value="{{ old('price') }}">
                            @error('price')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category">@lang('label.category')</label>
                            <select class="custom-select" id="category" name="category_id">
                                <option selected>@lang('label.chose')</option>
                                @foreach ($categories as $category)
                                    <option value={{ $category->id }}>{{ $category->name }}</option>
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
