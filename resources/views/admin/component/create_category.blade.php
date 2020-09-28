@extends('admin.master')
@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">@lang('label.create_product')</h1>

        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">@lang('label.name')</label>
                            <input type="text" class="form-control @error ('name') focus @enderror" id="name" placeholder="@lang('label.enter_name')" name="name">
                            @error ('name')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('label.add')</button>
                    </form>
                </div>
            </div>
        </div>

  </div>
@endsection
