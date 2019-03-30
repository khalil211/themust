<?php

class panierC
{
	public function ajouter($panier)
	{
		$db=config::getConnexion();
		$query=$db->prepare('INSERT INTO panier(id,nbproduit,prixtotal) VALUES(:id,:nbproduit,:prixtotal)');
		$query->bindValue(':id',$panier->getId());
		$query->bindValue(':nbproduit',$panier->getNbProduit());
		$query->bindValue(':prixtotal',$panier->getPrixTotal());
		$query->execute();
	}

	public function afficher()
	{
		?>
		<li class="mini-cart-icon">
		    <div class="mini-cart mini-cart--1">
		        <a class="mini-cart__dropdown-toggle bordered-icon" id="cartDropdown">
		            <span class="mini-cart__count">0</span>
		            <i class="icon_cart_alt mini-cart__icon"></i>
		            <span class="mini-cart__ammount">80.00 <i class="fa fa-angle-down"></i></span>
		        </a>
		        <div class="mini-cart__dropdown-menu">
		            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="mini-cart__content" id="miniCart" style="overflow: hidden; width: auto; height: 250px;">
		                <div class="mini-cart__item">
		                    <div class="mini-cart__item--single">
		                        <div class="mini-cart__item--image">
		                            <img src="assets/img/products/2-2-450x450.jpg" alt="product">
		                        </div>
		                        <div class="mini-cart__item--content">
		                            <h4 class="mini-cart__item--name"><a href="product-details.html">Acer Aspire AIO <br>-<small>Color Swatch Black</small></a> </h4>
		                            <p class="mini-cart__item--quantity">x1</p>
		                            <p class="mini-cart__item--price">$100.00</p>
		                        </div>
		                        <a class="mini-cart__item--remove" href="#"><i class="icon_close"></i></a>
		                    </div>
		                </div>
		                <div class="mini-cart__calculation">
		                    <p>
		                        <span class="mini-cart__calculation--item">Prix total :</span>
		                        <span class="mini-cart__calculation--ammount">$1,070.00</span>
		                    </p>
		                </div>
		                <div class="mini-cart__btn">
		                    <a href="cart.html" class="btn btn-fullwidth btn-style-1">View Cart</a>
		                </div>
		                
		            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(52, 52, 52); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
		        </div>
		    </div>
		</li>
		<?php
	}
}
?>