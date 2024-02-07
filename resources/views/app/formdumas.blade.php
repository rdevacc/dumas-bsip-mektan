@extends('layouts.app')

@section('container')
    <div class="p-5 bg-body-secondary">
        <div class="form-title pb-3 mx-auto text-center justify-content-center">
            <h4 class="fw-semibold">Layanan Pengaduan Masyarakat (DUMAS)</h4>
            <h4 class="fw-semibold">BBPSI Mektan</h4>
        </div>
        <form class="px-4 mx-auto col-md-9" method="POST" action="/dumas" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3 d-flex">
                <label for="nama" class="form-label text-dark col-md-3">Nama Lengkap</label>
                <div class="col d-flex input-group col">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                    </span>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        name="nama" value="{{ old('nama') }}" placeholder="Isikan nama lengkap anda" required
                        autofocus>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <label for="nik" class="form-label text-dark col-md-3">NIK</label>
                <div class="col d-flex input-group">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                            <path
                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        </svg>
                    </span>
                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                        name="nik" value="{{ old('nik') }}" placeholder="Isikan 16 digit NIK" required>
                    @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <label for="email" class="form-label text-dark col-md-3">Email</label>
                <div class="col d-flex input-group">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-envelope-at" viewBox="0 0 16 16">
                            <path
                                d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                            <path
                                d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                        </svg>
                    </span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" value="{{ old('email') }}" placeholder="Isikan alamat e-mail anda" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <label for="alamat" class="form-label text-dark col-md-3">Alamat Lengkap</label>
                <div class="col d-flex input-group">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                        </svg>
                    </span>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" placeholder="Isi alamat lengkap anda"
                        id="alamat" name="alamat" style="height: 100px">{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <label for="pengaduan_id" class="form-label text-dark col-md-3">Jenis Pengaduan</label>
                <div class="col d-flex input-group">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-stack" viewBox="0 0 16 16">
                            <path
                                d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z" />
                            <path
                                d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z" />
                        </svg>
                    </span>
                    <select class="form-select form-select-md @error('pengaduan_id') is-invalid @enderror" id="pengaduan_id"
                        name="pengaduan_id">
                        <option disabled selected>Pilih Jenis Pengaduan</option>
                        @foreach ($jenisPengaduan as $pengaduan)
                            <option value="{{ $pengaduan->id }}" @selected(old('pengaduan_id') == $pengaduan->id)>{{ $pengaduan->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('pengaduan_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <label for="jenis_lainnya" class="form-label text-dark col-md-3">Pengaduan Lainnya</label>
                <div class="col d-flex input-group">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-layers-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z" />
                            <path
                                d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0z" />
                        </svg>
                    </span>
                    <input type="jenis_lainnya" class="form-control @error('jenis_lainnya') is-invalid @enderror"
                        id="jenis_lainnya" name="jenis_lainnya" value="{{ old('jenis_lainnya') }}"
                        placeholder="Isikan jenis pengaduan lainnya">
                    @error('jenis_lainnya')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <label for="isi_pengaduan" class="form-label text-dark col-md-3">Isi Pengaduan</label>
                <div class="col d-flex input-group">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                            <path
                                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z" />
                        </svg>
                    </span>
                    <textarea class="form-control @error('isi_pengaduan') is-invalid @enderror" placeholder="Isi pengaduan anda"
                        id="isi_pengaduan" name="isi_pengaduan" style="height: 100px">{{ old('isi_pengaduan') }}</textarea>
                    @error('isi_pengaduan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <label for="saran_dan_masukkan" class="form-label text-dark col-md-3">Saran dan Masukkan</label>
                <div class="col d-flex input-group">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-chat-square-heart-fill" viewBox="0 0 16 16">
                            <path
                                d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                        </svg>
                    </span>
                    <textarea class="form-control @error('saran_dan_masukkan') is-invalid @enderror" placeholder="Saran dan masukkan anda"
                        id="saran_dan_masukkan" name="saran_dan_masukkan" style="height: 100px">{{ old('saran_dan_masukkan') }}</textarea>
                    @error('saran_dan_masukkan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <label for="statusBukti_id" class="form-label text-dark col-md-3">Status Bukti Pengaduan</label>
                <div class="col d-flex input-group">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </span>
                    <select class="form-select form-select-md @error('statusBukti_id') is-invalid @enderror"
                        id="statusBukti_id" name="statusBukti_id">
                        <option disabled selected>Pilih Status Bukti Pengaduan</option>
                        @foreach ($statusBukti as $status)
                            <option value="{{ $status->id }}" @selected(old('statusBukti_id') == $status->id)>{{ $status->nama }}</option>
                        @endforeach
                    </select>
                    @error('statusBukti_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <input type="hidden" name="pj_id" id="pj_id" value="{{ $pengaduan->pj_id }}">
            </div>
            <div class="row mb-3 d-flex">
                <label for="bukti_pengaduan" class="form-label text-dark col-md-3">Upload Bukti Pengaduan</label>
                <div class="col d-flex input-group">
                    <input class="col form-control" type="file" id="bukti_pengaduan" name="bukti_pengaduan" multiple>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="d-flex">
                    <a href="{{ route('form') }}" class="btn btn-warning text-white"><span>Reset</span></a>
                </div>
                <div class="d-flex ps-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
