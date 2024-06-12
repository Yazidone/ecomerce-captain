<!-- Edit Modal HTML -->


<div id="addModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="/product/store" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Add Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
						{{-- <div class="form-group">
							<label>Id</label>
							<input type="text"  name="name"  class="form-control" required>
						</div> --}}

						<div class="form-group">
							<label>Name</label>
							<input type="text"  name="Name"  class="form-control" required>
						</div>										
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="image" class="form-control" >
						</div>										
						<div class="form-group">
							<label>Category</label>
							<select name="category_id" id=""> 
								@foreach($categories as $category)
                                	<option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
							</select>
							{{-- <input type="text" name="name" class="form-control" required> --}}
						</div>		
						<div class="form-group">
							<label>Price</label>
							<input type="text" name="Price" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Size</label>
							<select name="size" id="">
								{{-- <option value="L">Large (L)</option>
								<option value="XL">Extra Large (XL)</option>
								<option value="XXL">Double Extra Large (XXL)</option>
								<option value="40">40</option>
								<option value="41">41</option>
								<option value="42">42</option>
								<option value="44">44</option>
								<option value="45">45</option> --}}

							</select>
						</div>	
						{{-- color product --}}
						<div class="form-group">
							<label>Color</label>
                            <input type="text" name="color1" class="form-control" placeholder="color 1" required> <br>
                            <input type="text" name="color2" class="form-control" placeholder="color 2" > <br>
                            <input type="text" name="color3" class="form-control" placeholder="color 3" > <br>
                            <input type="text" name="color4" class="form-control" placeholder="color 4" > <br>
                        </div>

						
						<div class="form-group">
							<label>Quantity</label>
							<input type="text" name="Quantity" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Description</label>
							<input type="text" name="Description" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>CODE_BARE</label>
							<input type="file" name="CODE_BARE" class="form-control" required>
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

