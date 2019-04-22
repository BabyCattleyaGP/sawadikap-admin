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
			<h4><?php echo $data[0]->name?></h4>
			<p class="mg-b-0"><?php echo $data[0]->name?></p>
		</div>
	</div><!-- d-flex -->

	<div class="br-pagebody">
		<div class="br-section-wrapper">

			<?php echo validation_errors();?>
			<?php echo form_open_multipart('product/edit/'.$id);?>

			<div class="form-layout form-layout-1">
				<div class="row mg-b-25">

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Name: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->name?>" name="name">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Type: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->type?>" name="type">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Length: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->length?>" name="length">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Strands: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->strands?>" name="strands">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Price: <span class="tx-danger">*</span></label>
							<input class="form-control" value="<?php echo $data[0]->price?>" name="price">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label">Images: <span class="tx-danger">*</span></label>
							<input class="form-control" type="file" name="image[]" multiple="multiple" placeholder="Insert Images">
						</div>
					</div>

					<div class="col-md-12">
						<div class="row">
							<?php foreach($img as $row){?>
								<div class="col-md-4">
									<img src="<?php echo base_url()."assets/upload/".$row->img?>" style="width: 100%">
								</div>
							<?php }?>
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
