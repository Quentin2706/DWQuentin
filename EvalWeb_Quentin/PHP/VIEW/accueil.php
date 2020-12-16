<?php
if (isset($_SESSION['user']))
     {
if($_SESSION['user']->getRole() == 1)
{
echo'<div class="bcgmain">
<div></div>
<div class="colonne">
    <div class="bouton centrer"><a href="index.php?page=ListeEleve">Gérer les élèves</a></div>
    <div class="bouton centrer"><a href="index.php?page=ListeEnseignant">Gérer les enseignants</a></div>
    <div class="bouton centrer"><a href="index.php?page=ListeMatiere">Gérer les matières</a></div>
    <div class="bouton centrer"><a href="index.php?page=ListeSuivi">Gérer les notes</a></div>
</div>
<div></div>
</div>';
} else {
    header("location:index.php?page=ListeSuivi");
}
}