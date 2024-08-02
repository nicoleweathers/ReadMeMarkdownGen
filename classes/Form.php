<?php
class Form
{
    public function inputTxt($label, $instruct, $placeholder=''){
        $name = str_replace(' ', '_', $label);
        $name = str_replace(',', '', $name);
        $name = strtolower($name);
        return 
'
<label for="'. $name . '"> ' . $label . ' :</label>
<p>' . $instruct  . '</p>
<input id="' . $name . '" type="text" name="'. $name . '" placeholder="' . $placeholder . '" />
';
    } // inputTxt()

    public function inputArea($label, $instruct, $placeholder='',$rows='2'){
        $name = str_replace(' ', '_', $label );
        $name = str_replace(',', '', $name);
        $name = strtolower($name);
        return 
'
<label for="'. $name . '"> ' . $label . ' </label>
<p>' . $instruct  . '</p>
<textarea id="' . $name . '" rows="' . $rows . '" name="'. $name . '">' . $placeholder . '</textarea>
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
    public function contacts (){return '-';}
}
