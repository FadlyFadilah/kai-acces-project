<div>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">List Statsiun</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route("statsiun.create") }}" class="btn btn-primary m-0 font-weight-bold">Create</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Statsiun</th>
                                <th>Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id = 0;
                                $id++;
                            @endphp
                            @foreach ($statsiuns as $statsiun)
                                <tr>
                                    <td>{{ $id }}</td>
                                    <td>{{ $statsiun->nama }}</td>
                                    <td class="text-capitalize">{{ $statsiun->lokasi }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('statsiun.edit', $statsiun->id) }}" class="btn btn-sm btn-success">Edit</a>
                                        <button wire:click="destroy({{ $statsiun->id }})" class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
