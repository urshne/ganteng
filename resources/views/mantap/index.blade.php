<x-app title="mantap">
    <div class="section-header">
        <h1>Mantap Barang</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
    Elektronik
</button>

    <div class="card-body">
        @if(session('succes'))
        <div class="alert alert-succes" role="alert" id="succes-alert">
            {{ session('succes') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </div>
            </button>
        @endif

        @if ($errors->any())
        <div class="aler alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
            </ul>
         </div>
         @endif

         <div class="table-responsive">
             <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Merk</th>
                        <th>Tanggal Beli</th>
                        <th>Harga</th>
                        <th>QTY</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach($mantap as $item)
                <tbody>
                    <tr>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->merk }}</td>
                        <td>{{ $item->tanggal_beli }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>
                            <div class="d-flex">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#updateModal{{ $item->id }}">Edit</button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{ $item->id }}">Hapus</button>
                            </div>
                            
                        </td>
                    </tr>
                </tbody>
                <div class="modal fade" id="updateModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit paket</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </div>
                            <form action="{{ route('mantap.update') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama_barang" class="form-label">Nama Barang </label>
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $item->nama_barang }}">
                                </div>
                                <div class="form-group">
                                    <label for="merk" class="form-label">Merk</label>
                                    <input type="text" class="form-control" id="merk" name="merk" value="{{ $item->merk }}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
                                    <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli" value="{{ $item->tanggal_beli }}">
                                </div>
                                <div class="form-group">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="double" class="form-control" id="harga" name="harga" value="{{ $item->harga }}">
                                </div>
                                <div class="form-group">
                                    <label for="qty" class="form-label">qty</label>
                                    <input type="double" class="form-control" id="qty" name="qty" value="{{ $item->qty }}">
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
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data mantap</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('mantap.destroy') }}" method="POST">
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                Apakah anda yakin ingin menghapus data <strong>{{ $item->nama_barang }}</strong> ?
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
             </table>
         </div>
    </div>

</tbody>
</table>
</div>
    
  
  
       
    
    @include('mantap._modal')
</x-app>