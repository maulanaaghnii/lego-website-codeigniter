<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $registration = [

		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword' => [
			'rules' => 'required|matches[password]',
		],
	];

	public $registration_errors = [

		'username' => [
			'required' => '{field} Field Value Required ',
			'min_length' => '{field} 5 Charecter Minimum Required',
		],
		'password' => [

			'required' => '{field} Field Value Required',
		],
		'repeatPassword' => [
			'required' => '{field} Required',
			'mathches' => '{field} Does Not Matches with Password'
		],
	];

	public $login = [

		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [

			'rules' => 'Required',
		],

	];
	public $transaction = [

		'id_product' => [
			'rules' => 'required',
		],
		'id_customer' => [
			'rules' => 'required',
		],
		'quantity' => [
			'rules' => 'required',
		],
		'total_price' => [
			'rules' => 'required',
		],
		'address' => [
			'rules' => 'required',
		],
		'shiping_costs' => [
			'rules' => 'required',
		],
	];
	public $login_errors = [
		'username' => [
			'required' => '{field} Required ',
			'min_length' => '{field} 5 Charecter Minimum Required',
		],
		'password' => [

			'required' => '{field} Required',
		],
	];

	public $product = [

		'name' => [
			'rules' => 'required|min_length[3]',
		],
		'price' => [
			'rules' => 'required|is_natural',
		],
		'stock' => [
			'rules' => 'required|is_natural',
		],
		'thumbnail' => [
			'rules' => 'uploaded[thumbnail]',
		],
	];

	public $product_errors = [
		'name' => [
			'required' => '{field} Required',
			'min_length' => '{field} 3 Character Minimmum',
		],
		'price' => [
			'required' => '{field} Required',
			'is_natural' => '{field} Not permission negative value',
		],
		'stock' => [
			'required' => '{field} Required',
			'is_natural' => '{field} Not permission negative value',
		],
		'thumbnail' => [
			'uploaded' => '{field} Must be uploaded',
		],
	];
	public $product_update = [

		'name' => [
			'rules' => 'required|min_length[3]',
		],
		'price' => [
			'rules' => 'required|is_natural',
		],
		'stock' => [
			'rules' => 'required|is_natural',
		],

	];

	public $product_update_errors = [
		'name' => [
			'required' => '{field} Required',
			'min_length' => '{field} 3 Character Minimmum',
		],
		'price' => [
			'required' => '{field} Required',
			'is_natural' => '{field} Not permission negative value',
		],
		'stock' => [
			'required' => '{field} Required',
			'is_natural' => '{field} Not permission negative value',
		],
	];
}
