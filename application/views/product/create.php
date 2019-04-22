    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">Forms</a>
          <span class="breadcrumb-item active">Form Layouts</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Create Users</h4>
          <p class="mg-b-0">Create User Prestress.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">

		<?php echo validation_errors();?>
		<?php echo form_open_multipart('product/create');?>

          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
                    <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">ID: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="id" placeholder="Enter Product's ID">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" placeholder="Enter Name">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Type: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="type" placeholder="Enter Type">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Length: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="length" placeholder="Enter Length">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Strands: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="strands" placeholder="Enter Strands">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="price" placeholder="Enter Price">
                </div>
              </div>
                    
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Stock: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="stock" placeholder="Enter Stock">
                </div>
              </div>

			  <div class="col-lg-6">
				<div class="form-group">
					<label class="form-control-label">Images: <span class="tx-danger">*</span></label>
					<input class="form-control" type="file" name="image[]" multiple="multiple" placeholder="Insert Images">
				</div>
			  </div>

            </div><!-- row -->

            <div class="form-layout-footer">
              <button type="submit" class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
		  </form>
        </div>
      </div>
    </div>
