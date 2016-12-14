<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
            <title>Page secrète</title>
            <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
    </head>
    <body>
yo
<?php
echo 'First step';
if (isset($_POST['username']) AND ($_POST['pwd'] == "kangou")) {
    echo $_POST['username'];
    var_dump($_POST);
    include('confidential.php');
}
else {
    include('error.php');
}
?>
</body>
</html>
