<?php
session_start();
header("Location: https://protrainy.com/ir/success");
?>
<script type="text/javascript">
  window.open('https://protrainy.com/ir/success','_self');

</script>
<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
