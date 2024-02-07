@extends('layouts.admin')

@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Detail Pengaduan</h4>
                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table class="table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>PJ Pengaduan</th>
                                            <th>Jenis Pengaduan</th>
                                            <th>Jenis Pengaduan Lainnya</th>
                                            <th>Status Bukti Pengaduan</th>
                                            <th>Bukti Pengaduan</th>
                                            <th>Status Pengaduan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                <td>DUMAS001</td>
                                                <td>{{ $detailData->nama }}</td>
                                                <td>{{ $detailData->nik }}</td>
                                                <td>{{ $detailData->email }}</td>
                                                <td>{{ $detailData->alamat }}</td>
                                                <td>{{ $detailData->jenisPengaduan->pj->nama }}</td>
                                                <td>{{ $detailData->jenisPengaduan->nama }}</td>
                                                <td>{{ $detailData->jenis_lainnya }}</td>
                                                <td>{{ $detailData->statusBukti->nama }}</td>
                                                <td>Link to evidence</td>
                                                <td>{{ $detailData->statusPengaduan->nama }}</td>
                                                <td>
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic mixed styles example">
                                                        <a class="btn btn-warning"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Edit Pengaduan">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <a class="btn btn-danger"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="Hapus Pengaduan">
                                                            <i class="bi bi-trash text-body-secondary"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
