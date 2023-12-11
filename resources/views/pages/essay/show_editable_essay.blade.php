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
                                        {{-- <input id="myInput" type="text" placeholder="Search.." class="form-control"> --}}
                                    </div>
                                    <div class="col-2">
                                        {{-- <label for="searchbox" class="mt-2">Search</label> --}}
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-2">
                                        <a href="{{ route('essay.create') }}" class="btn btn-sm btn-outline-primary" style="float:right">Add
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
                                                {{-- <td>
                                                    <a href="{{route('essay.pdf', $item->id)}}" class="btn btn-outline-success btn-sm">Print</a>
                                                </td> --}}
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
    {{-- <script>
        $(document).ready(function() {

            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script> --}}
    

@endsection
