<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav" data-toggle="tab" href="#maindata" role="tab">Машины</a>
                    </li>
                </ul>
                <br>
                    <div class="tab-content">
                        <div class="tab-pane active" id="maindata" role="tabpanel">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th id='num'>Номер машины</th>
                                                <th>Имя водителя</th>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center"><a href="#num" class="btn btn-danger remove">-</a></td>
                                                <td><input type="text" name ='car_number[]' class="form-control"></td>
                                                <td><input type="text" name ='driver_name[]' class="form-control"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id = "plus">
                                                <th style="text-align: center" ><a href="#num" class="btn btn-info addRow">+</a></th>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow(){
        var tr = '<tr>'+
                        '<td style="text-align: center"><a href="#num" class="btn btn-danger remove">-</a></td>'+
                        '<td><input type="text" name = "car_number[]" class="form-control"></td>'+
                        '<td><input type="text" name = "driver_name[]" class="form-control"></td>'+
                        
                '</tr>';
              
                $('#plus').before( tr );
        
    };

    $('tbody').on('click','.remove', function(){
        $(this).parent().parent().remove();
    });

</script>
