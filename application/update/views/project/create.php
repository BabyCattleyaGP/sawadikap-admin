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
          <p class="mg-b-0">Create Project Prestress.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">

		<?php echo validation_errors();?>
		<?php echo form_open_multipart('project/create');?>

          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Project Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" placeholder="Enter Name">
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
					<textarea class="form-control" name="description" placeholder="Description"></textarea>
                </div>
              </div>

			  <div class="col-lg-6">
				<div class="form-group">
					<label class="form-control-label">Image: <span class="tx-danger">*</span></label>
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
