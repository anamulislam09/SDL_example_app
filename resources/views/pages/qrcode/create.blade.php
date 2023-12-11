@extends('index')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                   
                    <div class="card-body">
                        <form style="width: 26rem;" action="{{ route('qrcode.index') }}" method="POST" id="createForm">
                            @csrf
                            <!-- que input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Enter a code</label>
                                <input type="text" name="code" id="code" placeholder="Enter a code"
                                    class="form-control" />
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">No of QR code</label>
                                <input type="number" name="number" id="" placeholder="Enter a number"
                                    class="form-control" />
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary mb-4">Submit</button>
                            {{-- <a href="" class="btn btn-primary">Download Questions</a> --}}
                            {{-- <button type="submit" class="btn btn-primary mb-4">Submit</button> --}}
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- <script type="text/javascript">
        $('#btn-add').on('click', function() {

            code = $('#code').val();
            $('#barco').text(code);
        //    console.log(code);
        });

    </script> --}}
@endsection
