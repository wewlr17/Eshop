<?php 
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
?>

<div class="container "> 
  <div <?php if($iPhone || $iPod || $iPad || $Android) { echo 'style="height: 650px; margin-top: 50px"'; }  ?>  class="jumbotron" id="tc_jumbotron_footer">
  <div class=""></div> 
        <div  class="card-body">  
        <div class="row">
        <div class="col-md-6"><br>
           <div class="tc_head_title_footer1"> 
            <h2>EShop</h2>  
            </div>
        </div>
        <div class="col-md-6"><br>

           </div>
        </div> 
      </div> 
    </div> 
  </div>   
</div>