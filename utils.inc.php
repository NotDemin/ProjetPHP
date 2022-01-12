<?php
  function start_page($title)
  {
    $emoji1 = 'https://cdn.discordapp.com/attachments/779046355674202182/930098089744793600/1f975.png';
    $emoji2 = 'https://cdn.discordapp.com/attachments/779046355674202182/930256647966822483/confounded-face_1f616.png';
    $emoji3 = 'https://cdn.discordapp.com/attachments/779046355674202182/930256648407220284/loudly-crying-face_1f62d.png';
    $emoji4 = 'https://cdn.discordapp.com/attachments/779046355674202182/930256648205901934/face-with-tears-of-joy_1f602.png';
    $choix = rand(0, 3);
    if($choix == 0){
      $favicon = $emoji1;
    }
    elseif($choix == 1){
      $favicon = $emoji2;
    }
    elseif($choix == 2){
      $favicon = $emoji3;
    }
    else{
      $favicon = $emoji4;
    }
?>
  <!DOCTYPE html>
  <html lang="fr">
    <head>
        <link rel="icon" type="image/png" <?php echo 'href="' . $favicon . '" /> '; ?>
        <meta charset='utf-8'>
        <title><?php echo $title; ?></title>
    </head>
    <body>
<?php
}

?>

<?php function end_page(){ ?>
    </body>
  </html>
<?php } ?>


<?php function ficheCSS($css){ ?>
  <style>
  <?php include $css; ?>
  </style>
<?php } ?>

<?php function loginGenerator($string){
  for($i = 0; strlen($string) != $i; $i++){
    if($string[$i] == '@'){
      #echo "@ a l'indice " . $i+1 . '</br>';
      $login = substr($string, 0, $i);
      }
  }
  return $login;
}
?>

<?php function randomPasswordGenerator($length){
  $possiblecaracters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789$~-+=!?@#%&';
  $string = '';
  $maximum = strlen($possiblecaracters) - 1;

  for($i = 0; $i < $length; $i++){
    $string .= $possiblecaracters[random_int(0, $maximum)];

  }
  return $string;

}
?>

<?php function filterUsers($AccesLevel){
  session_start();
  $CurrentAccesLevel = $_SESSION['CurrentUserIDRole'];
  if($CurrentAccesLevel == $AccesLevel){
    return 1;
  }
  else{
    echo 'acces denied';
    return 0;
  }

}
?>
