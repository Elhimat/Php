<!DOCTYPE html>

<p>Information</p>
        <form method="POST">
            Vad vill du kalla dig?<br>
            <input type="text" name="namn" required min="2" maxlength="15" value="<?= $namn; ?>">
            <input type="submit" name="submit" value="Börja spela!">
        </form>