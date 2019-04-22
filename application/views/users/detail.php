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
			<h4><?php echo $data[0]->fname?></h4>
			<p class="mg-b-0"><?php echo $data[0]->lname?></p>
		</div>
	</div><!-- d-flex -->

	<div class="br-pagebody">
		<div class="br-section-wrapper">

			<?php echo validation_errors();?>
			<?php echo form_open_multipart('users/create');?>

			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">
					<div class="col-lg-12">
						<div class="form-group">
							<label class="form-control-label">ID: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->id?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">First Name: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->fname?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Last Name: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->lname?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Email: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->email?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Mobile: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->mobile?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Company: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->company?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">City: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->city?>" disabled>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="form-group">
							<label class="form-control-label">Address: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->address?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->phone?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Fax: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->fax?>" disabled>
						</div>
					</div>




				</div><!-- row -->
			</div><!-- form-layout -->
			</form>
		</div>
	</div>
</div>
