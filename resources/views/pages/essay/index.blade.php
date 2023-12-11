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
                                <h3 class="card-title">All Essay list here</h3>
                                <a href="{{ route('essay.create') }}" class="btn btn-sm btn-outline-primary" style="float:right">Add
                                    New</a>
                                <a href="{{ route('essay.show') }}" class="btn btn-sm btn-outline-primary" style="float:right,margin-left:5px">See All essay</a>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
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
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{!! $item->description1 !!}</td>
                                                <td>{!! $item->description2 !!}</td>
                                                <td>{!! $item->description3 !!}</td>
                                                <td>{!! $item->date !!}</td>
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
