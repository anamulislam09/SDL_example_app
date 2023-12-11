@extends('index')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Barcode Manage</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item active">Barcode Manage</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Form</h3>
                            </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-lg-5">
                                            <label>Product Code</label>
                                            <input type="text" class="form-control" name="productCode" id="productCode" placeholder="Product Code">
                                        </div>
                                        <div class="form-group col-lg-2">
                                            <label>Number of row</label>
                                            <input type="number" class="form-control" value="1" name="numRow" id="numRow" placeholder="Number of row">
                                        </div>
                                        <div class="form-group col-lg-2">
                                            <label>Number of Column</label>
                                            <input type="number" class="form-control" value="5" name="numCol" id="numCol" placeholder="Number of Column">
                                        </div>
                                        <div class="form-group col-lg-2">
                                            <label>Display Value</label><br>
                                            <input type="checkbox" id="displayValue" name="displayValue">
                                        </div>
                                        <div class="form-group col-lg-1" style="margin-top: 32px;">
                                            <button type="button" class="btn btn-primary btn-add">Print</button>
                                        </div>
                                    </div>
                                    <div id="barcodeDisplay">
                                        <svg class="barcode"></svg>
                                    </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        
<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.6/dist/barcodes/JsBarcode.code128.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript">
    $('#productCode, #numCol, #numRow, #displayValue').on('keyup chanage input', function(){
        productCode = $('#productCode').val();
        numCol = $('#numCol').val();
        numRow = $('#numRow').val();
        displayValue = $('#displayValue').is(":checked");
        
        var barcode = '';
        for(let i = 0; i<numRow; i++){
            for(let j = 0; j<numCol; j++){
                barcode += j==0? '<div class="row">' : '';
                barcode += '<svg class="barcode">uiewr</svg>';
                barcode += j==numCol-1? '</div>' : '';
            }
        }

        $('#barcodeDisplay').html(barcode);

        JsBarcode(".barcode", productCode, {
            // format: "upc",
            // lineColor: "#0aa",
            width: 1,
            height: 30,
            displayValue: displayValue
        });

    });
    $('.btn-add').click(function(){
        w=window.open();
        w.document.write($('#barcodeDisplay').html());
        w.print();
        w.close();
    });
</script>

    </div>
@endsection