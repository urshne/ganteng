<x-app>
    <div class="section-header">
        <h3>Data Barang</h3>
    <div class="table-responsive">
        <button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#createModal">Tambah Data</button>
        <div class="d-flex align-items-center mb-3">
            <a href="/penggunaan_barang/export" class="btn btn-sm btn-success">Export Data</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Barang</td>
                    <td>Qty</td>
                    <td>Harga</td>
                    <td>Waktu Beli</td>
                    <td>Suplier</td>
                    <td>Status</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                @foreach($penggunaan_barang as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->waktu_beli }}</td>
                    <td>{{ $item->suplier }}</td>
                    <td>
                        <form action="/penggunaan_barang/updateStatus" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <div class="input-group input-group-outline ms-2">
                                <select name="status"
                                    class="form-control" onchange="form.submit()">
                                    <option value="diajukan_beli" {{ $item->status == "diajukan_beli" ? 'selected' : '' }}>Diajukan Beli</option>
                                    <option value="habis" {{ $item->status == "habis" ? 'selected' : '' }}>Habis</option>
                                    <option value="tersedia" {{ $item->status == "tersedia" ? 'selected' : '' }}>Tersedia</option>
                                </select>
                            </div>
                        </form>
                        {{-- <script>
                        $('#ubah_status{{ $item->id }}').change(function() {
                            $('#select_status{{ $item->id }}').submit();
                        });
                        </script> --}}
                </td>
                </td>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        </div>
                        <form action="{{ route('penggunaan_barang.update') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $item->nama_barang }}">
                            </div>
                            <div class="form-group">
                                <label for="qty" class="form-label">Qty</label>
                                <input type="number" class="form-control" id="qty" name="qty" value="{{ $item->qty }}">
                            </div>
                            <div class="form-group">
                                <label for="harga" class="form-lab*el">Harga</label>
                                <input type="double" class="form-control" id="harga" name="harga" value="{{ $item->harga}}"->
                            </div>
                            <div class="form-group">
                                <label for="waktu_beli" class="form-label">Waktu Beli</label>
                                <input type="date" class="form-control" id="waktu_beli" name="waktu_beli" value="{{ $item->waktu_beli}}">
                            </div>
                            <div class="form-group">
                                <label for="suplier" class="form-label">Suplier</label>
                                <input type="text" class="form-control" id="suplier" name="suplier" value="{{ $item->suplier}}">
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
        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('penggunaan_barang.destroy') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <div class="modal-body">
                            Yakin untuk menghapus data ?
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

<script>

</script>
        @include('penggunaan_barang._modal')
</x-app>
