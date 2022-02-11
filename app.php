<?php
header('Content-Type: application/json');
$nft_no = explode(".", basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']))[0];
if(is_file('upload/'.$nft_no.'.png')){
  $nft_img = 'upload/'.$nft_no.'.png';
}else{
  $nft_img = 'nft.gif';};
?>
{
  "name": "ES #<?php echo $nft_no; ?>",
  "description": "This is a description.",
  "image": "https://nft.2vx.co/evx/<?php echo $nft_img; ?>",
  "external_url": "https://eventx.io",
  "attributes": [
    {
      "trait_type": "Event",
      "value": "HSCC"
    }
  ]
}
