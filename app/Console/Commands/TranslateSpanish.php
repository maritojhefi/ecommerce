<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateSpanish extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'translate:spanish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Traduce el archivo json es usando la api de google';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $jsonString = file_get_contents(base_path('resources/lang/es.json'));
        $array = json_decode($jsonString, true);
        foreach ($array as $llave => $traduccion) {
            try {
                $resultado = GoogleTranslate::trans($traduccion, 'es');
            $array[$llave] = $resultado;
            $this->info('Se traducio exitosamente: '.$llave);
            } catch (\Throwable $th) {
               $this->error('Error al traducir: '.$llave);
            }
           
        }

        $newJsonString = json_encode($array, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(base_path('resources/lang/es.json'), stripslashes($newJsonString));

        return Command::SUCCESS;
    }
}
