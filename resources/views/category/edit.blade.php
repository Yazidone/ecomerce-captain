<!-- Edit Modal HTML -->
<div id="editModal{{ $category->id }}" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="update" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>

					<th>ID</th>
					<th>IMAGES</th>
					<th>NAME</th>
					<th>ACTION</th>

					<div class="modal-body">					
						<div class="form-group">
							<label>Id</label>
							<input type="text" class="form-control" required>
						</div>	
 
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>										
															
										
						<div class="form-group">
							<label>Image</label>
							<input type="file" class="form-control" required>
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