<x-app>
    <div class="section-header">
        <h1>Simulasi Gaji Karyawan</h1>
<div class="card-body">
    <form id="formKaryawan" autocomplete="off">
        <div class="card-body">
            <div class="row">
                    <div class="form-group row col-6">
                      <label for="ID" class="col-sm-2 col-form-label">ID</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="id" id="id" id="ID" placeholder="ID" required>
                      </div>
                    </div>
                    <div class="form-group row col-6">
                        <label for="Tahun" class="col-sm-3 col-form-label">Tanggal Beli</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="tanggal_beli" id="tanggal_beli" placeholder="Tanggal Mulai Bekerja" required>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="form-group row col-6">
                        <label for="Nama" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-5">
                            <select name="nama" id="namabarang" class="form-group">
                                <option selected disabled value>--- Pilih Barang ---</option>
                                <option value="Detergen">Detergent</option>
                                <option value="Pewangi">Pewangi</option>
                                <option value="Detergen Sepatu">Detergent Sepatu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row col-6">
                        <label for="anak" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-5">
                         <input type="number" class="form-control" name="jml" id="jml" placeholder="Pilih">
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="form-group row col-6">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-2.5">
                         <input type="number" class="form-control" name="harga" id="harga" value="" required readonly>
                        </div>
                    </div>
                    <div class="form-group row col-6">
                        <label for="Nama" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                        <div class="col-sm-4">
                          <input class="form-check-input" type="radio" value="Cash" name="jp" ID="jp">
                          <label class="form-check-label">Cash</label>
                        </div>
                        <div class="mb-3">
                            <input class="form-check-input" type="radio" value="E-Money" name="jp" ID="jp">
                            <label class="form-check-label">E-Money</label>
                        </div>
                    </div>
            </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" id="btnSimpan" type="submit">Simpan</button>
                        <button class="btn btn-default" id="btnReset" type="reset">Reset</button>
                      </div>
                    </div>
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
                    <th>ID</th>
                    <th>Tanggal Beli</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Diskon</th>
                    <th>Total Harga</th>
                    <th>Jenis Pembayaran</th>
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

const calculateDiskon = (item) => {
        let diskon = 0
        let totalg = item.harga * item.jml
        if (totalg >= 50000) {
            diskon = 15
            return diskon
        } else {
            return diskon
        }
    }
// function insertionSort(arr, key)
// {
//     let i, j, id, value;
//     for ( i = 1; i < arr.length; i++)
//     {
//         value = arr[i];
//         id = arr[i] [key]
//         j = i-1;
//         while (j >= 0 && arr[j] [key] > id)
//         {
//             arr[j + 1] = arr[j];
//             j = j - 1;
//         }
//         arr[j + 1] = value;
//     }
//     return arr
// }
// function searching(arr, key, teks){
//     for(let i= 0; i < arr.length; i++){
//         if(arr[i][key] == teks)
//         return i
//     }
//     return -1
// }
$(function(){
   //property

function insert(dataKaryawan){
const data = $('#formKaryawan').serializeArray();
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
        return row =`<tr><td colspan="3">Belum ada data</td></tr>`
    }
    arr.forEach(function(item, index){
        row +=`<tr>`
        row +=`<td>${item['id']}</td>`
        row +=`<td>${item['tanggal_beli']}</td>`
        row +=`<td>${item['nama']}</td>`
        row +=`<td>${item['harga']}</td>`
        row +=`<td>${item['jml']}</td>`
        row +=`<td>${item['diskon']}</td>`
        row +=`<td>${item['totalg']}</td>`
        row +=`<td>${item['jp']}</td>`
        row +=`</tr>`
    })
    return row
}
// function insertionSort(arr, key)
// {
//     let i, j, id, value;
//     for ( i = 1; i < arr.length; i++)
//     {
//         value = arr[i];
//         id = arr[i] [key]
//         j = i-1;
//         while (j >= 0 && arr[j] [key] > id)
//         {
//             arr[j + 1] = arr[j];
//             j = j - 1;
//         }
//         arr[j + 1] = value;
//     }
//     return arr
// }
// function searching(arr, key, teks){
//     for(let i= 0; i < arr.length; i++){
//         if(arr[i][key] == teks)
//         return i
//     }
//     return -1
// }
$(function(){
   //property
    let dataKaryawan = []
    //events
    $('#formKaryawan').on('submit', function(e){
        e.preventDefault()
        dataKaryawan.push(insert())
        $('#tblKaryawan tbody').html(showData(dataKaryawan))
        console.log(dataKaryawan)
    })
    $('#namabarang').on('change', function(){
        if($('#namabarang').val() === 'Detergen'){
            $('#harga').val('15000')
    }
    else if($('#namabarang').val() === 'Pewangi'){
        $('#harga').val('10000')
    }else if($('#namabarang').val() === 'Detergen Sepatu'){
        $('#harga').val('25000') }

    })


    newData['diskon'] = (newData['harga'] * newData['jml']) * (calculateDiskon(newData)/100)
    newData['totalg'] = (newData['harga'] * newData['jml']) - newData['diskon']

    let totalg = 0
    let tot = 0
    let totaldiskon = 0
    let grandtotalharga = 0

    totalg += parseInt(item.jml)
    totalg += parseInt(item.harga)
    totaldiskon += parseInt(item.diskon)
    grandtotalharga += parseInt(item.totalh)

    $('#sorting').on('click', function(){
            data = insertionSort(dataKaryawan, 'id', 'desc')
            console.log(data);

            data && $('#tblKaryawan tbody').html(showData(dataKaryawan))
        })
 row += `<tr class="bg-dark text-white">*6
      <td colspan="3">Total</td>
      <td>${totalh}</td>5
      <td>${totalg}</td>
      <td>${totaldiskon}</td>
      <td colspan="2">${grandtotalharga}</td>
  </tr>`

    //end of events
})
})
    </script>

@endpush
</x-app>
