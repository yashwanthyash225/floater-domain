<?php
// Enable error reporting for debugging
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Retrieve the parameters from the URL
$llon = (int)$_POST['llon'];
$ulon = (int)$_POST['ulon'];
$llat = (int)$_POST['llat'];
$ulat = (int)$_POST['ulat'];
$fcstday = $_POST['forecast-day'];
$fcstdate = $_POST['dates'];

$data = "$ulat,$llat,$ulon,$llon,$fcstday,$fcstdate\n"; // Prepare the data string

$tmpFile = '/tmp/floater.txt';

// Content to append
// $contentToAppend = "This is a new line of text.\n";

// Open the file for appending
$fileHandle = fopen($tmpFile, 'a');

// Check if the file was opened successfully
if ($fileHandle) {
    // Write content to the file
    fwrite($fileHandle, $data);
    // Close the file handle
    fclose($fileHandle);
    // echo "Content appended to $tmpFile successfully.";
} else {
    // echo "Error: Unable to open file $tmpFile.";
}

// End php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Successful Floater Domain</title>
    <link rel="stylesheet" href="results.css">
</head>
<body>
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Domain Metadata')" id="defaultOpen">Domain Metadata</button>
    </div>
    <div id="Domain Metadata" class="tabcontent">
        <h4>Successful Floater Domain Creation</h4>
        <h3>Domain Attributes:</h3>
        <p><b>Lower Longitude:</b> <?php echo htmlspecialchars($llon); ?></p>
        <p><b>Upper Longitude:</b> <?php echo htmlspecialchars($ulon); ?></p>
        <p><b>Lower Latitude:</b> <?php echo htmlspecialchars($llat); ?></p>
        <p><b>Upper Latitude:</b> <?php echo htmlspecialchars($ulat); ?></p>
		<p><b>Forecast Day:</b> <?php echo htmlspecialchars($_POST['forecast-day']); ?></p>
		<p><b>Forecast Date:</b> <?php echo htmlspecialchars($_POST['dates']); ?></p>
		<p>Please allow some time for the requested domain to process, then check the images <a href="https://www.wpc.ncep.noaa.gov/wpc_ensemble_clusters/esa/view_esa.php?cycle=2025051900&day=day_1&domain=domain1&ens=all_ensembles&field=standard_sens_of_24hr_avged_mslp_pc2&rfunc=qpf_pc1&sensvar=500hgt" target="_blank">here.</a></p>

    </div>
    <button onclick="window.location.href='index.html'">Back to Floater Domain</button>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
</body>
</html>
