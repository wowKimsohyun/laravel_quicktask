@extends('admin.master')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">@lang('label.create_category')</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="name">@lang('label.name')</label>
                        <input type="text" class="form-control" id="name" placeholder="@lang(label.enter_name)">
                    </div>
                    <button type="submit" class="btn btn-primary">@lang('label.add')</button>
                </form>
            </div>
        </div>
    </div>

  </div>
@endsection
