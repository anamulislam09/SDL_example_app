
@extends('index')

@section('content')
<div class="container mt-2">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form style="width: 26rem;" action="{{route('update.data')}}" method="POST">    
                  @csrf        
                  <input type="hidden" name="id" value="{{$data->id}}">
                    <!-- que input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="form4Example2">Enter a Question</label>
                      <input type="text" id="form4Example2" name="questions" value="{{ $data->questions }}" class="form-control" />
                    </div>
                  
                    <!-- Remarks input -->
                    <div data-mdb-input-init class="form-outline mb-4 me-auto">
                      <label class="form-label pr-5" for="form4Example3">Remarks</label>
                      <input type="text" id="form4Example2" value="{{ $data->remarks }}" name="remarks" class="form-control" />
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