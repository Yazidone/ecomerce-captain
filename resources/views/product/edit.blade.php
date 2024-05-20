<!-- Edit Modal HTML -->
<form>
<div id="editModal{{ $product->id }}"  class="modal fade">
	{{-- {{ $product->id }} --}}
		<div class="modal-dialog">
			
			<div class="modal-content">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" value="{{ $product->name }}" required>
						</div>										
						<div class="form-group">
							<label>Quantity</label>
							<input type="text" class="form-control" value="{{ $product->discount }}" required>
						</div>										
						<div class="form-group">
							<label>Price</label>
							<input type="text" class="form-control" value="{{ $product->price }}" required>
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
				
			</div>
		</div>
	</div>
</form>