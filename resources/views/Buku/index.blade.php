<x-app>
    <div class="section-header">
        <h1>Form</h1>
    <!-- Button trigger modal -->


    {{-- <div class="card-body">
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
                        
                    </tr>
                </thead>
                @foreach($buku as $item)
                <tbody>
                    <tr>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->penerbit }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
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
            </table>
        </div>
    </div>

    <div class="modal fade" id="updateModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit paket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </div>
                <form action="{{ route('buku.update') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $item->id }}" name="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judul" class="form-label">Judul </label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $item->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $item->penerbit }}">
                    </div>
                    <div class="form-group">
                        <label for="tanun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="date" class="form-control" id="tanun_terbit" name="tanun_terbit" value="{{ $item->tanun_terbit }}">
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
                        <input type="number" class="form-control" id="qty" name="qty" value="{{ $item->qty }}">
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
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('buku.destroy') }}" method="POST">
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
</div> --}}

<div class="card-body">
    <form id="formKaryawan">
        <div class="card-body">
                    <div class="form-group row">
                      <label for="ID" class="col-sm-2 col-form-label">ID Buku</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="id" id="id" id="ID" placeholder="ID" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="Judul" class="col-sm-2 col-form-label">Judul Buku</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Buku" required>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="Pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Pengarang" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Tahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
                        <div class="col-sm-10">
                          <input type="date" min="1000" max="{{ date('Y') }}" class="form-control" name="tahun" id="tahun" placeholder="Tahun Terbit" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Qty" class="col-sm-2 col-form-label">Qty</label>
                        <div class="col-sm-10">
                          <input type="double" class="form-control" name="qty" id="qty" placeholder="Qty" required>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button class="btn btn-primary" id="btnSimpan" type="submit">Simpan</button>
                        <button class="btn btn-default" id="btnReset" type="reset">Reset</button>
                      </div>
                    </div>
                </div>


<div class="card">
    <div class="card-header">
        <h3>Data</h3>
    </div>
    <div class="card-body">
        <div>
            <button class="btn btn-success mb-3" type="button" id="sorting">Sorting</button>
            <button class="btn btn-danger mb-3" type="button" id="btnSearch">Search</button>
            <input type="search" class="form-control col-sm-3 mb-3" name="search" id="search" placeholder="Search">
        </div>
        
        <table class="table table-compact table-striped table-bordered" id="tblKaryawan">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Harga</th>
                    <th>Qty</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan-4 align-center">Belum ada Data</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@push('script')
<script>
function insert(){
  const data = $('#formKaryawan').serializeArray()
  let newData = {}
  data.forEach(function(item, index){
    let name = item['name']
    let value = (name === 'id'? Number(item['value']):item['value'])
    newData[name] = value
  })
  return newData
}
function showData(arr){
  let row = ''
  if(arr.length == null){
    return row = `<tr><td colspan="3">Belum Ada Data</td></tr>`
  }
  arr.forEach(function(item, index){
    row += `<tr>`
    row += `<td>${item['id']}</td>`
    row += `<td>${item['judul']}</td>`
    row += `<td>${item['pengarang']}</td>`
    row += `<td>${item['tahun']}</td>`
    row += `<td>${item['harga']}</td>`
    row += `<td>${item['qty']}</td>`
    row += `</tr>`
  }) 
  return row
}

function searching(arr, key, teks){
    for(let i=0; i < arr.length; i++){
        if(arr[i][key] == teks)
        return i
    }
    return -1
}

function insertionSort(arr, key)
{
    let i, j, id, value;
    for(i = 1; i < arr.length; i++)
    {
        value = arr[i];
        id = arr[i][key]
        j = i - 1;
        while (j >=0 && arr[j][key] > id)
        {
            arr[j + 1] = arr[j];
            j = j - 1;
        }
        arr[j + 1] = value;
    }
    return arr
}
$(function(){
  //property
  let dataKaryawan = []
  // event
    $('#formKaryawan').on('submit', function(e){
      e.preventDefault()
      dataKaryawan.push(insert())
      $('#tblKaryawan tbody').html(showData(dataKaryawan))
      console.log(dataKaryawan);
    })
    $('#sorting').on('click', function(){
        dataKaryawan = insertionSort(dataKaryawan, 'id')

        $('#tblKaryawan tbody').html(showData(dataKaryawan))
        console.log(dataKaryawan)
    })
    $('#btnSearch').on('click', function(e){
            let teksSearch = $('#search').val()
            let id = searching(dataKaryawan, 'id', teksSearch)
            let data = []
            if (id >= 0)
                data.push(dataKaryawan[id])
            console.log(id)
            console.log(data)
            $('#tblKaryawan tbody').html(showData(data))
        })
    
  // end of event
})
</script>
@endpush
  
       

</x-app>