<?php

namespace App;


class Product {
	public static function getFileName(){
		return base_path( 'storage/product.json' );
	}
}
