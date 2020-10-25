<?php

/*********************************/
// Enabling all errors, this can be
// commented out safely
/*********************************/
// error_reporting (E_ALL);

/*********************************/
// Starting the function the
// creates the block.
/*********************************/
function sample_show($options)
{
    /*********************************/

    // Catch setting

    /*********************************/

    $form['choose'] = $options[0];

    /*********************************/

    // Add some data, ofcourse in real

    // modules you would make real

    // functions, loops, ect ect

    /*********************************/

    $form['blabla'] = "Dit is => \$form['blabla']";

    /*********************************/

    // Returning the data so Smarty

    // can send it to template.

    /*********************************/

    return $form;
}

/*********************************/
// The function that lists the
// block options.
/*********************************/
function sample_edit($options)
{
    $checked = "selected='selected'";

    $form = 'Sample:&nbsp;';

    $form .= "<select name=options[0]>\n";

    if ('voorbeeld' != $options[0]) {
        $form .= "<option value='voorbeeld' >Voorbeeld\n";
    } else {
        $form .= "<option value='voorbeeld'  $checked>Voorbeeld\n";
    }

    if ('voorbeeld2' != $options[0]) {
        $form .= "<option value='voorbeeld2'>Voorbeeld2\n";
    } else {
        $form .= "<option value='voorbeeld2' $checked>Voorbeeld2\n";
    }

    if ('voorbeeld3' != $options[0]) {
        $form .= "<option value='voorbeeld3'>Voorbeeld3\n";
    } else {
        $form .= "<option value='voorbeeld3' $checked>Voorbeeld3\n";
    }

    if ('voorbeeld4' != $options[0]) {
        $form .= "<option value='voorbeeld4'>Voorbeeld4\n";
    } else {
        $form .= "<option value='voorbeeld4' $checked>Voorbeeld4\n";
    }

    if ('voorbeeld5' != $options[0]) {
        $form .= "<option value='voorbeeld5'>Voorbeeld5\n";
    } else {
        $form .= "<option value='voorbeeld5' $checked>Voorbeeld5\n";
    }

    $form .= '</select>';

    $form .= '<br><br><b>Some bla bla and info!</b>';

    return $form;
}
