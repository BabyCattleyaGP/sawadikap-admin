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
			<h4><?php echo $data[0]->id?></h4>
			<p class="mg-b-0"><?php echo $data[0]->id_user?> - <?php echo $data[0]->fname?> <?php echo $data[0]->lname?></p>
		</div>
	</div><!-- d-flex -->

	<div class="br-pagebody">
		<div class="br-section-wrapper">

			<!--/><?php //echo validation_errors();?>
			<?php// echo form_open_multipart('product/create');?><!-->

			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">ID Order: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->id?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">User: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->id_user?> - <?php echo $data[0]->fname?> <?php echo $data[0]->lname?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Total Order: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->total_order?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Price: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo "Rp.".number_format($data[0]->total_price)?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Total Price: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo "Rp.".number_format($data[0]->total)?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Address: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->address?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Status: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->status?>" disabled>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Order Time: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->time?>" disabled>
						</div>
					</div>

				</div><!-- row -->

			<!--	<div class="form-layout-footer">
					<button type="submit" class="btn btn-info">Submit Form</button>
					<button class="btn btn-secondary">Cancel</button>
				</div>form-layout-footer -->
			
			</div><!-- form-layout -->
			</form>
		</div>
	</div>
</div>
