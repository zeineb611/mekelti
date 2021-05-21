<?php
require_once '../../Controller/categorieC.php';

$categorieC =  new categorieC();
if($_POST['query']=="nom"){
    $categorieing = $categorieC->tricategorieNom();
}





				foreach($categorieing as $categorie){
			?>
      <tr>
					 <td><?PHP echo $categorie['id']; ?></td>
					<td><?PHP echo $categorie['nomcat']; ?></td>

					
					
					<td><img src="../Front/images/<?php echo $categorie['image'];?>" width="200px" height="200px"> </td>
                   
					<td>
						<form method="POST" action="deletecategorie.php">
						<input type="submit" name="supprimer" value="supprimer" class="btn btn-danger my-1">


						<input type="hidden" value=<?PHP echo $categorie['id']; ?> name="id">
						</form>
					</td>
          <td>
                    <button class="btn btn-warning my-1"><a href="modifcategorie.php?id=<?PHP echo $categorie['id']; ?>"> Modifier </a>	</button>
					</td>
				</tr>

				
			<?PHP
				}
			?>
