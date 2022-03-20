<x-app>
<div class="section-header">
    <h1>Form Data Simulasi</h1>
</div>
<div class="card-body">
<form id="formKaryawan">
    <div class="card-body">
                <div class="form-group row">
                  <label for="ID" class="col-sm-2 col-form-label">ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id" id="id" id="ID" placeholder="ID" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="Nama" placeholder="Nama" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Nama" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <input class="form-check-input" type="radio" value="L" name="jk" ID="jk">
                    <label class="form-check-label">Laki-Laki</label>
                  </div>
                  <div class="col-sm-2">
                    <input class="form-check-input" type="radio" value="P" name="jk" ID="jk">
                    <label class="form-check-label">Perempuan</label>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" id="btnSimpan" type="submit">Simpan</button>
              <button class="btn btn-default" id="btnReset" type="reset">Reset</button>
          </form>
        </div>
      </div>


<div class="card">
    <div class="card-header">
        <h3>Data</h3>
    </div>
    <div class="card-body">
        <div>
            <button class="btn btn-success mb-3" type="button" id="sorting">Sorting</button>
            <button class="btn btn-danger mb-3" type="button" id="btnSearch">Cari</button>
            <input type="search" class="form-control col-sm-3 mb-3" name="search" id="search" placeholder="Search">
        </div>
        
        <table class="table table-compact table-striped table-bordered" id="tblKaryawan">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan-3 align-center">Belum ada Data</td>
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
    row += `<td>${item['nama']}</td>`
    row += `<td>${item['jk']}</td>`
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