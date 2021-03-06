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
                @php
                    $no = 1;
                @endphp
                @foreach($data as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->tlp }}</td>
                    {{-- <td></td> --}}
                    <td>{{ $item->petugas }}</td>
                    <td>
                        <form action="/jemput/updateStatus" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <div class="input-group input-group-outline ms-2">
                                <select name="status"
                                    class="form-control" onchange="form.submit()">
                                    <option value="tercatat" {{ $item->status == "tercatat" ? 'selected' : '' }}>Tercatat</option>
                                    <option value="penjemputan" {{ $item->status == "penjemputan" ? 'selected' : '' }}>Penjemputan</option>
                                    <option value="selesai" {{ $item->status == "selesai" ? 'selected' : '' }}>Selesai</option>
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
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{ $item->data }}">Hapus</button>
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
                            <form action="{{ route('jemput.update') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="id_member" class="form-control-label" >Pilih Member</label>
                                    <select class="form-control" placeholder="Pilih Member" name="id_member" id="js-example-basic-single" readonly disabled>
                                        <option disable>Pilih Member</option>
                                    @foreach ($member as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->alamat }} -{{ $item->tlp }}"</option>
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
                                        <select name="status" class="form-control" onchange="form.submit()" disabled>
                                            <option value="tercatat" {{ $item->status == "tercatat" ? 'selected' : '' }}>Tercatat</option>
                                            <option value="penjemputan" {{ $item->status == "penjemputan" ? 'selected' : '' }}>Penjemputan</option>
                                            <option value="selesai" {{ $item->status == "selesai" ? 'selected' : '' }}>Selesai</option>
                                        </select>
                                    </div>
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
                <!-- Modal -->
                <div class="modal fade" id="deleteModal{{ $item->data }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('jemput.destroy') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }} - {{ $item->alamat}}" name="id">
                            <div class="modal-body">
                                Yakin untuk menghapus data ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Save changes</button>
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
