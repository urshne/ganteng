<x-app>
    <div class="section-header">
        <h1>Simulasi Gaji Karyawan</h1>
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
    <form id="formKaryawan" autocomplete="off">
        <div class="card-body">
                    <div class="form-group row">
                      <label for="ID" class="col-sm-2 col-form-label">ID Karyawan</label>
                      <div class="col-sm-2.5">
                        <input type="text" class="form-control" name="id" id="id" id="ID" placeholder="ID" required>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama Karyawan</label>
                        <div class="col-sm-2.5">
                          <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Karyawan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak" class="col-sm-2 col-form-label">Jumlah Anak</label>
                        <div class="col-sm-2.5">
                         <input type="number" class="form-control" name="jml_anak" id="jml_anak" placeholder="Pilih" required readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-1">
                          <input class="form-check-input" type="radio" value="L" name="jk" ID="jk">
                          <label class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="col-sm-1">
                          <input class="form-check-input" type="radio" value="P" name="jk" ID="jk">
                          <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Status Menikah</label>
                        <div class="input-group input-group-outline ms-2">
                            <select name="status_menikah" id="status_menikah" class="">
                                <option selected disabled value>--- Pilih Status Pernikahan ---</option>
                                <option value="0">Single</option>
                                <option value="1">Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Tahun" class="col-sm-2 col-form-label">Mulai Bekerja</label>
                        <div class="col-sm-2.5">
                            <input type="date" class="form-control" name="mulai_bekerja" id="mulai_bekerja" placeholder="Tanggal Mulai Bekerja" required>
                        </div>
                    </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" id="btnSimpan" type="submit">Simpan</button>
                        <button class="btn btn-default" id="btnReset" type="reset">Reset</button>
                      </div>
                    </div>
                </div>
                <div>
                    <input type="hidden" id="gaji" name="gaji" value="2000000">
                </div>
                <div>
                    <input type="hidden" id="tunjangan" name="tunjangan">
                </div>
                <div>
                    <input type="hidden" id="totalg" name="totalg">
                </div>
            </form>

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
                    <th>ID Karyawan</th>
                    <th>Nama Karyawan</th>
                    <th>Jenis Kelamin</th>
                    <th>Jumlah Anak</th>
                    <th>Mulai Bekerja</th>
                    <th>Status Menikah</th>
                    <th>Gaji Awal</th>
                    <th>Tunjangan</th>
                    <th>Total Gaji</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td "colspan-align-center">Belum ada Data</td>
                </tr>
            </tbody>
        </table>
</table>
    </div>
</div>

