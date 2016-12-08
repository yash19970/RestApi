<?php 
$v = $value;
echo form_open('api/update',['class'=>'form-horizontal']);
echo form_input(['name' => 'id','class' => 'form-control','placeholder' => 'id','id' => 'inputEmail','value'=>$v]);
echo form_input(['name' => 'bookname','class' => 'form-control','placeholder' => 'bookname','id' => 'inputEmail','value'=>set_value('bookname')]);
echo form_input(['name' => 'bookprice','class' => 'form-control','placeholder' => 'bookprice','id' => 'inputEmail','value'=>set_value('bookprice')]);
echo form_input(['name' => 'bookauthor','class' => 'form-control','placeholder' => 'bookauthor','id' => 'inputEmail','value'=>set_value('bookauthor')]);
 echo form_reset(['name'=>'reset','value'=>'Reset']);
 echo form_submit(['name'=>'submit' ,'value'=> 'update']);
 echo form_close();
?>