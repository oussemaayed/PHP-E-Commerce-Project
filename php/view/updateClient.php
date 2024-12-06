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
									<form action="../controller/updateClient.php" enctype="multipart/form-data" method="post" >
						
								<div class="form-group">
										
										<input type="text"  class="form-control hidden" name="id" value="<?php echo $value[0] ?>">
										
									</div>
                                   
								<div class="form-group">
										<label for="exampleInputName">Nom de client</label>
										<input type="text" class="form-control" name="nom" value="<?php echo $value[1] ?>" id="nom" aria-describedby="nameHelp" placeholder="Enter nom client">
										<small id="nameHelp" class="form-text text-muted">enter nom du client </small>
									</div>
                                <div class="form-group">
										<label for="exampleInputName">prenom de client</label>
										<input type="text" class="form-control" name="prenom" value="<?php echo $value[2] ?>" id="prenom" aria-describedby="nameHelp" placeholder="Enter prenom client">
										<small id="nameHelp" class="form-text text-muted">enter prenom du client </small>
									</div>
									<div class="form-group">
										<label for="exampleInputSolde">email</label>
										<input type="email" class="form-control"  id="email" value="<?php echo $value[3]; ?>" name="email" aria-describedby="soldeHelp" placeholder="Enter email">
										<small id="soldeHelp" class="form-text text-muted">enter email </small>
									</div>

									<div class="form-group">
										<label for="exampleInputSolde">mot de passe</label>
										<input type="string" class="form-control"  id="password" value="<?php echo $value[4]; ?>" name="password" aria-describedby="soldeHelp" placeholder="Enter mot de passe">
										<small id="soldeHelp" class="form-text text-muted">enter mot de passe </small>
									</div>

									<div class="form-group">
										<label for="exampleInputSolde">telephone</label>
										<input type="string" class="form-control"  id="tel" value="<?php echo $value[5]; ?>" name="tel" aria-describedby="soldeHelp" placeholder="Enter telephone">
										<small id="soldeHelp" class="form-text text-muted">enter telephone </small>
									</div>

									<div class="form-group">
										<label for="exampleInputSolde">code</label>
										<input type="string" class="form-control"  id="code" value="<?php echo $value[6]; ?>" name="code" aria-describedby="soldeHelp" placeholder="Enter code">
										<small id="soldeHelp" class="form-text text-muted">enter code </small>
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