@push('script')
    <script>
        $('#status_menikah').change(function() {
            if ($('#status_menikah').val() == '1') {
                $('#jml_anak').removeAttr('readonly')
                $('#jml_anak').val('0')
            } else {
                $('#jml_anak').attr('readonly', '')
                $('#jml_anak').val('0')
            }
        })

        const allData = []
        $('#formKaryawan').on('submit', function(e) {
            // Menghilangkan fungsi default
            e.preventDefault()
            // Menangkap data dari form
            let data = new FormData(this)
            let obj = {}
            // Menambahkan data ke obj
            for (const key of data) {
                obj[key[0]] = key[0] === 'id' || key[0] === 'jml_anak' ? parseInt(key[1]) : key[1]
            }

            // Contoh mengambil 1 data 1 per 1
            // console.log(data.get('id'))
            // console.log(data.get('nama'))
            // console.log(data.get('jk'))

            // let gaji = data.get('gaji_awal')
            // let tunjangan = data.get('tunjangan_menikah')
            // let tunjangan_anak = data.get('tunjangan_anak')
            // let jml_anak = data.get('jml_anak')
            // let mulai_bekerja = data.get('mulai_bekerja')
            // let total_gaji = gaji + tunjangan + (tunjangan_anak * jml_anak)

            // Menambahkan data ke array
            allData.push(obj)

            // menampilkan data di console
            console.log(allData)

            // Melakukan render data
            renderTable()

            // Save renderTable ke localStorage
            localStorage.setItem('data', JSON.stringify(allData))
        })

        function calculateAge(firstday) {
            firstday = new Date(firstday);
            now = Date.now();
            let ageDif = Date.now() - firstday.getTime();
            let ageDate = new Date(ageDif);
            let calculateAge = ageDate * 150000;
            return calculateAge;
        }

        // function untuk menampilkan data di table
        const renderTable = () => {
            let xml = ''
            if (allData.length !== 0) {
                // Melakukan looping
                let totalGajiAwal = 0
                let totalTunjangan = 0
                let totalkeseluruhan = 0
                allData.map((item, index) => {
                    totalGajiAwal += 2000000
                    totalTunjangan += item.jml_anak >= 2 ? (new Date().getUTCFullYear() - new Date(item
                            .mulai_bekerja).getUTCFullYear()) * 150000 + item.status_menikah * 250000 + 300000 :
                        (new Date().getUTCFullYear() - new Date(item.mulai_bekerja).getUTCFullYear()) * 150000 +
                        item.status_menikah * 250000 + item.jml_anak * 150000
                    totalkeseluruhan += item.jml_anak >= 2 ? (new Date().getUTCFullYear() - new Date(item
                            .mulai_bekerja).getUTCFullYear()) * 150000 + item.status_menikah * 250000 + 300000 +
                        2000000 :
                        (new Date().getUTCFullYear() - new Date(item.mulai_bekerja).getUTCFullYear()) * 150000 +
                        item.status_menikah * 250000 + item.jml_anak * 150000 + 2000000
                    return xml += `
                    <tr>
                        <td>${item.id}</td>
                        <td>${item.nama}</td>
                        <td>${item.jk}</td>
                        <td>${item.status_menikah == '1' ? 'menikah' : 'single'}</td>
                        <td>${item.jml_anak}</td>
                        <td>${item.mulai_bekerja}</td>
                        <td id="gaji_awal">${2000000}</td>
                        <td id="tunjangan">${item.jml_anak >= 2 ? (new Date().getUTCFullYear() - new Date(item.mulai_bekerja).getUTCFullYear()) * 150000 + item.status_menikah * 250000 + 300000
                            : (new Date().getUTCFullYear() - new Date(item.mulai_bekerja).getUTCFullYear()) * 150000 + item.status_menikah * 250000 + item.jml_anak * 150000}</td>
                        <td id="total_gaji">${item.jml_anak >= 2 ? (new Date().getUTCFullYear() - new Date(item.mulai_bekerja).getUTCFullYear()) * 150000 + item.status_menikah * 250000 + 300000 + 2000000
                             : (new Date().getUTCFullYear() - new Date(item.mulai_bekerja).getUTCFullYear()) * 150000 + item.status_menikah * 250000 + item.jml_anak * 150000 + 2000000
                            }</td>
                    </tr>
                    `
                })
                xml += `
                <tr>
                    <td>total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Rp ${totalGajiAwal}</td>
                    <td>Rp ${totalTunjangan}</td>
                    <td>Rp ${totalkeseluruhan}</td>
                </tr>
                `
            } else {
                xml = `
                <tr>
                    <td colspan="12" align="center">Belum ada data</td>
                </tr>
                `
            }
            $('.table tbody').html(xml)
        }

        // menghapus semua data ketika tombol reset di click dan menyimpan kondisi ke localStorage
        $('#btnReset').on('click', function() {
            allData.length = 0
            renderTable()
            // Save renderTable ke localStorage
            localStorage.setItem('data', JSON.stringify(allData))
        })

        // Fungsi insertionSort
        function insertionSort(arr, key) {
            let i, j, id, value;
            for (i = 1; i < arr.length; i++) {
                value = arr[i];
                id = arr[i][key]
                j = i - 1;
                while (j >= 0 && arr[j][key] > id) {
                    arr[j + 1] = arr[j];
                    j = j - 1;
                }
                arr[j + 1] = value;
            }
            return arr
        }

        // mengSorting data menggunakan fungsi insertionSort yang sudah dibuat
        $('#sorting').on('click', function() {
            let data = insertionSort(allData, 'id')
            renderTable()
            // Save renderTable ke localStorage
            localStorage.setItem('data', JSON.stringify(data))
        })

        $('#btnSearch').on('click', function(e) {
            e.preventDefault()
            const text = $('#search').val()
            const arr = searching(allData, text)
            searchingRenderTable(arr)
        })

        // fungsi searching
        const searching = (arr, text) => {
            if (text !== '') {
                let data = []
                for (let idx = 0; idx < arr.length; idx++) {
                    for (const key in arr[idx]) {
                        const value = arr[idx][key].toString()
                        for (let x = 0; x < value.length; x++) {
                            if (value.substring(x, x + text.length).toLowerCase() == text.toLowerCase()) {
                                data.push(allData[idx])
                                break;
                            }
                        }
                    }
                }
                return data
            } else {
                return allData
            }
        }



        // // make search algorithm in search() function to search "nama" in renderTable
        // function search(arr, key, value) {
        //     let result = []
        //     arr.map(item => {
        //         if (item[key] == value) {
        //             result.push(item)
        //         }
        //     })
        // }

        // // make search algorithm in search() function and apply it to renderTable when click #btnSearch with value = "nama" from #search input
        // $('#btnSearch').on('click', function() {
        //     let value = $('#search').val()
        //     let data = search(allData, 'nama', value)
        //     renderTable()
        // })

        const searchingRenderTable = (data) => {
            let xml = ''
            if (data.length !== 0) {
                data.map((item, index) => {
                    return xml += `
                    <tr>
                        <td>${item.id}</td>
                        <td>${item.nama}</td>
                        <td>${item.jk}</td>
                        <td>${item.status_menikah == '1' ? 'menikah' : 'single'}</td>
                        <td>${item.jml_anak}</td>
                        <td>${item.mulai_bekerja}</td>
                        <td id="gaji_awal">${2000000}</td>
                        <td id="tunjangan">${item.jml_anak >= 2 ? (new Date().getUTCFullYear() - new Date(item.mulai_bekerja).getUTCFullYear()) * 150000 + item.status_menikah * 250000 + 300000
                            : (new Date().getUTCFullYear() - new Date(item.mulai_bekerja).getUTCFullYear()) * 150000 + item.status_menikah * 250000 + item.jml_anak * 150000}</td>
                        <td id="total_gaji">${item.jml_anak >= 2 ? (new Date().getUTCFullYear() - new Date(item.mulai_bekerja).getUTCFullYear()) * 150000 + item.status_menikah * 250000 + 300000 + 2000000
                             : (new Date().getUTCFullYear() - new Date(item.mulai_bekerja).getUTCFullYear()) * 150000 + item.status_menikah * 250000 + item.jml_anak * 150000 + 2000000
                            }</td>
                    </tr>
                    `
                })
                xml += `
                <tr><td colspan="12">total</td></tr>
                `
            } else {
                xml = `
                <tr>
                    <td colspan="12" align="center">Belum ada data</td>
                </tr>
                `
            }
            $('.table tbody').html(xml)


        }

        // meload data dari localStorage ketika event window load
        window.onload = function() {
            const data = JSON.parse(localStorage.getItem('data'))
            if (data) {
                allData.push(...data)
                renderTable()
            }
        }
    </script>
