<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    /*public $status;
    public $expd;

    public function __construct($status='',$expd='')
    {
    	$this->$status=$status;
    	$this->$expd=$expd;
    	//dd($this->$status.' '.$this->$expd);
    }*/

    protected $table= 'product_detail';

    public function viewInfo()
    {
    	//dd($this->$status.' '.$this->$expd);
    	$users = TestModel::take(2)->get();
    	foreach ($users as $user)
		{
		    var_dump($user->Batch);
		}
    }
}
