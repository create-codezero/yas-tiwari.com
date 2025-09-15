<?php

function Menu($menutext, $menuhref, $menuicon, $menuonclick)
{
     $menu = ' <li><a href="' . $menuhref . '" onclick="' . $menuonclick . '" class="fc-dark-blue font-poppins fs-20 active"><i class="' . $menuicon . '"></i> ' . $menutext . ' </a></li> ';
     echo $menu;
}
function AssetCard()
{
     $card = "
     ";
     echo $card;
}

function CollaborationCard()
{
     $card = "
     ";
     echo $card;
}

function Ad()
{
     $element = "
     ";
     echo $element;
}
