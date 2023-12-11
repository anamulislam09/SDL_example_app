@extends('index')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-10 m-auto">
                <div class="card ">
                   
                    <div class="card-body">
                        <form action="{{route('essay.update')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Paragraph title </label>
                              <input type="text" value="{{ $data->title }}" name="title" class="form-control" placeholder="Paragraph title">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Description1 </label>
                              <textarea id="summernote1" name="description1">{{ $data->description1 }}</textarea>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Description2 </label>
                              <textarea id="summernote2" name="description2">{{ $data->description2 }}</textarea>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Description3 </label>
                              <textarea id="summernote3" name="description3">{{ $data->description3 }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote1').summernote();
            $('#summernote2').summernote();
            $('#summernote3').summernote();
        });
      </script>

@endsection
