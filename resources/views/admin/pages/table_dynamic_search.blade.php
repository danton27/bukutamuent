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

                                <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th scope="col">No
                                        <th scope="col">Nama</th>
                                        <th scope="col">NRP</th>
                                        <th scope="col">No HP</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Petugas</th>
                                        <th scope="col">Proses</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($clients as $client)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$client->nama}}</td>
                                        <td>{{$client->nrp}}</td>
                                        <td>{{$client->nohp}}</td>
                                        <td>{{$client->email}}</td>
                                        <td>{{$client->keterangan}}</td>
                                        <td>{{$client->created_at}}</td>
                                        <td>{{$client->petugas}}</td>
                                        <td>{{$client->proses}}</td>
                                        <td>

                                            <form action="form/{{$client->id}}" method="post">
                                                <a href="form/{{$client->id}}/edit" class="btn btn-success">Edit</a>
                                                <button type="submit" name="submit" class="btn btn-danger" value="delete">Delete</button>
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    @endforeach

                                    </tbody>
                                </table>
                                {!! $clients->render() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
@endsection