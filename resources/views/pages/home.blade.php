@extends('index')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                   
                    <div class="card-body">
                        <form style="width: 26rem;" action="{{ route('create') }}" method="POST" id="createForm">
                            @csrf
                            <!-- que input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form4Example2">Enter a Question</label>
                                <input type="text" name="questions" id="questions" placeholder="Enter a question"
                                    class="form-control" />
                            </div>

                            <!-- Remarks input -->
                            <div data-mdb-input-init class="form-outline mb-4 me-auto">
                                <label class="form-label pr-5" for="form4Example3">Remarks</label>
                                <input type="text" placeholder="Enter Remarks" id="remarks" name="remarks"
                                    class="form-control" />

                            </div>
                            <button type="button" class="btn btn-primary mt-3 btn-sm" id="btn-add">ADD</button>

                            <div class="card-body">
                                <div class=" mt-3">

                                    <strong class="m-auto">
                                        <caption> All Questions</caption>
                                    </strong>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Questions</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody class="item-table">
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary mb-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class=" mt-3">
                            <div class="row">
                                <div class="col-4">
                                    <strong class="m-auto">
                                        <caption> All Questions</caption>
                                    </strong>
                                </div>
                                <div class="col-3"></div>
                                <div class="col-5 pb-3">
                                    <a class="btn btn-outline-primary" href="{{ route('questions.show') }}">See all Questions</a>
                                </div>
                            </div>
            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Questions</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->questions }}</td>
                                            <td>{{ $item->remarks }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script type="text/javascript">
        $('#btn-add').on('click', function() {
            var tbody = '';
            questions = $('#questions').val();
            remarks = $('#remarks').val();
            tbody += '<tr>'
            tbody += '<td class="serial"></td>'
            tbody += '<td>' + questions + '</td>'
            tbody += '<td>' + remarks + '</td>'
            tbody += '<input type="hidden" name="questions[]" value="' + questions + '" />'
            tbody += '<input type="hidden" name="remarks[]" value="' + remarks + '" />'
            tbody += '</tr>'
            $('.item-table').append(tbody);
            setSerial();
            $('#questions').val('');
            $('#remarks').val('');
        });

        function setSerial() {
            var i = 1;
            $('.serial').each(function(key, element) {
                $(element).html(i++);
            });
        }
    </script>
@endsection
