<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Data Paket </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('paket') }}" method="POST">
        @csrf
        <input type="hidden" name="id_outlet" value="1">    
        <div class="modal-body">
            <div class="form-group">
                <label for="jenis" class="form-label">Jenis Paket</label>
                <select class="form-control" placeholder="Pilih..." name="jenis" id="jenis">
                    <option disable>Pilih Jenis Paket</option>
                    <option value="kiloan">Kiloan</option>
                    <option value="selimut">Selimut</option>
                    <option value="bed_cover">Bed Cover</option>
                    <option value="kaos">Kaos</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_paket" class="form-label">Nama Paket</label>
                <input type="text" class="form-control" id="nama_paket" name="nama_paket">
            </div>
            <div class="form-group">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </form>
    </div>
</div>