<?php 
include "process/require/dataconf.php";
$sql = "SELECT chargeinvoice.id as id, vehicles.plateNumber as platenumber, vehicles.make as make, vehicles.series as series, personalInfo.firstName,personalInfo.lastName,chargeinvoice.date FROM chargeinvoice join vehicles on chargeinvoice.vehicleId = vehicles.id join personalInfo on chargeinvoice.personalId = personalInfo.personalId order by chargeinvoice.date desc";
$stmt = $connection->prepare($sql); 
$stmt->execute(); 
$ci = $stmt -> get_result();
?>
<!DOCTYPE html>
<html lang="en">

<head>  
</head>
<body>
	<div class="table-responsive">
                  <table class="table table-bordered table-dark" id="doctables">
                      <thead>
                        <tr class="grid">
                            
                            <th>Plate</th>
                            <th>Made</th>
                            <th>Series</th>
                            <th>Client Name</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                          <?php foreach($ci as $chargeInvoice): ?>
                              <tr>
                                <td><?= $chargeInvoice['platenumber']; ?></td>
                                <td><?= $chargeInvoice['make']; ?></td>
                                <td><?= $chargeInvoice['series']; ?></td>
                                <td><?= $chargeInvoice['firstName']; ?>  <?= $chargeInvoice['lastName']; ?></td>
                                <td><?= $chargeInvoice['date']; ?></td>
                                  <td>
                                      <a href="print.php?id=<?= $chargeInvoice['id'];?>"><input type='submit'value='Full Details' name='submit' class="btn btn-primary"></a>
                                  </td>
                              </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                      <br>
                  </div>
</body>
</body> 