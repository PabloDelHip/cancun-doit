<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $cupon = session('cupon');
        $cupones = session('cupones');
        $email = $this->from('pablo@inttesi.com',"Cupón Go Cancun Tours")
                ->view('texto_correo')
                ->text('cupon')
                ->with(
                [
                        'testVarOne' => '1',
                        'testVarTwo' => '2',
                 ]);//->attach('cupones'.$cupon);
                 foreach($cupones as $cupon)
                 {
                    $email->attach('cupones'.$cupon);
                 }
                // ->attach(public_path('/cupones').$cupon, [
                //         'as' => 'listado5.pdf',
                //         'mime' => 'application/pdf',
                // ]);
                // foreach($archivosadjuntos as $rutaArchivo){
                //     $email->attach($rutaArchivo);
                // }
        return $email;


    }
}
