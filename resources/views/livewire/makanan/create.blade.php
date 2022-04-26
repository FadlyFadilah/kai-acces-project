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
                        <label for="nama">Nama Makanan/minuman</label>
                        <input wire:model='nama' type="text" class="form-control" id="nama" name="nama">
                        @error('nama')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="size">Ukuran</label>
                        <input wire:model='size' type="text" class="form-control" id="size" name="size">
                        @error('size')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input wire:model='harga' type="text" class="form-control" id="harga" name="harga">
                        @error('harga')
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
