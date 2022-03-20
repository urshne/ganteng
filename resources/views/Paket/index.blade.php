<x-app>
    <div class="table-responsive">
        <button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#createModal">Add New Member</button>
        <div class="d-flex align-items-center mb-3">
            <a href="/paket/export" class="btn btn-sm btn-success">Export Data</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>Jenis Paket</td>
                    <td>Nama Paket</td>
                    <td>Harga</td>
                </tr>
            </thead>
            <tbody>
                @foreach($paket as $item)
                <tr>
                    <td>{{ $item->jenis }}</td>
                    <td>{{ $item->nama_paket }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                        <div class="d-flex">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#updateModal{{ $item->id }}">Edit</button>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{ $item->id }}">Hapus</button>
                        </div>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="updateModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit paket</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </div>
                            <form action="{{ route('paket.update') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="jenis" class="form-label">Jenis Paket</label>
                                    <select class="form-control" placeholder="Pilih..." name="jenis" id="jenis">
                                        <option disable>Pilih Jenis Paket</option>
                                        <option value="kiloan" @if($item->jenis == 'kiloan') selected @endif>Kiloan</option>
                                        <option value="selimut" @if($item->jenis == 'selimut') selected @endif>Selimut</option>
                                        <option value="bed_cover" @if($item->jenis == 'bed_cover') selected @endif>Bed Cover</option>
                                        <option value="kaos" @if($item->jenis == 'kaos') selected @endif>Kaos</option>
                                        <option value="lain" @if($item->jenis == 'lain') selected @endif>Dll</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_paket" class="form-label">Nama Paket</label>
                                    <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="{{ $item->nama_paket }}">
                                </div>
                                <div class="form-group">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $item->harga }}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <!-- Modal -->
                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('paket.destroy') }}" method="POST">
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                Apakah anda yakin ingin menghapus data <strong>{{ $item->nama_paket }}</strong> ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Yakin!</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('paket._modal')
</x-app>