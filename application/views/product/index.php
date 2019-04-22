<!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <!-- <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">Tables</a>
          <span class="breadcrumb-item active">Data Table</span> -->
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Daftar Product</h4>
          <p class="mg-b-0">Daftar Product Prestress.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="table-wrapper">
            <a href="<?php echo base_url()."product/create"?>"><button class="btn btn-info" style="margin-bottom: 25px">Create Product</button></a>
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID Product</th>
                  <th class="wd-15p">Nama Product</th>
                  <th class="wd-15p">Prices</th>
                  <th class="wd-15p">Stock</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach($user as $row){?>
                <tr>
                  <td><?php echo $row->id?></td>
                  <td><?php echo $row->name?></td>
                  <td><?php echo "Rp.".number_format($row->price)?></td>
                  <td><?php echo $row->stock?></td>
                  <td>
                    <a href="<?php echo base_url()."product/detail/".$row->id?>">
                      <button class="btn btn-info" style="margin-bottom: 25px">Detail</button>
                    </a>
				  	<a href="<?php echo base_url()."product/edit/".$row->id?>">
					  <button class="btn btn-warning" style="margin-bottom: 25px">Edit</button>
				  	</a>
                    <a href="<?php echo base_url()."product/delete/".$row->id?>">
                      <button class="btn btn-danger" style="margin-bottom: 25px">Delete</button>
                    </a>
                  </td>
                </tr>
                <?php }?>

              </tbody>
            </table>
          </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      <!-- <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer> -->
    </div><!-- br-mainpanel -->
