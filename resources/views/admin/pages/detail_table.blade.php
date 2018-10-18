@extends('admin.default_admin')
<!-- page content -->
@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tabel BukuTamu  <strong>ENT</strong></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form action="{{route('search')}}">
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-6">
                                        <div class="input-group">
                                            <input type="text" name="katakunci" class="form-control" placeholder="Cari Data ...">
                                            <span class="input-group-btn">
                                             <button class="btn btn-default" type="submit">Cari</button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                                </div>
                            </form>

                            <table class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr class="bg-primary">
                                    <th scope="col">Nama</th>
                                    <th scope="col">NRP</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Petugas</th>
                                    <th scope="col">Proses</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$clients->nama}}</td>
                                        <td>{{$clients->nrp}}</td>
                                        <td>{{$clients->nohp}}</td>
                                        <td>{{$clients->email}}</td>
                                        <td>{{$clients->keterangan}}</td>
                                        <td>{{$clients->created_at}}</td>
                                        <td>{{$clients->petugas}}</td>
                                        <td>{{$clients->proses}}</td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection