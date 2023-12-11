@extends('index')

@section('content')
    <style>
        .para-title {
            text-align: center;
        }
    </style>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class=" container content mt-5" style="margin-bottom: 280px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-4">
                                        <p>No of Edit {{ $data->update_id }}</p>
                                    </div>
                                    <div class="col-5 text-center">
                                        <h2>SYS DEV LTD</h2>
                                        <h5>LR Tower, Malibag.</h5>
                                    </div>

                                    <div class="col-3">
                                        <p>{!! $data->date !!}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="para-title">
                                    <h2>{{ $data->title }}</h2>
                                </div>
                                <div class="para-body">
                                    <p>{!! $data->description1 !!}</p>
                                    <p>{!! $data->description2 !!}</p>
                                    <p>{!! $data->description3 !!}</p>
                                </div>
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
