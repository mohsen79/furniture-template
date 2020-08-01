<?php
$xmldoc=new DOMDocument();
$xmldoc->load("xml/search.xml");

$x=$xmldoc->getElementsByTagName('link');

$q=$_GET["q"];

if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
          $hint=$hint . "<br />" .  $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
      }
    }
  }
}

if ($hint=="") {
  //$response="no suggestion";
} else {
  $response=$hint;
}
echo $response;
?> 