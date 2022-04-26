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
                        <label for="pergi">Jam Berangkat</label>
                        <input wire:model='pergi' type="time" class="form-control" id="pergi" name="pergi">
                        @error('pergi')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pulang">Jam Pulang</label>
                        <input wire:model='pulang' type="time" class="form-control" id="pulang" name="pulang">
                        @error('pulang')
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
