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
      <h4>Update Users</h4>
      <p class="mg-b-0">Update User Prestress.</p>
    </div>
 </div><!-- d-flex -->

 <div class="br-pagebody">
    <div class="br-section-wrapper">

       <?php echo validation_errors();?>
       <?php echo form_open_multipart('users/update/'.$id);?>
            <div class="form-layout form-layout-1">
                <div class="row mg-b-25">

                  <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                       <input class="form-control" type="text" name="fname" placeholder="Enter firstname" value="<?php echo $data[0]->fname ?>">
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                       <input class="form-control" type="text" name="lname" placeholder="Enter lastname" value="<?php echo $data[0]->lname ?>">
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                       <input class="form-control" type="email" name="email" placeholder="Enter Email" value="<?php echo $data[0]->email ?>">
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Mobile: <span class="tx-danger">*</span></label>
                       <input class="form-control" type="number" name="mobile" placeholder="Enter Mobile" value="<?php echo $data[0]->mobile ?>">
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
                       <input class="form-control" type="text" name="company" placeholder="Enter Company" value="<?php echo $data[0]->company ?>">
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <div class="form-group mg-b-10-force">
                       <label class="form-control-label">City: <span class="tx-danger">*</span></label>
                       <select name="city" class="form-control select2" data-placeholder="Choose city">
                          <option label="Choose city"></option>
                          <option value="Aceh" <?php echo $data[0]->city == 'Aceh' ? ' selected="selected"' : ''; ?>>Aceh</option>
                          <option value="DKI Jakarta" <?php echo $data[0]->city == 'DKI Jakarta' ? ' selected="selected"' : ''; ?>>DKI Jakarta</option>
                          <option value="Surabaya"<?php echo $data[0]->city == 'Surabaya' ? ' selected="selected"' : ''; ?>>Surabaya</option>
                       </select>
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                       <input class="form-control" type="text" name="phone" placeholder="Enter Phone" value="<?php echo $data[0]->phone ?>">
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <div class="form-group">
                       <label class="form-control-label">Fax: <span class="tx-danger">*</span></label>
                       <input class="form-control" type="text" name="fax" placeholder="Enter Fax" value="<?php echo $data[0]->fax ?>">
                     </div>
                  </div>

                  <div class="col-lg-12">
                     <div class="form-group">
                          <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                          <textarea class="form-control" name="address" placeholder="Enter Address"><?php echo $data[0]->address ?></textarea>
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
