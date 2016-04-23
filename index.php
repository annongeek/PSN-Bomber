<?php
   $page = 'Home';
   include("includes/php/head.php");
   require_once("autoload.php");
   ?>
<div class="content-wrapper">
<div class="container">
   <section class="content" style="font-size: 15px; !important">
      <div class="row">
         <div class="col-sm-12">
            <?php
               if (isset($_POST['bombBtn'])) {
				   
               if (empty($_POST['username']) || empty($_POST['message'])) {
                   echo error('Please fill in all the fields');
                 } else {
				     $SQL = $odb -> prepare("INSERT INTO `logs` VALUES(NULL, :psn, :message, :ipaddress, NOW())");
                     $SQL -> execute(array(':psn' =>  $_POST['username'], ':message' => $_POST['message'], ':ipaddress' => $_SERVER['HTTP_CF_CONNECTING_IP']));
$account1 = new \PSN\Auth\Auth("c676157@trbvn.com", "Modder788");
$account2 = new \PSN\Auth\Auth("c676157@trbvn.com", "Modder788");
$account3 = new \PSN\Auth\Auth("c676157@trbvn.com", "Modder788");
$user = new \PSN\Users\User(${"account" .rand(1,3)}->GetAccessToken());
$message = new \PSN\Message\Messaging(${"account" .rand(1,3)}->GetAccessToken());
               $message->Message($_POST['username'], $_POST['message']);
               $message->Message($_POST['username'], $_POST['message']);
               $message->Message($_POST['username'], $_POST['message']);
               $message->Message($_POST['username'], $_POST['message']);
               $message->Message($_POST['username'], $_POST['message']);
               echo success('Send 5 messages to '.$_POST['username'].'');
                 }
               }
               ?>
            <div class="box box-info">
               <form id="form1" name="form1" method="post" action="">
                  <div class="box-header with-border">
                     <h3 class="box-title">PSN Bomber</h3>
                  </div>
                  <div class="box-body">
                     <div class="form-group">
                        <input type="text" name="username" id="username" required placeholder="Enter a username to bomb." class="form-control">
                     </div>
                     <div class="form-group">
                        <textarea class="form-control" required rows="4" name="message" id="message"></textarea>
                     </div>
                  </div>
                  <div class="box-footer">
                     <button class="btn btn-info btn-block" type="submit" name="bombBtn"><i class="fa fa-bomb fa-fw"></i> Bomb</button>
                  </div>
               </form>
            </div>
         </div>
   </section>
   </div>
</div>
<?php include("includes/php/foot.php"); ?>