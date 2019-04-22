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
		  <?php echo form_open('users/create');?>
			  <div class="form-layout form-layout-1">
				<div class="row mg-b-25">

				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="fname" placeholder="Enter firstname">
					</div>
				  </div>

				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="lname" placeholder="Enter lastname">
					</div>
				  </div>

				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="email" name="email" placeholder="Enter Email">
					</div>
				  </div>

				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Mobile: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="number" name="mobile" placeholder="Enter Mobile">
					</div>
				  </div>

				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="password" name="password" placeholder="Enter Password">
					</div>
				  </div>

				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Confirm Password: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="password" name="confirm_password" placeholder="Enter Password">
					</div>
				  </div>

				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Company: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="company" placeholder="Enter Company">
					</div>
				  </div>

				  <div class="col-lg-6">
					<div class="form-group mg-b-10-force">
					  <label class="form-control-label">City: <span class="tx-danger">*</span></label>
					  <select name="city" class="form-control select2" data-placeholder="Choose country">
						<option label="Choose country"></option>
						<option value="Aceh">Aceh</option>
						<option value="DKI Jakarta">DKI Jakarta</option>
						<option value="Surabaya">Surabaya</option>
					  </select>
					</div>
				  </div>

				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="phone" placeholder="Enter Phone">
					</div>
				  </div>

				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Fax: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="fax" placeholder="Enter Fax">
					</div>
				  </div>

				  <div class="col-lg-12">
					<div class="form-group">
						<label class="form-control-label">Address: <span class="tx-danger">*</span></label>
						<textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
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
