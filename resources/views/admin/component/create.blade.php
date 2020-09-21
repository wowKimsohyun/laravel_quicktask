@extends('admin.master')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">@lang('label.create_product')</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <form>
                    @csrf
                    <div class="form-group">
                    <label for="name">@lang('label.name')</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="@lang(label.enter_name)">
                    </div>
                    <div class="form-group">
                        <label for="description">@lang('label.description')</label>
                        <input type="text" class="form-control" id="description" placeholder="@lang(label.enter_description)">
                    </div>
                    <div class="form-group">
                        <input type='file' id="input-img"/>
                        <img id="img-preview" src="#" class="d-none"/>
                    </div>
                    <div class="form-group">
                        <label for="price">@lang('label.price')</label>
                        <input type="number" class="form-control" id="price" placeholder="@lang(label.enter_price)">
                    </div>
                    <div class="form-group">
                        <label for="category">@lang('label.category')</label>
                        <select class="custom-select" id="category">
                            <option selected>@lang(label.chose)</option>
                            <option value="1">@lang(label.pant)</option>
                            <option value="2">@lang(label.short)</option>
                            <option value="3">@lang(label.shirt)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">@lang('label.add')</button>
                </form>
            </div>
        </div>
    </div>

  </div>
@endsection
