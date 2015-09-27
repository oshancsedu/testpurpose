<?php
Route::resource('store', 'TestController');


Route::get('/', function () {

    $faker= Faker\Factory::create();
    for($i=0;$i<10;$i++)
    {
        var_dump($faker->firstName." ".$faker->lastName);
        echo "<br>";
    }
});

Route::get('hi', function () {
	//$testInfo= new TestModel('oshan :D','hey');
    //$testInfo->viewInfo();
    //return "The form was submitted using get";

    /*$prod = \App\TestModel::create(array(
    	'Batch'=>'0005',
    	'Status' => 'off'
    ));*/
    //return $prod->Batch; 
return View::make('test');
});

Route::post('verify', function () {
    return "The form was submitted using Post";
});


?>