@endpush

{{-- @push('script')
<script>
    //initialize
    const GAJI_AWAL = 2000000
    const TUNJ_MENIKAH = 250000
    const TUNJ_ANAK = 150000
    const TUNJ_JUML_ANAK = 2
    const TUNJ_TAHUNAN = 150000

    let dataGaji = JSON.parse(localStorage.getItem('dataGaji')) || []
    let totalGajiAwal = totalTunjangan = totalGaji = 0

function insert(dataGaji){
  const data = $('#formKaryawan').serializeArray()
  let newData = {}
  data.forEach(function(item, index){
    let name = item['name']
    let value = (name === 'anak'
    ? Number(item['value']):item['value'])
    newData[name] = value
  })
  newData['gaji'] = GAJI_AWAL
  newData['tunjangan'] = hitungTunjangan(
                newData['tahun'],
                newData['status'],
                newData['anak']
  newData['totalg'] = GAJI_AWAL + newData['tunjangan']

  localStorage.setItem('gaji', JSON.stringify([...gaji, newData]))
  return newData
}
function showData(arr){
  let row = ''
  if(arr.length == 0){
    return row = `<tr><td colspan="3">Belum Ada Data</td></tr>`
  }
  arr.forEach(function(item, index){
    row += `<tr>`
    row += `<td>${item['id']}</td>`
    row += `<td>${item['nama']}</td>`
    row += `<td>${item['jk']}</td>`
    row += `<td>${item['anak']}</td>`
    row += `<td>${item['tahun']}</td>`
    row += `<td>${item['sm']}</td>`
    row += `<td>${item['gaji'].toLocalString('id-ID')}</td>`
    row += `<td>${item['tunjangan'].toLocalString('id-ID')}</td>`
    row += `<td>${item['totalg'].toLocalString('id-ID')}</td>`

    // row += `<td>2000000</td>`
    row += `</tr>`
    totalGajiAwal += item['gaji']
    totalTunjangan += item['tunjangan']
    totalGaji += item['totalg']
  })
row += `<tr>`
row += `<td colspan="6">Total</td>`
row += `<td>${totalGajiAwal.toLocalString('id-ID')}</td>`
row += `<td>${totalTunjangan.toLocalString('id-ID')}</td>`
row += `<td>${totalGaji.toLocalString('id-ID')}</td>`
row += `</tr>`

  return row
}

function searching(arr, key, teks){
    for(let i=0; i < arr.length; i++){
        if(arr[i][key] == teks)
        return i
    }
    return -1
}

function insertionSortt(arr, key)
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

    function _calculateAge(birthday) { // birthday is a day
        birthday = new Date(birthday)
        var ageDifMs = Date.now() - birthday.getTime();
        var ageDate = new Date(ageDifMs); // milisecond from epoch
        return Math.abs(ageDate.getUTCFullYear()- 1970) * 1500000;
    }

    function hitungTunjangan(tahunMulaiKerja,status,anak){
        //tunjangan tahunan
        let tunjKerja = _calculateAge(tahunMulaiKerja) + TUNJ_TAHUNAN

        //tunjangan pasangan
        let tunjPasangan = status==="single"? 0: TUNJ_MENIKAH

        //tunjangan anak
        let tunjAnak = anak > 2? TUNJ_ANAK * 2: TUNJ_ANAK * anak

        return tunjKerja + tunjPasangan + tunjAnak
    }



$(function(){
  //property
  let dataKaryawan = []
  // event
    $('#formKaryawan').on('submit', function(e){
      e.preventDefault()
      tunjangan = (_calculateAge($('#tahun').val()))
        $('#tunjangan').val(tunjangan)
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
@endpush --}}



</x-app>
