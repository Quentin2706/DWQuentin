<?php
echo json_encode(DepartementsManager::findByRegionAPI($_POST['id']));
