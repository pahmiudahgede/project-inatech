@extends('layouts.template')
@section('title', 'Kelola Pengguna')
@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ url('kelolaPengguna') }}" class="form-horizontal" enctype="multipart/form-data"
                id="tambahPengguna">
                @csrf
                <div class=" form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Masukkan Username" value="{{ old('username') }}" required autofocus>
                            @error('username')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    Username yang anda masukkan tidak valid
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Masukkan Password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    Password yang anda masukkan tidak valid
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan Nama" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    Nama yang anda masukkan tidak valid
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                placeholder="Masukkan No Hp" value="{{ old('no_hp') }}" required>
                            @error('no_hp')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    No Hp yang anda masukkan tidak valid
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat"></textarea>
                            @error('no_hp')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    Alamat yang anda masukkan tidak valid
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                            <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok"
                                placeholder="Masukkan Gaji Pokok" value="{{ old('gaji_pokok') }}" required>
                            @error('gaji_pokok')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    Gaji Pokok yang anda masukkan tidak valid
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="komisi" class="form-label">Komisi</label>
                            <input type="number" class="form-control" id="komisi" name="komisi"
                                placeholder="Masukkan Komisi" value="{{ old('komisi') }}" required>
                            @error('komisi')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    Komisi yang anda masukkan tidak valid
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tunjangan" class="form-label">Tunjangan</label>
                            <input type="number" class="form-control" id="tunjangan" name="tunjangan"
                                placeholder="Masukkan Tunjangan" value="{{ old('tunjangan') }}" required>
                            @error('tunjangan')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    Tunjangan yang anda masukkan tidak valid
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="potongan_gaji" class="form-label">Potongan Gaji</label>
                            <input type="number" class="form-control" id="potongan_gaji" name="potongan_gaji"
                                placeholder="Masukkan Potongan Gaji" value="{{ old('potongan_gaji') }}" required>
                            @error('potongan_gaji')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    Potongan gaji yang anda masukkan tidak valid
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="posisi" class="form-label">Posisi</label>
                            <div class="form-group">
                                <select class="choices form-select" name="posisi" id="posisi">
                                    <option value="Manager">Manager</option>
                                    <option value="Teknisi">Teknisi</option>
                                    <option value="Analis Tambak">Analis Tambak</option>
                                    <option value="Pemilik Tambak">Pemilik Tambak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="form-group">
                            <div class="col">
                                <div class="row mb-1">
                                    <div class="drop-zone">
                                        <div class="col">
                                            <div class="text-center row">
                                                <i class="fa-solid fa-cloud-arrow-up"
                                                    style="height: 50px; font-size: 50px"></i>
                                            </div>
                                            <div class="row">
                                                <span class="drop-zone__prompt text-center">Seret lalu letakkan file di
                                                    sini</span>
                                            </div>
                                        </div>
                                        <input type="file" name="image" class="drop-zone__input" required>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <span class="text-center">Atau</span>
                                </div>
                                <div class="row">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="customFile">
                                        <label class="form-file-label" for="customFile">
                                            <span class="form-file-text">Choose file...</span>
                                            <span class="form-file-button">Browse</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-sm btn-default ml-1" href="{{ url('administrasi') }}">Kembali</a>
                <button type="submit" class="btn btn-warning btn-sm">Simpan</button>
            </form>
        </div>
    @endsection
    @push('css')
    @endpush
    @push('js')
        <script>
            document.querySelectorAll('.drop-zone__input').forEach((inputElement) => {
                const dropZoneElement = inputElement.closest('.drop-zone');

                dropZoneElement.addEventListener('click', (e) => {
                    inputElement.click();
                });

                inputElement.addEventListener('change', (e) => {
                    if (inputElement.files.length) {
                        updateThumbnail(dropZoneElement, inputElement.files[0]);
                    }
                });

                dropZoneElement.addEventListener('dragover', (e) => {
                    e.preventDefault();
                    dropZoneElement.classList.add('drop-zone--over');
                });

                ['dragleave', 'dragend'].forEach((type) => {
                    dropZoneElement.addEventListener(type, (e) => {
                        dropZoneElement.classList.remove('drop-zone--over');
                    });
                });

                dropZoneElement.addEventListener('drop', (e) => {
                    e.preventDefault();

                    if (e.dataTransfer.files.length) {
                        inputElement.files = e.dataTransfer.files;
                        updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
                    }

                    dropZoneElement.classList.remove('drop-zone--over');
                });
            });

            function updateThumbnail(dropZoneElement, file) {
                let thumbnailElement = dropZoneElement.querySelector('.drop-zone__thumb');

                // Remove the prompt
                if (dropZoneElement.querySelector('.drop-zone__prompt')) {
                    dropZoneElement.querySelector('.drop-zone__prompt').remove();
                }

                // First time - there is no thumbnail element, so let's create it
                if (!thumbnailElement) {
                    thumbnailElement = document.createElement('div');
                    thumbnailElement.classList.add('drop-zone__thumb');
                    dropZoneElement.appendChild(thumbnailElement);
                }

                thumbnailElement.dataset.label = file.name;

                // Show thumbnail for image files
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.readAsDataURL(file);
                    reader.onload = () => {
                        thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
                    };
                } else {
                    thumbnailElement.style.backgroundImage = null;
                }
            }
        </script>
    @endpush
