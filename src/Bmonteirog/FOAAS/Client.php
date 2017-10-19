<?php declare(strict_types=1);

namespace Bmonteirog\FOAAS;

class Client implements ClientInterface
{

    private $endpoint;
    private $clientInfo;
    private $accept;

    public function __construct()
    {
        $this->endpoint = 'http://foaas.com/';
        $this->clientInfo = 'FOAAS-PHP-Client bmonteirog@gmail.com';
        $this->accept = 'text/plain';
    }

    /*
    * Não implementando as chamadas dos métodos utilizando
    * o método mágico __call pois quero ter todos os métodos
    * públicos listados na interface ClientInterface
    */
    // public function __call($name, $args)
    // {}

    private function callApi($url, $arg1 = null, $arg2 = null, $arg3 = null)
    {
        $url = $this->endpoint.$url;

        if(!is_null($arg1))
            $url .= '/'.$arg1;

        if(!is_null($arg2))
            $url .= '/'.$arg2;

        if(!is_null($arg3))
            $url .= '/'.$arg3;

        $client = new \GuzzleHttp\Client();
        $headers = [
            'User-Agent' => $this->clientInfo,
            'Accept'     => $this->accept
        ];
        $request = $client->request('GET', $url, $headers);
        $data = $request->getBody();
        return $data;
    }
    
    public function asJson()
    {
        $this->setHeaders('application/json');
        return $this;
    }
    
    public function asHtml()
    {
        $this->setHeaders('text/html');
        return $this;
    }
    
    public function asText()
    {
        $this->setHeaders('text/plain');
        return $this;
    }
    
    public function asXml()
    {
        $this->setHeaders('application/xml');
        return $this;
    }
    
    private function setHeaders($type)
    {
        $this->accept = $type;
    }

    public function version()
    {
        return $this->callApi('version');
    }

    public function operations()
    {
        return $this->callApi('operations');
    }

    public function anyway($company, $from)
    {
        return $this->callApi('anyway', $company, $from);
    }

    public function awesome($from)
    {
        return $this->callApi('awesome', $from);
    }

    public function back($name, $from)
    {
        return $this->callApi('back', $name, $from);
    }

    public function bag($from)
    {
        return $this->callApi('bag', $from);
    }

    public function ballmer($name, $company, $from)
    {
        return $this->callApi('ballmer', $name, $company, $from);
    }

    public function bday($name, $from)
    {
        return $this->callApi('bday', $name, $from);
    }

    public function because($from)
    {
        return $this->callApi('because', $from);
    }

    public function blackadder($name, $from)
    {
        return $this->callApi('blackadder', $name, $from);
    }

    public function bm($name, $from)
    {
        return $this->callApi('bm', $name, $from);
    }

    public function bucket($from)
    {
      return $this->callApi('bucket', $from);
    }

    public function bus($name, $from)
    {
      return $this->callApi('bus', $name, $from);
    }

    public function bye($from)
    {
      return $this->callApi('bye', $from);
    }

    public function caniuse($tool, $from)
    {
      return $this->callApi('caniuse', $tool, $from);
    }

    public function chainsaw($name, $from)
    {
      return $this->callApi('chainsaw', $name, $from);
    }

    public function cocksplat($name, $from)
    {
      return $this->callApi('cocksplat', $name, $from);
    }
    
    public function cool($from)
    {
      return $this->callApi('cool', $name, $from);
    }
    
    public function cup($from)
    {
      return $this->callApi('cup', $from);
    }

    public function dalton($name, $from)
    {
      return $this->callApi('dalton', $name, $from);
    }

    public function deraadt($name, $from)
    {
      return $this->callApi('deraadt', $name, $from);
    }

    public function diabetes($from)
    {
      return $this->callApi('diabetes', $from);
    }

    public function donut($name, $from)
    {
      return $this->callApi('donut', $name, $from);
    }

    public function dosomething($do, $something, $from)
    {
      return $this->callApi('dosomething', $do, $something, $from);
    }

    public function everyone($from)
    {
      return $this->callApi('everyone', $from);
    }

    public function everything($from)
    {
      return $this->callApi('everything', $from);
    }

    public function family($from)
    {
      return $this->callApi('family', $from);
    }

    public function fascinating($from)
    {
      return $this->callApi('fascinating', $from);
    }

    public function field($name, $from, $reference)
    {
      return $this->callApi('field', $name, $from, $reference);
    }

