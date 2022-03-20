<x-app>
    <div class="section-header">
        <h3>Penjemputan Laundry</h3>
    <div class="table-responsive">
        <button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#createModal">Tambah Data</button>
        <div class="d-flex align-items-center mb-3">
            <a href="/jemput/export" class="btn btn-sm btn-success">Export Data</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Pelanggan</td>
                    <td>Alamat Pelanggan</td>
                    <td>No Hp</td>
                    {{-- <td></td> --}}
                    <td>Petugas</td>
                    <td>Status</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                @foreach($member as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->tlp }}</td>
                    {{-- <td></td> --}}
                    <td>{{ $item->petugas }}</td>
                    <td>
                        <form action="jemput/update/{{ $item->id }}"
                            method="POST" enctype="multipart/form-data" class="d-inline"
                            id="select_status{{ $item->id }}">
                        @csrf
                        <div class="input-group input-group-outline ms-2">
                            <select name="status" id="status{{ $item->id }}"
                                class="form-control @error('type') is-invalid @enderror" onchange="form.submit()">
                                <option selected
                                    value="{{ old('status') ? old('status') : $item->status }}">
                                    {{ $item->status }} (Saat ini)</option>
                                <option value="tercatat"> Tercatat </option>
                                <option value="penjemputan"> Penjemputan </option>
                                <option value="selesai"> Selesai </option>
                                <input type="hidden" name="id_member"
                                    value="{{ old('id_member') ? old('id_member') : $item->id_member }}">
                                <input type="hidden" name="petugas"
                                    value="{{ old('petugas') ? old('petugas') : $item->petugas }}">
                            </select>
                            @error('status')
                                <div class="text-muted">{{ $message }}</div>
                            @enderror
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </div>
                            <form action="{{ route('jemput.update') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="id_member" class="form-control-label" >Pilih Member</label>
                                    <select class="form-control" placeholder="Pilih Member" name="id_member" id="js-example-basic-single">
                                        <option disable>Pilih Member</option>
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
                                    <label for="status" class="form-control-label my-auto">Status</label>
                                    <div class="input-group input-group-outline ms-2">
                                        <select name="status" id="status" class="custom-select">
                                            <option selected>Pilih Status</option>
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
                            </div>
                            </form>
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
                        <form action="{{ route('jemput.destroy') }}" method="POST">
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                Apakah anda yakin ingin menghapus data <strong>{{ $item->id }}</strong> ?
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
        @include('jemput._modal')
</x-app>
