<?php echo "APRENDIENDO PHP"; ?>

<?php
$name = "Emanuel";
$lastName = "Villalonga";
$age = 27;
$city = "Berazategui";
const IQ = 120;
$yung = $age < 31;

if ($yung) {
    echo "<h3>Eres joven, salvaje y libre</h3>";
}

?>

<h1>
    <?=
    $name . " " . $lastName;
    ?>
</h1>

<?php
$age = 27;
$age = match (true) {
    
}
?>