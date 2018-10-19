<?php declare(strict_types=1);

namespace Bmonteirog\FOAAS;

interface ClientInterface
{

    public function version();

    public function operations();

    public function asJson();

    public function asHtml();

    public function asText();

    public function asXml();

    public function anyway($company, $from);

    public function awesome($from);

    public function back($name, $from);

    public function bag($from);

    public function ballmer($name, $company, $from);

    public function bday($name, $from);

    public function because($from);

    public function blackadder($name, $from);

    public function bm($name, $from);

    public function bucket($from);

    public function bus($name, $from);

    public function bye($from);

    public function caniuse($tool, $from);

    public function chainsaw($name, $from);

    public function cocksplat($name, $from);

    public function cool($from);

    public function cup($from);

    public function dalton($name, $from);

    public function deraadt($name, $from);

    public function diabetes($from);

    public function donut($name, $from);

    public function dosomething($do, $something, $from);

    public function everyone($from);

    public function everything($from);

    public function family($from);

    public function fascinating($from);

    public function field($name, $from, $reference);

    public function flying($from);

    public function fyyff($from);

    public function gfy($name, $from);

    public function give($from);

    public function greed($noun, $from);

    public function horse($from);

    public function immensity($from);

    public function ing($name, $from);

    public function keep($name, $from);

    public function keepcalm($reaction, $from);

    public function king($name, $from);

    public function life($from);

    public function linus($name, $from);

    public function look($name, $from);

    public function looking($from);

    public function madison($name, $from);

    public function maybe($from);

    public function me($from);

    public function mornin($from);

    public function no($from);

    public function nugget($name, $from);

    public function off($name, $from);

    public function offWith($behavior, $from);

    public function outside($name, $from);

    public function particular($thing, $from);

    public function pink($from);

    public function problem($name, $from);

    public function programmer($from);

    public function pulp($language, $from);

    public function retard($from);

    public function ridiculous($from);

    public function rtfm($from);

    public function sake($from);

    public function shakespeare($name, $from);

    public function shit($from);

    public function shutup($name, $from);

    public function single($from);

    public function thanks($from);

    public function that($from);

    public function think($name, $from);

    public function thinking($name, $from);

    public function this($from);

    public function thumbs($name, $from);

    public function too($from);

    public function tucker($from);

    public function what($from);

    public function xmas($name, $from);

    public function yoda($name, $from);

    public function you($name, $from);

    public function zayn($from);

    public function zero($from);

}
