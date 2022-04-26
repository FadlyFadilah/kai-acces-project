<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">                         
        <h1 class="h3 mb-0 text-gray-800">Ubah Data</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="card-body">
                <form wire:submit.prevent='update' autocomplete="off">
                    <input type="hidden" wire:model='trainId'>
                    <div class="form-group">
                      <label for="nama">Nama Kereta</label>
                      <input wire:model='nama' type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                      <label for="kelas">Kelas Kereta</label>
                        <select wire:model='kelas' class="form-control" name="kelas" id="kelas">
                            <option hidden selected>-- Pilih Salah satu!! --</option>
                            <option value="ekonomi">Ekonomi</option>
                            <option value="bisnis">Bisnis</option>
                            <option value="firs">First</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
