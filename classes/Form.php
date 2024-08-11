<?php
class Form
{
    public function inputTxt($label, $instruct, $value){
        $name = str_replace(' ', '_', $label);
        $name = str_replace(',', '', $name);
        $name = strtolower($name);
        return 
'
<label for="'. $name . '"> ' . $label . ' :</label>
<p>' . $instruct  . '</p>
<input id="' . $name . '" type="text" name="'. $name . '" '. $value . ' />
';
    } // end inputTxt()

    public function inputArea($label, $instruct, $value='',$rows='12'){
        $name = str_replace(' ', '_', $label );
        $name = str_replace(',', '', $name);
        $name = strtolower($name);
        return 
'
<label for="'. $name . '"> ' . $label . ' </label>
<p>' . $instruct  . '</p>
<div class="grow-wrap"><textarea id="' . $name . '" rows="' . $rows . '" name="'. $name . '">' . $value . '</textarea></div>
';
    } //end inputArea()

}
