@extends('index')

@section('content')
    <div class="container mt-2">
        <div class="row">

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class=" mt-3">
                            <div class="row">
                                <div class="col-4">
                                    <strong class="m-auto">
                                        <caption> All Barcode</caption>
                                    </strong>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-3 hide">
                                    <a href="{{ route('barcode.create') }}" class="btn btn-outline-primary">Create another barcode</a>
                                </div>
                            </div>

                            <div class="row">
                                @for ($i = 1; $i <= $number; $i++)
                                    <div class="col-3 m-3">
                                        {{-- <div class=" p-3 "> {!! DNS2D::getBarcodeHTML("$data", 'QRCODE') !!}</div> --}}
                                        <div class="p-3">{!! DNS1D::getBarcodeHTML("$data", 'C128') !!}</div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" id="btn-print" onclick="printTable()" class="btn btn-primary hide">Print</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script type="text/javascript">
            function printTable(){
                $('.hide').hide();
                window.print();
            }
                // $('#btn-print').click(function() {
                //     w=window.open($('.display').text());
                //     w.document.write();
                //     w.print();
                //     w.close();
                // });
            </script>

    @endsection
