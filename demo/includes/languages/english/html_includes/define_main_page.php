<?php 
if (!isset($_SESSION['layoutType'])) {
  $_SESSION['layoutType'] = 'legacy';
}

if ( $detect->isMobile() && !$detect->isTablet() || $_SESSION['layoutType'] == 'mobile' ) { ?>


  
<?php  } else if ( $detect->isTablet() || $_SESSION['layoutType'] == 'tablet' ){ ?>


<?php  } else if ( $_SESSION['layoutType'] == 'full' ) { ?>


<?php  } else { ?>


<?php  } ?>
<p class="biggerText">Grand River Family Farms is a five generation, family owned homestead nestled between two Grand River tributaries, Twelve Mile Creek and Thompson River.</p>
    
<p class="biggerText">Ecological respect and dignity are the foundation of humane animal care and regenerative farming practices at Grand River Family Farms.  Pastures and timbers are holistically managed, free from industrial agriculture practices that damage the ecosystem and result in chemical-laden, nutritionally deficient food.  Livestock are raised outdoors, surrounded by fresh air and with ample freedom to forage and roam.  Pasture raised poultry are free to move about unrestricted, with unlimited access to healthy fresh greens every day.  Pigs root and explore as nature intended, unconfined in open timber paddocks.</p> 
<p class="biggerText">Additionally, our commitment to organic nourishment ensures that all our products - meat, eggs, dairy - are packed with essential nutrients, not hormones, chemicals and antibiotics.  Producing premium nutritious products while maintaining the highest ethical standards is Grand River Family Farms promise to our land, our animals, and our customers.</p>
<p class="quote">Hippocrates: <i>“Let food be thy medicine and medicine be thy food”</i>.</p>
