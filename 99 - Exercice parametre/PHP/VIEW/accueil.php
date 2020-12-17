<?php
if(isset($_SESSION['utilisateur'])){
    if($_SESSION['utilisateur']->getRole()=="Admin"){
        echo "Vous êtes administrateur";
    }
    else{
        echo "Vous êtes utilisateur";
    }
}

echo '    
    <div class="bcgblack">
    <div></div>
    <div class="block accueilfond grosflex">
        <img class="grosflex" src="./IMG/main.jpg" alt="image de fond">
    </div>
    <div></div>
</div>
</body>
</html>';

