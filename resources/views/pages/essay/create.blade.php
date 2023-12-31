@extends('index')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-10 m-auto">
                <div class="card ">

                    <div class="card-body">
                        <form action="{{ route('essay.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Paragraph title </label>
                                <input type="text" name="title" class="form-control" placeholder="Paragraph title">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description1 </label>
                                <textarea id="summernote1" name="description1" class="note-editable"></textarea>
                                <span id="total-caracteres"> </span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description2 </label>
                                <textarea id="summernote2" name="description2"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description3 </label>
                                <textarea id="summernote3" name="description3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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
            // $('#summernote1').summernote();

            $("#summernote1").summernote({
                height: "200",
                callbacks: {
                    onKeydown: function(e) {
                        var limiteCaracteres = 500;
                        var caracteres = $(".note-editable").text();
                        var totalCaracteres = caracteres.length;

                        //Update value
                        $("#total-caracteres").text('Total No Character :'+totalCaracteres);

                        //Check and Limit Charaters
                        if (totalCaracteres >= limiteCaracteres) {
                            return false;
                        }
                    }
                }
            });
            $("#summernote1").summernote({
                height: "200",
                callbacks: {
                    onKeydown: function(e) {
                        var limiteCaracteres = 500;
                        var caracteres = $(".note-editable").text();
                        var totalCaracteres = caracteres.length;

                        //Update value
                        $("#total-caracteres").text('Total No Character :'+totalCaracteres);

                        //Check and Limit Charaters
                        if (totalCaracteres >= limiteCaracteres) {
                            return false;
                        }
                    }
                }
            });

            $('#summernote2').summernote();
            $('#summernote3').summernote();
        });
    </script>
@endsection
