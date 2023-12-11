@extends('index')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card ">
                   <div class="card-header">
                   <div class="row">
                    <div class="col-9"></div>
                    <div class="col-3">
                        <a href="{{route('assignMaster.index')}}" class="btn btn-outline-primary">All Assignment</a>
                    </div>
                   </div>
                   </div>
                    <div class="card-body">
                        <form style="width: 26rem;" action="{{ route('asignMaster.stores') }}" method="POST" id="createForm">
                            @csrf
                            <!-- que input -->
                           <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form4Example2">Select Department</label>
                                <select name="dept_id" id="dept" class="form-control">
                                    <option value="" selected disabled>Select Once</option>
                                    @foreach ($dept as $item)
                                    <option value="{{$item->id}}">{{$item->dept}}</option>
                                    @endforeach
                                </select>
                        </div>

                            <!-- Remarks input -->
                            <div data-mdb-input-init class="form-outline mb-4 me-auto">
                                <label class="form-label pr-5" for="form4Example3">Select Questions</label>
                                <select name="questions_id" id="questions" class="form-control">
                                    <option value="" selected disabled>Select Once</option>
                                    @foreach ($que as $item)
                                    <option value="{{$item->id}}">{{$item->questions}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <button type="button" class="btn btn-primary mt-3 btn-sm" id="btn-add">ADD</button>

                            <div class="card-body">
                                <div class=" mt-3">

                                    <strong class="m-auto">
                                        <caption> All Assignment</caption>
                                    </strong>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Department Id</th>
                                                <th>Question Id</th>
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




        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script type="text/javascript">
        $('#btn-add').on('click', function() {
            var tbody = '';
            dept = $('#dept').val();
            questions = $('#questions').val();
            tbody += '<tr>'
            tbody += '<td class="serial"></td>'
            tbody += '<td>' + dept + '</td>'
            tbody += '<td>' + questions + '</td>'
            tbody += '<input type="hidden" name="dept[]" value="' + dept + '" />'
            tbody += '<input type="hidden" name="questions[]" value="' + questions + '" />'
            tbody += '</tr>'
            $('.item-table').append(tbody);
            setSerial();
            $('#dept').val('');
            $('#questions').val('');
        });

        // function setSerial() {
        //     var i = 1;
        //     $('.serial').each(function(key, element) {
        //         $(element).html(i++);
        //     });
        // }
    </script>
@endsection
