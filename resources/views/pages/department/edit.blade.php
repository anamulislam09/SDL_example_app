
@extends('index')

@section('content')
<div class="container mt-5" style="margin-bottom: 480px">
    <div class="row">
      <div class="col-sm-8 m-auto">
        <div class="card">
            <div class="card-body">
                <form style="width: 40rem;" action="{{route('dept.update')}}" method="POST">    
                  @csrf        
                  <input type="hidden" name="id" value="{{$data->id}}">
                    <!-- que input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="form4Example2">Department Name</label>
                      <input type="text" id="form4Example2" name="dept" value="{{ $data->dept }}" class="form-control" />
                    </div>
                   
                    <!-- Submit button -->
                    <input type="submit" value="Submit" class="btn btn-primary mb-4">
            </form>  
            </div>
        </div>
      </div>
    </div>
  </div>


  @endsection