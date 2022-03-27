<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('penggunaan_barang') }}" method="POST">
        @csrf
        <input type="hidden" name="status" value="1">
        <div class="modal-body">
            <div class="form-group">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="qty" class="form-label">Qty</label>
                <input type="number" class="form-control" id="qty" name="qty">
            </div>
            <div class="form-group">
                <label for="harga" class="form-label">Harga</label>
                <input type="double" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-group">
                <label for="waktu_beli" class="form-label">Waktu Beli</label>
                <input type="date" class="form-control" id="waktu_beli" name="waktu_beli">
            </div>
            <div class="form-group">
                <label for="suplier" class="form-label">suplier</label>
                <input type="text" class="form-control" id="suplier" name="suplier">
            </div>
            <div class="form-group">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" placeholder="Pilih..." name="status" id="status">
                    <option disable>Status</option>
                    <option value="diajukan_beli">Diajukan Beli</option>
                    <option value="habis">Habis</option>
                    <option value="tersedia">Tersedia</option>
                </select>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
    </div>
</div>
