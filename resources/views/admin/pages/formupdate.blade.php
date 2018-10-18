@extends('admin.default_admin')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Edit <small>data</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form method="post" action="/form/{{$model->id}}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namalengkap">Nama <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="namalengkap" name="namalengkap" required="required" value="{{$model->nama}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nrp">NRP <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="nrp" name="nrp" value="{{$model->nrp}}" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomerhp" class="control-label col-md-3 col-sm-3 col-xs-12">No HP</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="nomerhp" value="{{$model->nohp}}" class="form-control col-md-7 col-xs-12" type="text" name="nomerhp">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="emailclient" class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="emailclient" name="emailclient" value="{{$model->email}}" class="date-picker form-control col-md-7 col-xs-12" required="required" type="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="keterangan" name="keterangan" value="{{$model->keterangan}}" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="petugas" class="control-label col-md-3 col-sm-3 col-xs-12">Petugas<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="petugas" name="petugas" value="{{$model->petugas}}" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="proses" class="control-label col-md-3 col-sm-3 col-xs-12">Proses<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="proses" name="proses" id="radio1" class="form-check form-check-inline"  type="radio" value="Belum" checked>
                                            <label class="form-check-label" for="radio1">Belum</label>
                                            <input id="proses" name="proses" id="radio2" class="form-check form-check-inline"  type="radio" value="Selesai">
                                            <label for="radio2" class="form-check-label"> Selesai </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" name="_method" value="PUT" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            {{csrf_field()}}
                                            <button type="submit" name="submit" value="edit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                </form>
            </div>
        </div>

        <!-- /page content -->
@endsection

