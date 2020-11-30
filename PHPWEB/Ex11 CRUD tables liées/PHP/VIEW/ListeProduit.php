<?php
$liste = ProduitsManager::getList();
?>
    <div id="crudBarreOutil">
        <a class=" crudBtn crudBtnOutil" href='index.php?codePage=formProduit&mode=ajout'>Ajouter </a>
    </div>
    <div id="crudTableau">
        <table>
            <thead >
                <th class="crudColonne">Libellé</th>
            </thead>
            <?php foreach ($liste as $elt)
                    {
                        echo '<tr>';
                        echo '<td class="crudColonne">' . $elt->getLibelleProduit() . '</td>';
            ?>
            <td>
                <a class=" crudBtn crudBtnEdit"
                    href='index.php?codePage=formProduit&mode=edit&id=<?php echo $elt->getIdProduit(); ?>'>Afficher </a>
                <a class=" crudBtn crudBtnModif"
                    href='index.php?codePage=formProduit&mode=modif&id=<?php echo $elt->getIdProduit(); ?>'>Modifier</a>
                <a class=" crudBtn crudBtnSuppr"
                    href='index.php?codePage=formProduit&mode=delete&id=<?php echo $elt->getIdProduit(); ?>'>Supprimer</a></td>
            </tr>
            <?php }?>

        </table>
    </div>


