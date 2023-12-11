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
                <h3 class="card-title">All assignment list here</h3>
                <a href="{{ route('assignMaster.create') }}" class="btn btn-sm btn-outline-primary" style="float:right">Add New</a>
              </div>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Question id</th>
                    <th> Department id</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->que_id}}</td>
                    <td>{{$item->dept_id}}</td>
                  
                    <td>
                        <a href="{{ route('assignMaster.edit', $item->id) }}"
                            class="btn btn-sm btn-info edit">Edit</a>
                        <a href="{{ route('assignMaster.delete', $item->id) }}" class="btn btn-sm btn-danger">delete</a>
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