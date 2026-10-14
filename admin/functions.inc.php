<?php
function get_user_field($con,$st)
{
    if($st!=='')
    {
        return mysqli_real_escape_string($con,$st);
    }
    
}
?>