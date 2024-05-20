<!-- Edit Modal HTML -->
<div id="addModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="category/store" method="post" enctype="multipart/form-data">
				@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Add Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">										
						<div class="form-group">
							<label>NAME</label>
							<input type="text" name="name" class="form-control" required>
						</div>										
										
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="image" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>