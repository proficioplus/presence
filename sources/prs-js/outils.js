/*  Copyright Proficio Plus, 2013  |  www.proficioplus.com
 * -----------------------------------------------------------
 *
 * Tools library
 *
 * This library is developed by proficioplus.com.  Visit us at www.proficioplus.com.
 */
 
 window.onload = function () {
 	$("td#ssmenu_sinitre").hide(); 
 }
 
 function afficheSousMenu(statut) {
 	if (statut == true)
		$("td#ssmenu_sinitre").show('slow'); 
	else if (statut == false)
		$("td#ssmenu_sinitre").hide(); 
 }