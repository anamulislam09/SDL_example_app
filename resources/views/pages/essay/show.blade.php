@extends('index')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class=" container content mt-5" style="margin-bottom: 280px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <h3 class="card-title">All Essay list here</h3>
                                <a href="{{ route('essay.create') }}" class="btn btn-sm btn-primary" style="float:right">Add
                                    New</a>
                            </div> --}}

                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <input id="searchInput" type="text" placeholder="Search.." class="form-control">
                                    </div>
                                    <div class="col-2">
                                        <label for="searchbox" class="mt-2">Search</label>
                                    </div>
                                    <div class="col-2">
                                        {{-- <a href="{{ route('essay.editeditable') }}" class="btn btn-sm btn-outline-info" style="float:right">Editable essay
                                            </a> --}}
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ route('essay.create') }}" class="btn btn-sm btn-outline-primary"
                                            style="float:right">Add
                                            New</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Title</th>
                                            <th>Description2</th>
                                            <th>Description3</th>
                                            <th>Description1</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{!! $item->description1 !!}</td>
                                                <td>{!! $item->description2 !!}</td>
                                                <td>{!! $item->description3 !!}</td>
                                                <td>{!! $item->date !!}</td>
                                                <td>
                                                    <a href="{{ route('essay.pdf', $item->id) }}"
                                                        class="btn btn-outline-success btn-sm">Print</a>
                                                    <a href="{{ route('essay.edit', $item->id) }}"
                                                        class="btn btn-outline-primary btn-sm">Edit</a>
                                                    <a href="{{ route('essay.delete', $item->id) }}"
                                                        class="btn btn-outline-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // Hide the entire table initially
            $('table').hide();
            $('#searchInput').on('input', function() {
                var searchText = $(this).val().toLowerCase();
                // Show/hide the entire table based on the search input
                if (searchText === '') {
                    $('table').hide();
                } else {
                    $('table').show();
                }
                // Loop through each table row
                $('table tbody tr').each(function() {
                    var rowData = $(this).text().toLowerCase();
                    // Show/hide the row based on the search input
                    if (rowData.includes(searchText)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
@endsection
