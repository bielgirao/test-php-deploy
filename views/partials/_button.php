<?php
    /**
     * @var string $buttonLabel
     */
    
    if (isset($_POST['do_alert'])) {
        alert_message();
    }
    
    function alert_message()
    {
        echo "<script>alert('Custom Message!');</script>";
    }
?>

<style>
    button {
        background: darkolivegreen;
        color: white;
        border: none;
        cursor: pointer;
        padding: 12px 16px;
        border-radius: 4px;
        margin-top: 20px;
    }
</style>

<form method="post">
    <button type="submit" name="do_alert"><?= htmlspecialchars($buttonLabel) ?></button>
</form>