@extends('admin.master')

@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">@lang('label.table')</h1>
        
        <div class="card shadow mb-4">  
            <div class="button-container">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">@lang('label.add')</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>@lang('label.id')</th>
                                <th>@lang('label.name')</th>
                                <th>@lang('label.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $category)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', [$category->id]) }}" type="button" class="btn btn-secondary">@lang('label.edit')</a>
                                        <form class="form-custom" method="post" action="{{ route('categories.destroy', [$category->id]) }}">
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
