<p>Du har slagit alla slagen.Dina tärningar visar: <br>
    <?php
    
        foreach ($tarning as $key=>$value) {
            echo "<div class='tarningarna'><img src='Bilder/dice$value.png' alt='Tärning_$value' height=50><br> <input type='checkbox' name='tarning_$key'></div>";
        }
    ?>
    <br>
    Du fick en <?= $resultat['resultat']; ?> med värdet <?= $resultat['varde']; ?>
<form method="POST">
    <input type="submit" name="submit" value="Spela igen">
    <input type="submit" name="submit" value="Göra något tråkigt">
</form>

