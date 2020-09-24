@extends('admin.master')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">@lang('label.create_product')</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">@lang('label.name')</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="@lang('label.enter_name')" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">@lang('label.description')</label>
                        <textarea rows="3" class="form-control" id="description" placeholder="@lang('label.enter_description')" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type='file' id="input-img" name="photo"/>
                        <img id="img-preview" src="#" class="d-none"/>
                    </div>
                    <div class="form-group">
                        <label for="price">@lang('label.price')</label>
                        <input type="number" class="form-control" id="price" placeholder="@lang('label.enter_price')" name="price">
                    </div>
                    <div class="form-group">
                        <label for="category">@lang('label.category')</label>
                        <select class="custom-select" id="category" name="category_id">
                            <option selected>@lang('label.chose')</option>
                            @foreach($categories as $category)
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
