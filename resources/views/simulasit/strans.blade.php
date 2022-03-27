<x-app>
    <div class="section-header">
        <h1>Simulasi Gaji Karyawan</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Form Data
                </div>
                <form id="Form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="id" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Tanggal Beli</label>
                                    <input type="datetime-local" name="tanggal_beli" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Pilih Barang</label>
                                    <select name="nama_barang" class="custom-select">
                                        <option selected disabled>Pilih</option>
                                        <option value="Detergen">Detergen</option>
                                        <option value="Pewangi">Pewangi</option>
                                        <option value="Detergen Sepatu">Detergen Sepatu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Qty</label>
                                    <input type="number" name="qty" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" class="form-control" value="0" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <label>Jenis Pembayaran</label>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_pembayaran" value="E-Money">
                                        <label class="form-check-label" for="inlineRadio1">E-Money/Transfer</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_pembayaran" value="Cash">
                                        <label class="form-check-label" for="inlineRadio2">Cash</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">Tabel Data</div>
                <div class="card-body px-0">
                    <div class="table responsive">
                        <table id="myTable" class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal Beli</th>
                                    <th>Nama Barang</th>
                                    <th>Qty</th>
                                    <th>Harga</th>
                                    <th>Diskon</th>
                                    <th>Total</th>
                                    <th>Jenis</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script>
            let data = []
            $('#Form').on('submit', function(e) {
                e.preventDefault()
                let obj = {}
                let form = new FormData(this)
                for (const key of form) {
                    obj[key[0]] = key[1]
                }
                data.push(obj)
                localStorage.setItem('data', JSON.stringify(data))
                renderTable('data')
                clearForm()
            })

            const clearForm = () => {
                let form = $('#Form')
                form[0].clear()
            }

            const renderTable = (str) => {
                let xml = ``
                let dataLocalStorage = JSON.parse(localStorage.getItem(str))
                dataLocalStorage.map(item => {
                    xml += `
                        <tr>
                            <td>${item.id}</td>
                            <td>${item.tanggal_beli}</td>
                            <td>${item.nama_barang}</td>
                            <td>${item.qty}</td>
                            <td>${item.harga}</td>
                            <td></td>
                            <td></td>
                            <td>${item.jenis_pembayaran}</td>
                        </tr>
                    `
                })

                $('#myTable tbody').append(xml)
            }

            $(window).on('load', function() {
                renderTable('data')
            })
        </script>
    </x-slot>
</x-app>
