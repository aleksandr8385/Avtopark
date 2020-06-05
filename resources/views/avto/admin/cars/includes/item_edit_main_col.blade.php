<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="cart-title"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav" data-toggle="tab" href="#maindata" role="tab">Машины</a>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane active" id="maindata" role="tabpanel">
                            <div class="form-group">
                                <label for="number">Номер</label>
                                <input name="number" value="{{ $item->number}}"
                                        id="number"
                                        class="form-control"
                                        required>
                                
                            </div>
                            <div class="form-group">
                                <label for="name_driver">Имя Водителя</label>
                                <input name="name_driver" value="{{ $item->name_driver}}"
                                        id="name_driver"
                                        class="form-control"
                                        required>
                                
                            </div>
                            
                            
                        </div>
                
                     </div>
                </div>
            </div>
        </div>
    </div>

</div>