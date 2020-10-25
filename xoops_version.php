<?php

// ------------------------------------------------------------------------- //
//               Xoops: Content Management System                           //
//                       < http://xoops.codigolivre.org.br >                          //
// ---------------------------------------------------------------------- //
// Module: Sample_module												 //
// Author: Jan304														//
// Author Email : jan304@pandora.be 								   //
// Author website: http://www.jan304.org							  //
// ----------------------------------------------------------------- //

$modversion['name'] = 'Sample module'; // name of module
$modversion['version'] = 1.0; // version
$modversion['description'] = 'Here belongs a description'; // a description
$modversion['credits'] = 'Jan304 - The XOOPS Project'; // credits
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'logo.gif'; // logo (shown in admin)
$modversion['dirname'] = 'sample_module'; // dir name, must be correct in order to avoid conflicts
$modversion['author'] = 'Jan304 - http://www.jan304.org'; // name of author, maybe including url, like here :)

// Menu
$modversion['hasMain'] = 1; // has it main? ofcourse :)

// Admin things
$modversion['hasAdmin'] = 0; // has it admin, NO :)

// Templates
$modversion['templates'][1]['file'] = 'sample_index.html'; // template file, must exist in templates dir
$modversion['templates'][1]['description'] = 'The template file of the index sample file'; // description of template
$modversion['templates'][2]['file'] = 'sample_secondfile.html';
$modversion['templates'][2]['description'] = 'Your second template, here clear description of it';
/*
$modversion['templates'][3]['file'] = "sample_thirdfile.html";
$modversion['templates'][3]['description'] = "Your third template, here clear description of it";
*/

// Blocks
$modversion['blocks'][1]['file'] = 'sample_blocks.php'; // File the functions are defined
$modversion['blocks'][1]['name'] = 'Sample Block'; 		// Default name of block, user can ofcourse always change
$modversion['blocks'][1]['description'] = 'Sample of a block'; // Description of block, this is not necessary but it makes the user more easier to identify blocks
$modversion['blocks'][1]['show_func'] = 'sample_show'; 	// Function the put outs var, NO DATA IS ECHO'ED! Everything you are going to output belongs in the templates (so defining of var's in this function, but outputting it in the templates)
$modversion['blocks'][1]['edit_func'] = 'sample_edit'; 	// Function to edit the block
$modversion['blocks'][1]['options'] = 'voorbeeld3'; 	// Default choose of the edit function, have to seperate with |
$modversion['blocks'][1]['template'] = 'sample_filename.html'; // The name of template file located templates/blocks
