<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Data Buku</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{ route('minyak') }}">
        @csrf
        <div class="modal-body">
                <div class="form-group">
                    <label for="jenis_minyak" class="form-label">Jenis Minyak</label>
                    <select class="form-control" @error('jenis_minyak') is-invalid @enderror placeholder="Pilih..." name="jenis_minyak" id="jenis_minyak">
                        <option disable>Pilih Minyak</option>
                        <option value="minyak_goreng">Minyak Goreng</option>
                        <option value="minyak_tanah">Minyak Tanah</option>                
                            @error('jenis_minyak')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </select>
                </div>
                <div class="form-group">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" name="merk" value="{{ old('merk') }}">
                    @error('merk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="qty" class="form-label">Qty</label>
                    <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" value="{{ old('qty') }}">
                    @error('qty')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kondisi" class="form-label">Kondisi Barang</label>
                    <select class="form-control" @error('kondisi') is-invalid @enderror placeholder="Pilih..." name="kondisi" id="kondisi">
                        <option disable>Kondisi Barang</option>
                        <option value="layak_pakai">Layak Pakai</option>
                        <option value="rusak_ringan">Rusak Ringan</option>
                        <option value="rusak_berat">Rusak Berat</option>
                    </select>
                    @error('kondisi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_beli" class="form-label">Tanggal Pengadaan</label>
                    <input type="date" class="form-control @error('tanggal_beli') is-invalid @enderror" id="tanggal_beli" name="tanggal_beli" value="{{ old('tanggal_beli') }}">
                    @error('tanggal_beli')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    
    