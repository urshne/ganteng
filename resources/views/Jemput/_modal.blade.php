<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" data-target="">Tambah Data </h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('jemput') }}" method="POST">
        @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="id_member" class="form-control-label">Pilih Member</label>
                    <select class="form-control" placeholder="Pilih Member" name="id_member" id="id_member">
                        <option selected disabled>Pilih Member</option>
                        @foreach ($member as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->alamat }} -{{ $item->tlp }}</option>
                        @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="petugas" class="form-label">Petugas</label>
                    <input type="text" class="form-control" id="petugas" name="petugas">
                </div>
                <div class="form-group">
                <label for="status" class="form-label">Status</label>
                <div class="input-group input-group-outline ms-2">
                    <select name="status" class="form-control">
                        <option value="" selected disabled>Status</option>
                        <option value="tercatat">Tercatat</option>
                        <option value="penjemputan">Penjemputan</option>
                        <option value="selesai">Selesai</option>
                    </select>
                </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>

