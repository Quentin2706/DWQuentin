<?php
$liste = CategoriesManager::getList();
?>
    <div id="crudBarreOutil">
        <a class=" crudBtn crudBtnOutil" href='index.php?codePage=formCategorie&mode=ajout'>Ajouter </a>
    </div>
    <div id="crudTableau">
        <table>
            <thead >
                <th class="crudColonne">Libellé</th>
            </thead>
            <?php foreach ($liste as $elt)
                    {
                        echo '<tr>';
                        echo '<td class="crudColonne">' . $elt->getLibelleCategorie() . '</td>';
            ?>
            <td>
                <a class=" crudBtn crudBtnEdit"
                    href='index.php?codePage=formCategorie&mode=edit&id=<?php echo $elt->getIdCategorie(); ?>'>Afficher </a>
                <a class=" crudBtn crudBtnModif"
                    href='index.php?codePage=formCategorie&mode=modif&id=<?php echo $elt->getIdCategorie(); ?>'>Modifier</a>
                <a class=" crudBtn crudBtnSuppr"
                    href='index.php?codePage=formCategorie&mode=delete&id=<?php echo $elt->getIdCategorie(); ?>'>Supprimer</a></td>
            </tr>
            <?php }?>

        </table>
    </div>


