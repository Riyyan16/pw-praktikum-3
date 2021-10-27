<?php
$pete = array("pete");
$tomat= array("tomat");
$bayam= array("bayam");
$beratpete = array(0.1);
$berattomat = array(0.2);
$beratbayam = array(0.3);
?>
<!DOCTYPE html>
<h1>Warung Sayur Pak Joy</h1>
<style>
    h1 {
   color: #00a2c6
    }
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
</style>
 
<table border="1">
    <tr>
        <th rowspan="2">Nama Barang</th>
        <th colspan="4">Berat</th>
    </tr>
    <tr>
        <th>kg</th>
        <th>gram</th>
        <th>miligram</th>
        <th>liter</th>
    </tr>
    <tr> <?php for ($i=0; $i < 1 ; $i++) { ?>
        <td> <?php echo $pete[$i]; ?></td>
        <td> <?php echo $beratpete[$i]; ?></td>
        <td> <?php echo $beratpete[$i]*1000; ?></td>
        <td> <?php echo $beratpete[$i]*100000; ?></td>
        <td>-</td>
        <?php } ?>
    </tr> 
    <tr> <?php for ($i=0; $i < 1 ; $i++) { ?>
        <td> <?php echo $tomat[$i]; ?></td>
        <td> <?php echo $berattomat[$i]; ?></td>
        <td> <?php echo $berattomat[$i]*1000; ?></td>
        <td> <?php echo $berattomat[$i]*100000; ?></td>
        <td>-</td>
        <?php } ?>
    </tr> 
    <tr> <?php for ($i=0; $i < 1 ; $i++) { ?>
        <td> <?php echo $bayam[$i]; ?></td>
        <td> <?php echo $beratbayam[$i]; ?></td>
        <td> <?php echo $beratbayam[$i]*1000; ?></td>
        <td> <?php echo $beratbayam[$i]*100000; ?></td>
        <td>-</td>
        <?php } ?>
    </tr> 

</table>
</html>
