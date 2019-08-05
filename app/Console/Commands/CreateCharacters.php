<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CreateCharacters extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'characters:create {num}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $numNo = $this->argument('num');
        $res = [];
      $characters = config('characters');
      $i=0;
      foreach ($characters as $key => $val ){

        $num = explode('characters/', $val)[1];
        $data = Storage::get('public/books/characters' . $num . '.json');
        $arr = json_decode($data,true);

          if(isset($arr['name'])){
            $res[]=[
              'name'=>$arr['name'],
              'gender'=>$arr['gender'],
              'culture'=>$arr['culture'],
              'born'=>$arr['born'],
              'died'=>$arr['died'],
              'titles'=>$arr['titles'],
              'aliases'=>$arr['aliases'],
              'tvSeries'=>$arr['tvSeries'],
              'playedBy'=>$arr['playedBy']
            ];
            $i++;
                echo $i.'\n';
          }
          if($i >=$numNo){
              break;
          }


      }
      Storage::put('public/books/characters_new.json', json_encode($res) );

    }
}
