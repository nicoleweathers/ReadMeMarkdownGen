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
    } // inputTxt()

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
    } // inputArea()

    public function git_id(){return '-';}
    public function git_repo(){return '-';}
    public function proj_name(){return '-';}
    public function project_desc(){return '-';}
    public function keyfeat(){return '-';}
    public function about_proj(){return '-';}
    public function file_tree(){return '-';}
    public function how(){return '-';}
    public function support(){return '-';}
    public function contribute(){return '-';}
    public function credits(){return '-';}
    public function links(){return '-';}
    public function contacts(){return '-';}
}
