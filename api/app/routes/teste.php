<?php
 $app=instance();

//____________________GETS ROUTES____________________
$app->get('/bikes/:date',function($date){
    $db=new \App\Controllers\CBike();
    $db->GetBikes($date);
});

$app->get('/users/:date',function($date){
    $db=new \App\Controllers\CBike();
    $db->GetUsers($date);
});
$app->get('/rents/:user_id/:date',function($user_id,$date){
    $db=new \App\Controllers\CBike();
    $db->GetRents($user_id,$date);
});
$app->get('/routes/:user_id/:date',function($user_id,$date){
    $db=new \App\Controllers\CBike();
    $db->GetRoutes($user_id,$date);
});
$app->get('/removed/:user_id/:date',function($user_id,$date){
    $db=new \App\Controllers\CBike();
    $db->GetRemoved($user_id,$date);
});

//____________________POSTS ROUTES____________________

$app->post('/users',function(){
    $db=new \App\Controllers\CBike();
    $db->SetUsers();
});
$app->post('/rents/:date',function(){
    $db=new \App\Controllers\CBike();
    //$db->SetRents();
});
$app->post('/routes/:date/:user_id',function($user_id,$date){
    $db=new \App\Controllers\CBike();
    //$db->SetRoutes();
});
$app->post('/removed/:date',function($date){
    $db=new \App\Controllers\CBike();
    //$db->SetRemoved();
});


//____________________PLANTAL____________________

$app->get('/login/:user_id/:pass',function($user_id,$pass){
    $db=new \App\Controllers\CPlantal();
    $db->check_login($user_id,$pass);
});

$app->get('/plant/:q/',function($q){
    $db=new \App\Controllers\CPlantal();
    $db->get_plant($q);
});

$app->post('/register',function() use ($app){
    $body = $app->request->getBody();
    $db=new \App\Controllers\CPlantal();
    $db->register($body);
});

$app->post('/addPlant',function() use ($app){
    $body = $app->request->getBody();
    $db=new \App\Controllers\CPlantal();
    $db->addPlant($body);
});



