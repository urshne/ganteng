<x-app>
    <div class="section-header">
        <h1>Members Page</h1>
    <div class="d-flex align-items-center mb-3">
        <button type="button" class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#createModal">Create Data Member</button>
        <button type="button" class="btn btn-sm btn-success mr-2" data-toggle="modal" data-target="#importExcel">Import Data</button>
        <a href="/member/export" class="btn btn-sm btn-success">Export Data</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Jenis Kelamin</td>
                    <td>Telp</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                @foreach($member as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->tlp }}</td>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('member.update') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-control" placeholder="Pilih..." name="jenis_kelamin" id="jenis_kelamin">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tlp" class="form-label">Telepon</label>
                                    <input type="text" class="form-control" id="tlp" name="tlp" value="{{ $item->tlp }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" id="alamat" rows="3" class="form-control">{{ $item->alamat }}</textarea>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('member.destroy') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <div class="modal-body">
                            Yakin untuk menghapus data ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
    
    @include('member._modal')
</x-app>