# corrida-rest
Teste prático deliverIT

#MYSQL

create database teste_corrida;

#Montar o banco com o Laravel

php artisan migrate


#Subir o servidor

php artisan serve



#Rotas da api:

Route::post('runners', [RunnerController::class,'store']);

Route::post('races', [RaceController::class,'store']);

Route::post('raceRunners', [RaceRunnerController::class,'store']);

Route::post('runnerResults', [RunnerResultController::class,'store']);


//Duas abaixo não foram implementadas

Route::get('byAge', [RankingController::class, 'byAge']);

Route::get('general', [RankingController::class, 'general']);
