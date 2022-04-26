<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="card-body">
                <form wire:submit.prevent='store' autocomplete="off">
                    <div class="form-group">
                        <label for="nama">Nama Statsiun</label>
                        <input wire:model='nama' type="text" class="form-control" id="nama" name="nama">
                        @error('nama')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi Stasiun</label>
                        <input wire:model='lokasi' type="text" class="form-control" id="lokasi" name="lokasi">
                        @error('lokasi')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
