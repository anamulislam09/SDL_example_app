@extends('index')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class=" container content mt-5" style="margin-bottom: 280px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All department list here</h3>
                                <a href="{{ route('dept.create') }}" class="btn btn-sm btn-primary" style="float:right">Add
                                    New</a>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Department Name</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->dept }}</td>

                                                <td>
                                                    <a href="{{ route('dept.edit', $item->id) }}"
                                                        class="btn btn-sm btn-info edit">Edit</a>
                                                    <a href="{{ route('dept.delete', $item->id) }}"
                                                        class="btn btn-sm btn-danger">delete</a>
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
@endsection
