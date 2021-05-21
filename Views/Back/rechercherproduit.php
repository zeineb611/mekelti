<?php
require_once '../../Controller/produitC.php';

$produitC =  new produitC();
if(isset($_POST['query'])){
    $produiting = $produitC->rechercherproduit($_POST['query']);
}
else{
    $produiting = $produitC->afficherproduit();
}



				foreach($produiting as $produit){
			?>
      <tr>
					 <td><?PHP echo $produit['id']; ?></td>
					<td><?PHP echo $produit['Nom']; ?></td>
				    <td><?PHP echo $produit['prix']; ?></td>
                    <td><?PHP echo $produit['qty']; ?></td>
                    <td><?PHP echo $produit['idcat']; ?></td>
					
					
					<td><img src="../Front/images/<?php echo $produit['image'];?>" width="200px" height="200px"> </td>
                    
					<td>
						<form method="POST" action="deleteproduit.php">
						<input type="submit" name="supprimer" value="supprimer" class="btn btn-danger my-1">


						<input type="hidden" value=<?PHP echo $produit['id']; ?> name="id">
						</form>
					</td>
          <td>
                    <button class="btn btn-warning my-1"><a href="modifproduit.php?id=<?PHP echo $produit['id']; ?>"> Modifier </a>	</button>
					</td>
				</tr>

				
			<?PHP
				}
			?>
