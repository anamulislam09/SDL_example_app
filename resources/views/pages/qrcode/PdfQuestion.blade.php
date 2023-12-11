<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .header{
            background: #ddd
        }
    </style>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class=" mt-3">
                            <div class="row " id="code">
                                @for ($i = 1; $i <= $number; $i++)
                                    <div class="col-3 m-3 display">
                                        <div class=" p-3 ">
                                            {!! DNS2D::getBarcodeHTML("$data", 'QRCODE') !!}</div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card-footer">
                        <button type="button" id="btn-print" class="btn btn-primary">Print</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
