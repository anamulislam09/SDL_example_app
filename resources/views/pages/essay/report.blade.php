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

        .header {
            background: #ddd
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class=" mt-3">
                    <div class="row " id="code">
                        <div class="col-3 m-3 display">
                            <div class=" p-3 " style="width:20px">
                                {!! DNS2D::getBarcodeHTML("$data->title", 'QRCODE') !!}
                            </div>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class=" mt-3">

                    <div class="title">
                        <h3>{!! $data->title !!}</h3>
                    </div>
                    <div class="body">
                        <p>{!! $data->description1 !!}</p>
                        <p>{!! $data->description2 !!}</p>
                        <p>{!! $data->description3 !!}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
