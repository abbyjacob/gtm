<div id="menu">
	<ul>
		<li><a href="<?php echo get_home_url() ?>" class="bgHomeSprites menuHome">&nbsp;</a></li>
		<li><div class="divider">|</div></li>
		<li class="women-menu"><h3><a href="<?php echo site_url('women') ?>" id="header_menu_women">WOMEN</a><b class="bgHomeSprites" style="display:none;">&nbsp;</b></h3>
			<div class="subMenu hide">
				<div class="subMenuList prodBlock">
					<div class="subMenuHead">Shop by product</div>
					<ul>
						<?php
						if (!empty($shop_products)) {
							foreach ($shop_products as $tags) {
								?>
								<li><a href="<?= site_url($tags->link) ?>"><?= $tags->text ?></a></li>
							<?php } ?>	
							<?php
						}
						?>
						<li><a href="<?php echo get_tags_url('topsellers') ?>">Bestsellers</a></li>			
						<li>&nbsp;</li>
						<li><a href="<?php echo get_category_url_by_id_name(655, 'Dresses') ?>">Dresses</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(664, 'Tops') ?>">Tops</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(686, 'Vest-Tank-Tops') ?>">Vest/Tank Tops</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(650, 'Tee-Shirts') ?>">Tee Shirts</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(651, 'Shirts') ?>">Shirts</a></li>
                        <li><a href="<?php echo get_category_url_by_id_name(687, 'Kurtas---Kurtis') ?>">Kurtas &amp; Kurtis</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(660, 'Jumpsuits---One-Piece') ?>">Jumpsuits &amp; One Piece</a></li>
                        <li><a href="<?php echo get_category_url_by_id_name(667, 'Skirts') ?>">Skirts</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(657, 'Jeans') ?>">Jeans</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(663, 'Trousers---Leggings') ?>">Trousers &amp; Leggings</a></li>
                        <li><a href="<?php echo get_category_url_by_id_name(668, 'Capri---Shorts') ?>">Capri &amp; Shorts</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(684, 'Hoodies---Sweatshirts') ?>">Hoodies &amp; Sweatshirts</a></li>
					</ul>
					<ul>
                        <li><a href="<?php echo get_category_url_by_id_name(658, 'Cardigans---Pullovers') ?>">Cardigans &amp; Pullovers</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(654, 'Coats---Jackets') ?>">Coats &amp; Jackets</a></li>
                        <li><a href="<?php echo get_category_url_by_id_name(661, 'Lingerie-Sleepwear') ?>">Lingerie/Sleepwear</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(677, 'Swim-Beach-Wear') ?>">Swimwear/Beachwear</a></li>
						<li>&nbsp;</li>
						<li><a href="<?php echo get_category_url_by_id_name(67, 'Shoes') ?>">Shoes</a></li>
						<li>&nbsp;</li>
						<li><a href="<?php echo get_category_url_by_id_name(652, 'Bags---Purses') ?>">Bags &amp; Purses</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(649, 'Accessories') ?>">Accessories</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(82, 'Jewellery') ?>">Jewellery</a></li>
						<li>&nbsp;</li>
						<li><a href="<?php echo get_category_url_by_id_name(96, 'Watches') ?>">Watches</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(670, 'Beauty') ?>">Beauty</a></li>
						<li><a href="<?php echo get_category_url_by_id_name(671, 'Fragrances') ?>">Fragrances</a></li>
						<li>&nbsp;</li>
						<li><a href="<?php echo site_url('gifts-for-him?categoryids=671-96') ?>">Gifts For Him</a></li>
					</ul>
				</div>
				<div class="subMenuList">
					<div class="subMenuHead">Shop by brands</div>
					<ul>
                        <li><a href="<?php echo get_brand_url_by_id_name(798, 'Koovs') ?>">KOOVS</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(1118, 'WAREHOUSE') ?>">WAREHOUSE</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(1120, 'OASIS') ?>">Oasis</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(1005, 'FOREVER-NEW') ?>">Forever New</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(1054, 'Glamorous') ?>">Glamorous</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(745, 'Femella') ?>">Femella</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(825, 'Maybelline') ?>">Maybelline</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(1117, 'Done-by-None') ?>">Done By None</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(1068, 'Vila') ?>">Vila</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(1071, 'London-Rebel') ?>">London Rebel</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(896, 'ONLY') ?>">Only</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(901, 'VERO-MODA') ?>">Vero Moda</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(1107, 'Blur') ?>">Blur</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(1063, 'Marie-Meili') ?>">Marie Meili</a></li>
                        <li><a href="<?php echo get_brand_url_by_id_name(328, "Victoria's Secret") ?>">Victoria's Secret</a></li>
						<li>&nbsp;</li>
						<li><a href="<?php echo site_url('brands'); ?>" class="collectionTitle">View All Brands</a></li>
					</ul>
				</div>
				<div class="subMenuList">
					<div class="subMenuHead">Shop by collections</div>
					<ul>
						<li><a href="<?php echo site_url('lookbook/shop-the-campaign'); ?>" class="collectionTitle">SHOP THE CAMPAIGN</a></li>
						<li>&nbsp;</li>
						<li><a href="<?php echo site_url('women/tags/Autumn-Winter13'); ?>" class="collectionTitle">AW'13 TRENDS</a></li>
						<?
						if (!empty($shop_collections)) {
							foreach ($shop_collections as $tags) {
								?>
								<li><a href="<?= site_url($tags->link) ?>"><?= $tags->text ?></a></li>
	<? }
}
?>						
						<li>&nbsp;</li>
                        <li><a href="<?php echo site_url('sale/promotions/?brandids=1019-1045-1053-1054-1060-1061-1065-1066-1071-1072-1075-1076-1078-1080-1082-1102-1118') ?>" class="collectionTitle">LONDON LABEL LOUNGE</a></li>
						<li><a href="<?php echo site_url('outfit/celebrity'); ?>" class="collectionTitle">CELEBRITY STYLE</a></li>
						<li>&nbsp;</li>
                        <li><a hred="javascript:void(0);" class="collectionTitle">COLLABORATIONS</a></li>
                        <li><a href="<?php echo site_url('women/brand/Melissa-Odabash-1070') ?>">MO by Melissa Odabash</span></a></li>
                        <li>&nbsp;</li>
						<li><a href="<?php echo get_tags_url('must-have-now') ?>">Must Have Now</a></li>
                        <li>&nbsp;</li>
                        <li><a href="<?php echo site_url('sale') ?>"><span class="color-bgr" style="margin-bottom:0;float:left;line-height:11px;">SALE</span></a></li>
					</ul>
				</div>
			</div>

		</li>

		<li><div class="divider">|</div></li>
		<li class="outfit-menu">
			<h3 class=""><a href="<?php echo site_url('outfit/celebrity') ?>" id="header_menu_outfits">CELEBRITY STYLE</a></h3>
		</li>
		<li><div class="divider">|</div></li>
		<li class="sale">
            <h3 class=""><a href="<?php echo site_url('sale') ?>"	id="header_menu_sale">SALE</a></h3>
		</li>
        <li><div class="divider">|</div></li>
        <li><h3 class=""><a href="http://www.koovs.com/blog" target="_blank" class="trackEvent" rel="Menu_Blog" alt="Koovs Blog">BLOG</a></h3></li>
	</ul>
</div>
