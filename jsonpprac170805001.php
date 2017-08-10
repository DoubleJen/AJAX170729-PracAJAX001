function myFuncV2(){
    //alert('OK myFuncV2');
    document.getElementById('<?php echo $_GET["where"]; ?>').innerHTML = <?php echo rand(1,49);?>
}
myFuncV2();