@extends('index')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-6">
                                <input id="myInput" type="text" placeholder="Search.." class="form-control">
                            </div>
                            <div class="col-3">
                                <label for="searchbox" class="mt-2">Search</label>
                            </div>
                            <div class="col-3">
                                <a class="btn btn-outline-primary" href="{{ route('home') }}">Add new</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class=" mt-3">
                            <strong class="m-auto">
                                <caption> All Questions</caption>
                            </strong>
                            <table class="table table-bordered" id="searchTable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Questions</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable" class="tbl">
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->questions }}</td>
                                            <td>{{ $item->remarks }}</td>
                                            <td>
                                                <a href="{{ route('data.edit', $item->id) }}"
                                                    class="btn btn-sm btn-info edit">Edit</a>
                                                <a href="{{ route('data.delete', $item->id) }}"
                                                    class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('generatePdf') }}" class="btn btn-primary">Show Questions</a>
                        <a href="{{ route('downloadPdf') }}" class="btn btn-primary">Download Questions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

@endsection
