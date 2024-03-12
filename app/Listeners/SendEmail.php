<?php

namespace App\Listeners;

use App\Events\ComunicatePatientsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComunicatePatients;
use App\Models\Patient;

class SendEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ComunicatePatientsEvent $event): void
    {
        $conteudo = $event->conteudo;
        $patients = Patient::all();
        foreach($patients as $patient){
            $email = new ComunicatePatients(
                $conteudo,
            );
            Mail::to($patient)->queue($email);
            }
    }
}
