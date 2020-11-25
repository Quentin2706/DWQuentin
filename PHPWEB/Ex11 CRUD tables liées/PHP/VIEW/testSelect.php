<?php
$listeCateg=CategoriesManager::getList();
$idCateg=2;
echo'

<form action="index.php?codePage=actionSelect" method="POST">
<select name="idCategorie" >';
foreach ($listeCateg as $uneCategorie)
{
    $sel="";
    if ($uneCategorie->getIdCategorie() == $idCateg)
    {
        $sel ="selected";
    }
    echo '<option value="'.$uneCategorie->getIdCategorie().'" '.$sel.' >'.$uneCategorie->getLibelleCategorie().'</option>';
}

echo '
</select>
<button type="submit">Valider</button>
</form>';