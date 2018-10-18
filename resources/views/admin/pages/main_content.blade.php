@extends('admin.default_admin')
@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="table-responsive-sm">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr class="bg-primary">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Petugas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($clients as $client):?>
                    <tr>
                        <td>{{$i}}</td>
                        <td><a href="detail/{{$client->id}}">{{$client->nama}}</a></td>
                        <td>{{$client->keterangan}}</td>
                        <td>{{$client->petugas}}</td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection