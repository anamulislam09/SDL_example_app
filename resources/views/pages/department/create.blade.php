@extends('index')

@section('content')
  <div class="container content-wrapper mt-5" style="margin-bottom: 400px">
     <!-- Main content -->
     <div class="card" >
        <div class="card-header">
            <h3 class="card-title">Add Service Categhory</h3>
            <a href="{{ route('dept.index') }}" class="btn btn-sm btn-primary" style="float:right">Department list</a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('dept.store') }}" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="dept" class="form-label">Department Name:</label>
                    <input type="text" class="form-control @error('dept') is-invalid @enderror" value="{{ old('dept') }}" name="dept" id="dept" placeholder="Enter Department Name">
                </div>
                {{-- @error('dept')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
            </form>
    </div>
    <!-- /.content -->
   
  </div>

  @endsection