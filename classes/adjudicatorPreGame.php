<?php
/*
	Copyright (C) 2010 Oliver Auth
	This file is part of the The Ancient Mediterranean variant for webDiplomacy
	The Ancient Mediterranean variant for webDiplomacy is free software: 
	you can redistribute it and/or modify it under the terms of the GNU Affero
	General Public License as published by the Free Software Foundation, either 
	version 3 of the License, or (at your option) any later version.
	The Ancient Mediterranean variant for webDiplomacy is distributed in the hope
	that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
	warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	See the GNU General Public License for more details.
	You should have received a copy of the GNU Affero General Public License
	along with webDiplomacy. If not, see <http://www.gnu.org/licenses/>.
*/

defined('IN_CODE') or die('This script can not be run by itself.');

class GoTVariant_adjudicatorPreGame extends adjudicatorPreGame {

	protected $countryUnits = array(
		'Stark' => array('Deepwood Motte'   =>'Army' , 'Winterfell'  =>'Army' , 'White Harbor' =>'Army'),
		'Arryn'    => array('The Eyrie'=>'Army' , 'Hearth Home'=>'Army' , 'Gulfport'   =>'Fleet'),
		'Greece'   => array('Great Wyk'    =>'Fleet' , 'Pyke' =>'Fleet' , 'Harlaw'=>'Fleet'),
		'Tully'   => array('Seagard'     =>'Army' , 'Fairmarket'=>'Army' , 'Riverrun' =>'Army'),
		'Lannister'     => array('Lannisport'  =>'Fleet' , 'Sarsfield'   =>'Army' , 'Silverhall'  =>'Army'),
		'Baratheon'     => array('Dragonstone'  =>'Fleet' , 'Tarth'   =>'Fleet' , 'Storms End'  =>'Army'),
		'Tyrell'     => array('Oldtown'  =>'Fleet' , 'Highgarden'   =>'Army' , 'Horn Hill'  =>'Army'),
		'Martell'     => array('Sunspear'  =>'Fleet' , 'Yronwood'   =>'Army' , 'Princes Pass'  =>'Army')

	);

}

?>