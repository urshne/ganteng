<x-app>
    <div class="section-body">
        <div class="row">
           <div class="col-12 col-xl-9 order-1">
              <div class="card">
                 <div class="card-header">
                    <h4>Data Transaksi</h4>
                 </div>
                 <div class="card-body">
                    <div class="row">
                       <div class="col-6">
                          <h3 class="section-title mt-0">Date</h3>
                          <div class="form-row">
                             <div class="form-group col-md-6">
                                <label for="datain">Date Entry</label>
                                <input type="date" class="form-control form-control-sm" value="{{ date('Y-m-d') }}">
                             </div>
                             <div class="form-group col-md-6">
                                <label for="datain">Estimated Completed</label>
                                <input type="date" class="form-control form-control-sm" value="{{ date('Y-m-d', strtotime(date('Y-m-d') . '+3 day')) }}">
                             </div>
                          </div>
                          <h3 class="section-title mt-0">
                             Member
                          </h3>
                          <div class="form-row">
                             <div class="form-group col-md-6">
                                <label for="">Name</label>
                                <input type="text" class="form-control form-control-sm" placeholder="John Doe" readonly id="namaMember">
                             </div>
                             <div class="form-group col-md-6">
                                <label for="">Phone Number</label>
                                <div class="input-group mb-3">
                                   <input type="text" name="" class="form-control form-control-sm" placeholder="+62 857 XXXX XXXX" readonly id="tlpMember">
                                   <div class="input-group-append">
                                      <button class="btn btn-sm btn-primary btn-icon icon-left" type="button" data-toggle="modal" data-target="#memberModal"><i class="fas fa-search"></i> Find Member</button>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-6">
                        <div class="d-flex justify-content-end align-items-end h-100">
                           <div class="d-block">
                              <h5 class="text-center text-primary">Total Pembayaran</h5>
                              <h3 class="text-center text-primary">Rp <span id="totalHarga">0</span></h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-3 order-3 order-xl-2">
            <div class="card">
               <div class="card-header">
                  <h4>Payment</h4>
               </div>
               <div class="card-body">
                  <div class="form-group">
                     <label for="diskon">Discount</label>
                     <input type="text" id="diskon" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                     <label for="pajak">Tax</label>
                     <input type="text" id="pajak" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                     <label for="total_bayar">Cash</label>
                     <input type="text" id="total_bayar" class="form-control form-control-sm">
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 order-2 order-xl-3">
            <div class="card">
               <div class="card-header">
                  <h4>List Item</h4>
                  <div class="card-header-form">
                     <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                           <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#packageModal"><i class="fas fa-search"></i> Find Package</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-body p-0">
                  <div class="table-responsive">
                     <table class="table table-striped table-md" id="tableCart">
                        <tr>
                           <th>Name</th>
                           <th>Package Type</th>
                           <th>Price</th>
                           <th>QTY</th>
                           <th>Subtotal</th>
                           <th>Action</th>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
    
    @include('transaksi._modal')
</x-app>