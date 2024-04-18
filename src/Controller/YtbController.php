<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class YtbController 
{

    // public Logger $log;

    // public function __construct(Logger $logger) {
    //     $this->log = $logger;
    // }

   /**
    * @Route("/api/v1/get_info", methods={"POST"}) 
    */ 
    public function getInformationFromYtb(Request $request){
        $dft = $request->request->get("dft");
        $medium = $request->request->get("medium");
        $high = $request->request->get("high");
        $standard = $request->request->get("standard");
        $maxres = $request->request->get("maxres");

        $dftContent = file_get_contents($dft);
        $dftBase64 = base64_encode($dftContent);

        $mediumContent = file_get_contents($medium);
        $mediumBase64 = base64_encode($mediumContent);

        $highContent = file_get_contents($high);
        $highBase64 = base64_encode($highContent);

        $standardContent = file_get_contents($high);
        $standardBase64 = base64_encode($standardContent);

        $standardContent = file_get_contents($standard);
        $standardBase64 = base64_encode($standardContent);

        $maxresContent = file_get_contents($maxres);
        $maxresBase64 = base64_encode($maxresContent);

        // $this->log->info(json_encode( ["dft" => $dftBase64, "medium" => $mediumBase64, "high" => $highBase64, "standard" => $standardBase64, "maxres" => $maxresBase64 ] ));

        return new Response(json_encode( ["dft" => $dftBase64, "medium" => $mediumBase64, "high" => $highBase64, "standard" => $standardBase64, "maxres" => $maxresBase64 ] )) ;

    }
}
