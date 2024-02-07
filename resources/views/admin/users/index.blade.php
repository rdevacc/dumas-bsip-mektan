@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Card Body -->

                        <h4 class="card-title mr-4 pr-4">Data Users / PJ</h4>
                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{ route('user-create') }}" class="btn btn-primary justify-content-end py-2 px-4">Tambah
                                User</a>
                        </div>

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Layanan</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataUser as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->jenisPengaduan->nama }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>Edit | Delete</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
