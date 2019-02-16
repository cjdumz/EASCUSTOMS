<?php
    include "require/dataconf.php";
    if (isset($_POST['submit'])){
        $vehicleId = $_POST['vehicleId'];
        $scope = implode(',',$_POST['scope']);
        $total = $_POST['total'];
        $sparePartsId = implode(',', $_POST['spareParts']);

        $sql2 = "SELECT personalId From vehicles where id = '$vehicleId'";
            $stmt = $connection->prepare($sql2);
            $stmt->execute();
            $rows = $stmt->get_result();
            foreach($rows as $row):
            $personalId = $row['personalId'];
            endforeach;
            $query = $connection->prepare("INSERT INTO chargeinvoice (vehicleId,personalId,scopeName,sparepartsId,TotalPrice) values(?,?,?,?,?);");
            $query->bind_param('iissi', $vehicleId, $personalId, $scope,$sparePartsId, $total);
            $query->execute();
            header('Location:../chargeinvoice.php');
    }else{
        exit();
    }
?>