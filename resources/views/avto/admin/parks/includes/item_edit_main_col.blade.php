<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="cart-title"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#maindata" role="tab">Основные данные</a>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane active" id="maindata" role="tabpanel">
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input name="title" value="{{ $item->title}}"
                                        id="title"
                                        class="form-control"
                                        required>
                                
                            </div>
                            <div class="form-group">
                                <label for="address">Адрес</label>
                                <input name="address" value="{{ $item->address}}"
                                        id="address"
                                        class="form-control"
                                        required>
                                
                            </div>
                            <div class="form-group">
                                <label for="schedule">График работы</label>
                                <input name="schedule" value="{{ $item->schedule}}"
                                        id="schedule"
                                        class="form-control"
                                        required>
                                
                            </div>
                            <div class="form-group">
                                <label for="avto_id">Машина</label>
                                <input name="avto_id" value="{{ $item->avto_id}}"
                                        id="avto_id"
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