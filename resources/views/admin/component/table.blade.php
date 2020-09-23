@extends('admin.master')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">@lang('label.table')</h1>
        

        <!-- DataTales Example -->
        <div class="card shadow mb-4">  
            <div class="button-container">
                <button type="button" class="btn btn-primary">@lang('label.add')</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>@lang('label.name')</th>
                                <th>@lang('label.description')</th>
                                <th>@lang('label.image')</th>
                                <th>@lang('label.price')</th>
                                <th>@lang('label.category')</th>
                                <th>@lang('label.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
    </div>
@endsection
