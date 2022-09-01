<?php
function testMassage($condation, $massage)
{
    if($condation) {
    echo "<div style='margin-top:80px' class='alert mx-auto w-50 alert-success'>
    $massage success
    </div>";
}
    else{  echo "<div style='margin-top:80px' class='alert mx-auto w-50 alert-danger'>
        $massage failed
        </div>";
    
    }

}

function go($path){

    echo"<script>
    
   window.location.replace('/new/$path'); 
    </script>";
};



?>