@extends('admin.master')

@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">@lang('label.table')</h1>
        
        <div class="card shadow mb-4">  
            <div class="button-container">
                <a href="{{ route('products.create') }}" class="btn btn-primary">@lang('label.add')</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="width">@lang('label.name')</th>
                                <th>@lang('label.description')</th>
                                <th>@lang('label.image')</th>
                                <th class="width">@lang('label.price')</th>
                                <th class="width">@lang('label.category')</th>
                                <th class="width">@lang('label.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td><img src="{{ asset(config('img.img_path') . $product->img_url) }}" class="img-fluid"></td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', [$product->id]) }}" type="button" class="btn btn-secondary">@lang('label.edit')</a>
                                        <form class="form-custom" method="post" action="{{ route('products.destroy', [$product->id]) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">@lang('label.delete')</button>
                                        </form>
                                    </td>
                                <tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
