<?php
$liste = PersonneManager::getListAPI();
?>
<div class="espaceHorizon fondBlanc"></div>
<div id="contenu">
	<div id="crudBarreOutil">
    <a class=" crudBtn crudBtnOutil" href="/Commercial/PHP/Controller/Routes.php?mode=ajout" >Ajouter </a>
</div>
		<div id="crudTableau">
		<table id="crud" class="avectri">
			<thead class="crudEntete">
                <th class="crudColonne"  >Nom</th>
                <th class="crudColonne"  >Prenom</th>
			</thead>
				<tr class="crudLigne">
				<td>total : </td>	
					<td id="total"></td>
				</tr>
		</table>

		
	</div>


</div>
<div class="espaceHorizon fondBlanc"></div>