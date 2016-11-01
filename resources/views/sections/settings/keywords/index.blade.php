@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/css/dataTables/dataTables.bootstrap.css') }}"/>
    <link href="{{ asset('css/tables.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section('content')
    <section class="content-header clearfix">
        <h1 class="pull-left">
            <i class="livicon" data-name="medkit" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
            Keywords
        </h1>
        <div class="pull-right">
            <a href="{{ route('settings_keywords_create') }}" class="btn btn-default">
                <span class="fa fa-plus"></span> New
            </a>
        </div>
    </section>

    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <table class="table table-bordered" id="table" data-url="{{ route('settings_keywords_index') }}">
                        <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>    <!-- row-->
    </section>
@stop

{{-- page level scripts --}}
@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/dataTables/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dataTables/dataTables.bootstrap.js') }}"></script>

    <script>
        $(function () {
            var table = $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: $('#table').data('url'),
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false}
                ],
                "createdRow": function (row, data, index) {
                    $('td', row).eq(3).html(
                   `<a href="/settings/keywords/edit/${data.id}" class="btn btn-sm btn-outline dark tooltips" data-container="body" data-placement="top" data-original-title="Show">
                        <i class="fa fa-pencil-square-o"></i>
                    </a>`
                    );
                }
            });
        });

    </script>
@stop
