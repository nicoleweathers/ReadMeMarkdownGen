<?php
class Form
{
    public function inputTxt($label){
        $name = str_replace(' ', '_', $label );
        $name = strtolower($name);
        return 
'<label for="'. $name . '">' . $label . ':<br>
<input type="text" name="'. $name . '" /><br><br>';
    } // inputTxt()

    public function inputArea($label){
        $name = str_replace(' ', '_', $label );
        $name = strtolower($name);
        return 
'<label for="'. $name . '">' . $label . ':<br>
<textarea name="'. $name . '" /></textarea><br><br>';
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
