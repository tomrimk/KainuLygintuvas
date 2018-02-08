<?php
include_once("planas.php");
include_once("PlanuList.php");
$connect=mysqli_connect('localhost','root','','planai');

if(mysqli_connect_errno($connect))
{
    echo 'Nepavyko prisijungti: '.mysqli_connect_error();
} else {
    $result = mysqli_query($connect,"select * from planai");

    $planai = array();

    while($row=mysqli_fetch_array($result)) {
        $temp = new planas($row['operatorius'], $row['min'], $row['sms'], $row['gb'], $row['kaina']);

        $planai[] = $temp;
    }

    $planuList = new PlanuList($planai);
}

?>

<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="UTF-8">
        <meta name="description" content="Planu skaiciuokle">
		<title>Skaičiuoklė</title>
        <link rel="stylesheet" href="css/style.css">
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		
	</head>
	<body>
		<header>
			<h1>Planų lygintūvas</h1>
		</header>
        
        <div id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="forma">
                            <form action="index.php" method="post">
                                <h3>Iveskite norimus parametrus</h3>
                                <label>Minutės:</label>
                                <input  type="number" name="min" required>
                                <label>SMS:</label>
                                <input type="number" name="sms" required>
                                <label>GB:</label>
                                <input type="number" name="gb" required>
                                <label>Kaina:</label>
                                <input type="number" step="any" name="kaina" required>
                                <div class="button">
                                    <input class="buttons" type="reset" name="reset">
                                    <input class="buttons" type="submit" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
<?php
            if(isset($_POST['submit'])){
                echo "MIN: {$_POST['min']}";
                echo "<br/>";
                echo "SMS: {$_POST['sms']}";
                echo "<br/>";
                echo "GB: {$_POST['gb']}";
                echo "<br/>";
                echo "Kaina: {$_POST['kaina']}";
                echo "<br/>";

                for($i = 0; $i < count($planuList->getPlanai()); $i++) {
                    $planuList->getPlanai()[$i]->setRodiklis($planuList->calculate((int)$_POST['min'], (int)$_POST['sms'], (int)$_POST['gb'], (int)$_POST['kaina'], $planuList->getPlanai()[$i]));
                }

                $maziausias = $planuList->getPlanai()[0];

                for ($i = 1; $i < count($planuList->getPlanai()); $i++) {
                    if ($maziausias->getRodiklis() > $planuList->getPlanai()[$i]->getRodiklis()) {
                        $maziausias = $planuList->getPlanai()[$i];
                    }
                }

                $maziausias->setPasirinktas(true);
            }

            $count = 1;
?>
            <div class="row">
                <div class="col-md">
                    <div class="lentele">
                        <h2>Planai</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nr.</th>
                                    <th>Operatorius</th>
                                    <th>Plano minutės</th>
                                    <th>Plano sms</th>
                                    <th>Plano gb</th>
                                    <th>Kaina Eur</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($planuList->getPlanai() as $planas) { ?>
                                    <?php if($planas->getPasirinktas()) { ?>
                                        <tr class="pasirinktas">
                                            <td class="count"><?php echo $count ?></td>
                                            <td><?php echo $planas->getOperatorius() ?></td>
                                            <td><?php echo $planas->getMin() ?></td>
                                            <td><?php echo $planas->getSms() ?></td>
                                            <td><?php echo $planas->getGb()?></td>
                                            <td><?php echo $planas->getKaina()?></td>
                                        </tr>
                                        <?php $count++ ?>
                                    <?php } else { ?>
                                        <tr>
                                            <td class="count"><?php echo $count ?></td>
                                            <td><?php echo $planas->getOperatorius() ?></td>
                                            <td><?php echo $planas->getMin() ?></td>
                                            <td><?php echo $planas->getSms() ?></td>
                                            <td><?php echo $planas->getGb() ?></td>
                                            <td><?php echo $planas->getKaina()?></td>
                                        </tr>
                                        <?php $count++ ?>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
		
		<footer>
			<hr>
			<address>2017 &copy; Emiliuš Šimanski; Tomas Rimkus; Julius Šabūnas</address>
		</footer>
	</body>
</html>