    public function flying($from)
    {
      return $this->callApi('flying', $from);
    }
    
    public function fyyff($from)
    {
      return $this->callApi('fyyff', $from);
    }    

    public function gfy($name, $from)
    {
      return $this->callApi('gfy', $name, $from);
    }

    public function give($from)
    {
      return $this->callApi('give', $from);
    }

    public function greed($noun, $from)
    {
      return $this->callApi('greed', $noun, $from);
    }

    public function horse($from)
    {
      return $this->callApi('horse', $from);
    }
    
    public function immensity($from)
    {
      return $this->callApi('immensity', $from);
    }

    public function ing($name, $from)
    {
      return $this->callApi('ing', $name, $from);
    }

    public function keep($name, $from)
    {
      return $this->callApi('keep', $name, $from);
    }

    public function keepcalm($reaction, $from)
    {
      return $this->callApi('keepcalm', $reaction, $from);
    }

    public function king($name, $from)
    {
      return $this->callApi('king', $name, $from);
    }

    public function life($from)
    {
      return $this->callApi('life', $from);
    }

    public function linus($name, $from)
    {
      return $this->callApi('linus', $name, $from);
    }

    public function look($name, $from)
    {
      return $this->callApi('look', $name, $from);
    }

    public function looking($from)
    {
      return $this->callApi('looking', $from);
    }

    public function madison($name, $from)
    {
      return $this->callApi('madison', $name, $from);
    }

    public function maybe($from)
    {
      return $this->callApi('maybe', $from);
    }

    public function me($from)
    {
      return $this->callApi('me', $from);
    }

    public function mornin($from)
    {
      return $this->callApi('mornin', $from);
    }

    public function no($from)
    {
      return $this->callApi('no', $from);
    }

    public function nugget($name, $from)
    {
      return $this->callApi('nugget', $name, $from);
    }

    public function off($name, $from)
    {
      return $this->callApi('off', $name, $from);
    }

    public function offWith($behavior, $from)
    {
      return $this->callApi('off-with', $behavior, $from);
    }

    public function outside($name, $from)
    {
      return $this->callApi('outside', $name, $from);
    }

    public function particular($thing, $from)
    {
      return $this->callApi('particular', $thing, $from);
    }

    public function pink($from)
    {
      return $this->callApi('pink', $from);
    }

    public function problem($name, $from)
    {
      return $this->callApi('problem', $name, $from);
    }
    
    public function programmer($from)
    {
      return $this->callApi('programmer', $from);
    }

    public function pulp($language, $from)
    {
      return $this->callApi('pulp', $language, $from);
    }

    public function retard($from)
    {
      return $this->callApi('retard', $from);
    }

    public function ridiculous($from)
    {
      return $this->callApi('ridiculous', $from);
    }

    public function rtfm($from)
    {
      return $this->callApi('rtfm', $from);
    }

    public function sake($from)
    {
      return $this->callApi('sake', $from);
    }

    public function shakespeare($name, $from)
    {
      return $this->callApi('shakespeare', $name, $from);
    }

    public function shit($from)
    {
      return $this->callApi('shit', $from);
    }

    public function shutup($name, $from)
    {
      return $this->callApi('shutup', $name, $from);
    }

    public function single($from)
    {
      return $this->callApi('single', $from);
    }

    public function thanks($from)
    {
      return $this->callApi('thanks', $from);
    }

    public function that($from)
    {
      return $this->callApi('that', $from);
    }

    public function think($name, $from)
    {
      return $this->callApi('think', $name, $from);
    }

    public function thinking($name, $from)
    {
      return $this->callApi('thinking', $name, $from);
    }

    public function this($from)
    {
      return $this->callApi('this', $from);
    }

    public function thumbs($name, $from)
    {
      return $this->callApi('thumbs', $name, $from);
    }

    public function too($from)
    {
      return $this->callApi('too', $from);
    }

    public function tucker($from)
    {
      return $this->callApi('tucker', $from);
    }

    public function what($from)
    {
      return $this->callApi('what', $from);
    }

    public function xmas($name, $from)
    {
      return $this->callApi('xmas', $name, $from);
    }

    public function yoda($name, $from)
    {
      return $this->callApi('yoda', $name, $from);
    }

    public function you($name, $from)
    {
      return $this->callApi('you', $name, $from);
    }

    public function zayn($from)
    {
      return $this->callApi('zayn', $from);
    }

    public function zero($from)
    {
      return $this->callApi('zero', $name, $from);
    }

}
