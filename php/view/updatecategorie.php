 <!-- Modal 2 -->
 <div class="modal fade" id="exampleModal1<?php echo $value[0]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
									<form action="../controller/updateCategory.php" enctype="multipart/form-data" method="post" >
						
								<div class="form-group">
										
										<input type="text"  class="form-control hidden" name="id" value="<?php echo $value[0] ?>">
										
									</div>


									<div class="form-group">
										<label for="prixupdate">Name of category</label>
										<input type="text" class="form-control" id="name" value="<?php echo $value[1]; ?>" name="name" aria-describedby="prixHelp" placeholder="Enter prix produit">
										<small id="prixHelp" class="form-text text-muted">enter name of category</small>
									</div>
                                    												
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
									</div>
								</div>
								</div>