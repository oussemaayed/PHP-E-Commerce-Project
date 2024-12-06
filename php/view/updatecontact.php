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
									<form action="../controller/updateContact.php" enctype="multipart/form-data" method="post" >
						
								<div class="form-group">
										
										<input type="text"  class="form-control hidden" name="email" value="<?php echo $value[0] ?>">
										
									</div>

								<div class="form-group">
										<label for="exampleInputName">Email du contact</label>
										<input type="email" class="form-control" name="email" value="<?php echo $value[0] ?>" id="exampleInputName" aria-describedby="email" placeholder="Entrer l'email du contact">
										<small id="nameHelp" class="form-text text-muted">Entrer l'email du contact </small>
									</div>

									<div class="form-group">
										<label for="prixupdate">Le Message</label>
										<input type="text" class="form-control" id="message" value="<?php echo $value[1]; ?>" name="message" aria-describedby="prixHelp" placeholder="Entrer le message">
										<small id="prixHelp" class="form-text text-muted">entrer le message </small>
									</div>

									<div class="form-group">
										<label for="exampleInputSolde">Le Sujet</label>
										<input type="text" class="form-control"  id="sujet" value="<?php echo $value[2]; ?>" name="sujet" aria-describedby="soldeHelp" placeholder="Entrer le sujet">
										<small id="soldeHelp" class="form-text text-muted">entrer le sujet</small>
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