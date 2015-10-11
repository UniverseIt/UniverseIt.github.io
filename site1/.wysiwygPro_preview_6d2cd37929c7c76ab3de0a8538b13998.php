<?php
if ($_GET['randomId'] != "7YDXDmwQzDoDDzKbyDlDOB879Txlx80eqI9xYKvMb0Uc1H5dVtTKdUrVgmQCA6rV") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
