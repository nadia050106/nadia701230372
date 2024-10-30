<?php
// User-defined function to add a class to the text
function ganti_style($tulisan, $kelas) {
    return "<span class='$kelas'>$tulisan</span>";
}

// Assign the text and class to variables
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

// Call the function and output the styled text
echo ganti_style($tulisan, $kelas);
?>

<!-- Add some CSS to style the text -->
<style>
    .ganti-style {
        font-size: 28px;
        font-family: Arial, sans-serif;
        color: #1A0547;
        font-style: italic;
        font-weight: bold;
    }
</style>