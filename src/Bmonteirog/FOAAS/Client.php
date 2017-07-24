<?php declare(strict_types=1);

namespace Bmonteirog\FOAAS;

class Client implements ClientInterface
{

    private $endpoint;
    private $clientInfo;

    public function __construct()
    {
        $this->endpoint = 'http://foaas.com/';
        $this->clientInfo = 'FOAAS-PHP-Client bmonteirog@gmail.com';
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

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT, $this->clientInfo);
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
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

    }

    public function bus($name, $from)
    {

    }

    public function bye($from)
    {

    }

    public function caniuse($tool, $from)
    {

    }

    public function chainsaw($name, $from)
    {

    }

    public function cocksplat($name, $from)
    {

    }

    public function cool($from)
    {

    }

    public function dalton($name, $from)
    {

    }

    public function deraadt($name, $from)
    {

    }

    public function diabetes($from)
    {

    }

    public function donut($name, $from)
    {

    }

    public function dosomething($do, $something, $from)
    {

    }

    public function everyone($from)
    {

    }

    public function everything($from)
    {

    }

    public function family($from)
    {

    }

    public function fascinating($from)
    {

    }

    public function field($name, $from, $reference)
    {

    }

    public function flying($from)
    {

    }

    public function gfy($name, $from)
    {

    }

    public function give($from)
    {

    }

    public function greed($noun, $from)
    {

    }

    public function horse($from)
    {

    }

    public function ing($name, $from)
    {

    }

    public function keep($name, $from)
    {

    }

    public function keepcalm($reaction, $from)
    {

    }

    public function king($name, $from)
    {

    }

    public function life($from)
    {

    }

    public function linus($name, $from)
    {

    }

    public function look($name, $from)
    {

    }

    public function looking($from)
    {

    }

    public function madison($name, $from)
    {

    }

    public function maybe($from)
    {

    }

    public function me($from)
    {

    }

    public function mornin($from)
    {

    }

    public function no($from)
    {

    }

    public function nugget($name, $from)
    {

    }

    public function off($name, $from)
    {

    }

    public function offWith($behavior, $from)
    {

    }

    public function outside($name, $from)
    {

    }

    public function particular($thing, $from)
    {

    }

    public function pink($from)
    {

    }

    public function problem($name, $from)
    {

    }

    public function pulp($language, $from)
    {

    }

    public function retard($from)
    {

    }

    public function ridiculous($from)
    {

    }

    public function rtfm($from)
    {

    }

    public function sake($from)
    {

    }

    public function shakespeare($name, $from)
    {

    }

    public function shit($from)
    {

    }

    public function shutup($name, $from)
    {

    }

    public function single($from)
    {

    }

    public function thanks($from)
    {

    }

    public function that($from)
    {

    }

    public function think($name, $from)
    {

    }

    public function thinking($name, $from)
    {

    }

    public function this($from)
    {

    }

    public function thumbs($name, $from)
    {

    }

    public function too($from)
    {

    }

    public function tucker($from)
    {

    }

    public function what($from)
    {

    }

    public function xmas($name, $from)
    {

    }

    public function yoda($name, $from)
    {

    }

    public function you($name, $from)
    {

    }

    public function zayn($from)
    {

    }

    public function zero($name, $from)
    {

    }

}
