<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

	public function add( Request $request ) {
		$jsonString = "{}";
		if ( file_exists( Product::getFileName() ) ) {
			$jsonString = file_get_contents( Product::getFileName() );

		}


		$data = json_decode( $jsonString, true );

		$data[] = [
			'name'  => $request->input( 'name' ),
			'qty'   => $request->input( 'qty' ),
			'price' => $request->input( 'price' )
		];

		file_put_contents( Product::getFileName(), json_encode( $data ) );


		return response()->json( $data );

	}



}
