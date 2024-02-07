@extends('layouts.admin')

@push('css')
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.8/datatables.min.css" rel="stylesheet">
@endpush

@section('content')
    <main id="main" class="main">
        <section class="section">

            <!-- Session Alert -->
            @if (session('success'))
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"
                        width="16" height="16" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <!-- Content Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Card Body -->
                            <h4 class="card-title">Data Seluruh Pengaduan</h4>
                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Email</th>
                                            <th>PJ Pengaduan</th>
                                            <th>Jenis Pengaduan</th>
                                            <th>Jenis Pengaduan Lainnya</th>
                                            <th>Status Bukti Pengaduan</th>
                                            <th>Status Pengaduan</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <!-- Bootstrap Tooltips -->
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/datatables.min.js"></script>

    <!-- Pengaduan DataTables JQuery -->
    <script>
        $(document).ready(function() {
            var pengaduanTable = $('#myTable').DataTable({
                serverSide: true,
                processing: true,
                ajax: '{{ route('pengaduan') }}',
                drawCallback: function() {
                    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
                    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap
                        .Tooltip(tooltipTriggerEl))
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        width: '10px',
                        orderable: false,
                        searchable: false,
                        targets: 0,
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                    },
                    {
                        data: 'nik',
                        name: 'nik',
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'pj',
                        name: 'pj.nama',
                    },
                    {
                        data: 'jenisPengaduan',
                        name: 'jenisPengaduan.nama',
                    },
                    {
                        data: 'jenis_lainnya',
                        name: 'jenis_lainnya'
                    },
                    {
                        data: 'statusBukti',
                        name: 'statusBukti.nama',
                        render: function(data, type, row) {
                            return data == 'Tidak Ada' ?
                                `<span class="badge text-bg-warning">` + data + `</span>` :
                                `<span class="badge text-bg-primary">` + data +
                                `</span>`
                        },
                    },
                    {
                        data: 'statusPengaduan',
                        name: 'statusPengaduan.nama',
                        render: function(data, type, row) {
                            return data == 'Belum' ?
                                `<span class="badge text-bg-danger">` + data + `</span>` :
                                `<span class="badge text-bg-success">` + data +
                                `</span>`
                        },
                    },
                    {
                        data: 'created_at',
                        name: 'dumas_forms.created_at',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [
                    [8, 'asc'],
                    [9, 'desc'],
                ]
            });


            function refreshTable() {
                pengaduanTable.ajax.reload(null, false); // Reload table data without resetting current page
                console.log('Refresh Data');
            }

            setInterval(refreshTable, 30000);
        })
    </script>
@endpush
