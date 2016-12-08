<?php 
echo form_open('api/data',['class'=>'form-horizontal']);
echo form_input(['name' => 'bookname','class' => 'form-control','placeholder' => 'bookname','id' => 'inputEmail','value'=>set_value('bookname')]);
echo form_input(['name' => 'bookprice','class' => 'form-control','placeholder' => 'bookprice','id' => 'inputEmail','value'=>set_value('bookprice')]);
echo form_input(['name' => 'bookauthor','class' => 'form-control','placeholder' => 'bookauthor','id' => 'inputEmail','value'=>set_value('bookauthor')]);
 echo form_reset(['name'=>'reset','value'=>'Reset']);
 echo form_submit(['name'=>'submit' ,'value'=> 'Insert']);
 echo form_close();
?>
<?php 
echo form_open('api/update',['class'=>'form-horizontal']);
echo form_input(['name' => 'id','class' => 'form-control','placeholder' => 'id','id' => 'inputEmail','value'=>set_value('id')]);
echo form_input(['name' => 'bookname','class' => 'form-control','placeholder' => 'bookname','id' => 'inputEmail','value'=>set_value('bookname')]);
echo form_input(['name' => 'bookprice','class' => 'form-control','placeholder' => 'bookprice','id' => 'inputEmail','value'=>set_value('bookprice')]);
echo form_input(['name' => 'bookauthor','class' => 'form-control','placeholder' => 'bookauthor','id' => 'inputEmail','value'=>set_value('bookauthor')]);
 echo form_reset(['name'=>'reset','value'=>'Reset']);
 echo form_submit(['name'=>'submit' ,'value'=> 'update']);
 echo form_close();
?>
<?php 
echo form_open('api/delete',['class'=>'form-horizontal']);
echo form_input(['name' => 'id','class' => 'form-control','placeholder' => 'id','id' => 'inputEmail','value'=>set_value('id')]);
 echo form_reset(['name'=>'reset','value'=>'Reset']);
 echo form_submit(['name'=>'submit' ,'value'=> 'Delete']);
 echo form_close();
?>
