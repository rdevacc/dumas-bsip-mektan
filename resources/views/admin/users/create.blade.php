@extends('layouts.admin')

@section('content')
    <main id="main" class="main">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mr-4 pr-4">Tambah Data User</h4>
                        <form action="#">
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-1">
                                    <label for="nama" class="col-form-label">Nama</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="nama" class="form-control" autofocus autocomplete="off">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-1">
                                    <label for="email" class="col-form-label">Email</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="email" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="row g-3 mb-3 align-items-center">
                                <div class="col-1">
                                    <label for="password" class="col form-label">Password</label>
                                </div>
                                <div class="col-6">
                                    <input type="password" id="password" class="form-control" autofocus autocomplete="off">
                                </div>
                                <div class="col-1">
                                    <i class="bi bi-eye-fill" id="show_eye"></i>
                                    <i class="bi bi-eye-slash-fill d-none" id="hide_eye"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
