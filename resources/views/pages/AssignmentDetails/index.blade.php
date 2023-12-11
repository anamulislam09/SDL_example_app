@extends('index')

@section('content')
    <div class="content-wrapper">

        <div class="container">

            {{-- table start here --}}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All assignment list here</h3>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="dept_id" class="form-label">Select Department:</label>
                            <select name="dept_id" id="dept" class="form-control">
                                <option value="" selected disabled>Select Once</option>
                                @foreach ($data as $item)
                                    <option value="{{ $item->id }}">{{ $item->dept }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Question name</th>
                            </tr>
                        </thead>
                        <tbody class="item-table">

                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.content -->
        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <script>
        //  $(document).ready(function() {
        //       $("#category").change(function() {
        //         let categoryid = $(this).val();
        //         $("#subcategory").html('<option value="">Select One</option>')
        //         $.ajax({
        //           url: '/childcategory/subcategory',
        //           type: 'post',
        //           data: 'categoryid=' + categoryid + '&_token={{ csrf_token() }}',
        //           success: function(result) {
        //             $('#subcategory').html(result);
        //           }
        //         });
        //       });
        //       });

        $(document).ready(function() {
            $("#dept").change(function() {
                let deptId = $(this).val();
                $.ajax({
                    url: '{{ url('/get-questions') }}',
                    type: 'post',
                    data: {
                        'deptid': deptId,
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(result) {
                      var tbody = '';
                      for (let i = 0; i < result.length; i++) {
                          tbody += '<tr>'
                          tbody += '<td>' + result[i].questions + '</td>'
                          tbody += '</tr>'
                        }
                        $('.item-table').html(tbody);
                    }
                   
                });
            });

        });
    </script>
@endsection
