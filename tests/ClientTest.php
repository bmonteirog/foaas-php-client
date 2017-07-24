<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ClientTeste extends TestCase
{

  protected $name;
  protected $from;

  public function setUp() {
    $this->fuck = new Bmonteirog\FOAAS\Client;
    $this->name = 'Teste';
    $this->from = 'Bruno';
  }

  public function testCanCreateClient() : void
  {
    $this->assertInstanceOf(
        Bmonteirog\FOAAS\ClientInterface::class,
        $this->fuck
    );
  }

  public function testCanGetVersion() : void
  {
    $response = $this->fuck->version();
    $this->assertRegexp('/FOAAS - Version /', $response);
  }

  public function testCanGetOperations() : void
  {
    $response = $this->fuck->operations();
    $this->assertRegexp('/{"name":"Version","url":"\/version"/', $response);
  }

  public function testCanFuckAnyway() : void
  {
    $response = $this->fuck->anyway($this->name, $this->from);
    $this->assertRegexp('/Who the fuck are you anyway/', $response);
  }

  public function testCanFuckAwesome() : void
  {
    $response = $this->fuck->awesome($this->from);
    $this->assertRegexp('/This is Fucking Awesome/', $response);
  }

  public function testCanFuckBack() : void
  {
    $response = $this->fuck->back($this->name, $this->from);
    $this->assertRegexp('/ back the fuck off/', $response);
  }

  public function testCanFuckBag() : void
  {
    $response = $this->fuck->bag($this->name);
    $this->assertRegexp('/Eat a bag of fucking/', $response);
  }

  public function testCanFuckBallmer() : void
  {
    $response = $this->fuck->ballmer($this->name, $this->name, $this->from);
    $this->assertRegexp('/ going to fucking bury that guy/', $response);
  }

  public function testCanFuckBday() : void
  {
    $response = $this->fuck->bday($this->name, $this->from);
    $this->assertRegexp('/Happy Fucking Birthday/', $response);
  }

  public function testCanFuckBecause() : void
  {
    $response = $this->fuck->because($this->from);
    $this->assertRegexp('/Because fuck you/', $response);
  }

  public function testCanFuckBlackadder() : void
  {
    $response = $this->fuck->blackadder($this->name, $this->from);
    $this->assertRegexp('/your head is as empty/', $response);
  }

  public function testCanFuckBm() : void
  {
    $response = $this->fuck->bm($this->name, $this->from);
    $this->assertRegexp('/Bravo mike/', $response);
  }
/*
  public function testCanFuckBucket() : void
  {
    $response = $this->fuck->bucket($this->from);
  }

  public function testCanFuckBus() : void
  {
    $response = $this->fuck->bus($this->name, $this->from);
  }

  public function testCanFuckBye() : void
  {
    $response = $this->fuck->bye($this->from);
  }

  public function testCanFuckCaniuse() : void
  {
    $response = $this->fuck->caniuse($tool, $this->from);
  }

  public function testCanFuckChainsaw() : void
  {
    $response = $this->fuck->chainsaw($this->name, $this->from);
  }

  public function testCanFuckCocksplat() : void
  {
    $response = $this->fuck->cocksplat($this->name, $this->from);
  }

  public function testCanFuckCool() : void
  {
    $response = $this->fuck->cool($this->from);
  }

  public function testCanFuckDalton() : void
  {
    $response = $this->fuck->dalton($this->name, $this->from);
  }

  public function testCanFuckDeraadt() : void
  {
    $response = $this->fuck->deraadt($this->name, $this->from);
  }

  public function testCanFuckDiabetes() : void
  {
    $response = $this->fuck->diabetes($this->from);
  }

  public function testCanFuckDonut() : void
  {
    $response = $this->fuck->donut($this->name, $this->from);
  }

  public function testCanFuckDosomething() : void
  {
    $response = $this->fuck->dosomething($do, $something, $this->from);
  }

  public function testCanFuckEveryone() : void
  {
    $response = $this->fuck->everyone($this->from);
  }

  public function testCanFuckEverything() : void
  {
    $response = $this->fuck->everything($this->from);
  }

  public function testCanFuckFamily() : void
  {
    $response = $this->fuck->family($this->from);
  }

  public function testCanFuckFascinating() : void
  {
    $response = $this->fuck->fascinating($this->from);
  }

  public function testCanFuckField() : void
  {
    $response = $this->fuck->field($this->name, $this->from, $reference);
  }

  public function testCanFuckFlying() : void
  {
    $response = $this->fuck->flying($this->from);
  }

  public function testCanFuckGfy() : void
  {
    $response = $this->fuck->gfy($this->name, $this->from);
  }

  public function testCanFuckGive() : void
  {
    $response = $this->fuck->give($this->from);
  }

  public function testCanFuckGreed() : void
  {
    $response = $this->fuck->greed($noun, $this->from);
  }

  public function testCanFuckHorse() : void
  {
    $response = $this->fuck->horse($this->from);
  }

  public function testCanFuckIng() : void
  {
    $response = $this->fuck->ing($this->name, $this->from);
  }

  public function testCanFuckKeep() : void
  {
    $response = $this->fuck->keep($this->name, $this->from);
  }

  public function testCanFuckKeepcalm() : void
  {
    $response = $this->fuck->keepcalm($reaction, $this->from);
  }

  public function testCanFuckKing() : void
  {
    $response = $this->fuck->king($this->name, $this->from);
  }

  public function testCanFuckLife() : void
  {
    $response = $this->fuck->life($this->from);
  }

  public function testCanFuckLinus() : void
  {
    $response = $this->fuck->linus($this->name, $this->from);
  }

  public function testCanFuckLook() : void
  {
    $response = $this->fuck->look($this->name, $this->from);
  }

  public function testCanFuckLooking() : void
  {
    $response = $this->fuck->looking($this->from);
  }

  public function testCanFuckMadison() : void
  {
    $response = $this->fuck->madison($this->name, $this->from);
  }

  public function testCanFuckMaybe() : void
  {
    $response = $this->fuck->maybe($this->from);
  }

  public function testCanFuckMe() : void
  {
    $response = $this->fuck->me($this->from);
  }

  public function testCanFuckMornin() : void
  {
    $response = $this->fuck->mornin($this->from);
  }

  public function testCanFuckNo() : void
  {
    $response = $this->fuck->no($this->from);
  }

  public function testCanFuckNugget() : void
  {
    $response = $this->fuck->nugget($this->name, $this->from);
  }

  public function testCanFuckOff() : void
  {
    $response = $this->fuck->off($this->name, $this->from);
  }

  public function testCanFuckOffWith() : void
  {
    $response = $this->fuck->offWith($behavior, $this->from);
  }

  public function testCanFuckOutside() : void
  {
    $response = $this->fuck->outside($this->name, $this->from);
  }

  public function testCanFuckParticular() : void
  {
    $response = $this->fuck->particular($thing, $this->from);
  }

  public function testCanFuckPink() : void
  {
    $response = $this->fuck->pink($this->from);
  }

  public function testCanFuckProblem() : void
  {
    $response = $this->fuck->problem($this->name, $this->from);
  }

  public function testCanFuckPulp() : void
  {
    $response = $this->fuck->pulp($language, $this->from);
  }

  public function testCanFuckRetard() : void
  {
    $response = $this->fuck->retard($this->from);
  }

  public function testCanFuckRidiculous() : void
  {
    $response = $this->fuck->ridiculous($this->from);
  }

  public function testCanFuckRtfm() : void
  {
    $response = $this->fuck->rtfm($this->from);
  }

  public function testCanFuckSake() : void
  {
    $response = $this->fuck->sake($this->from);
  }

  public function testCanFuckShakespeare() : void
  {
    $response = $this->fuck->shakespeare($this->name, $this->from);
  }

  public function testCanFuckShit() : void
  {
    $response = $this->fuck->shit($this->from);
  }

  public function testCanFuckShutup() : void
  {
    $response = $this->fuck->shutup($this->name, $this->from);
  }

  public function testCanFuckSingle() : void
  {
    $response = $this->fuck->single($this->from);
  }

  public function testCanFuckThanks() : void
  {
    $response = $this->fuck->thanks($this->from);
  }

  public function testCanFuckThat() : void
  {
    $response = $this->fuck->that($this->from);
  }

  public function testCanFuckThink() : void
  {
    $response = $this->fuck->think($this->name, $this->from);
  }

  public function testCanFuckThinking() : void
  {
    $response = $this->fuck->thinking($this->name, $this->from);
  }

  public function testCanFuckThis() : void
  {
    $response = $this->fuck->this($this->from);
  }

  public function testCanFuckThumbs() : void
  {
    $response = $this->fuck->thumbs($this->name, $this->from);
  }

  public function testCanFuckToo() : void
  {
    $response = $this->fuck->too($this->from);
  }

  public function testCanFuckTucker() : void
  {
    $response = $this->fuck->tucker($this->from);
  }

  public function testCanFuckWhat() : void
  {
    $response = $this->fuck->what($this->from);
  }

  public function testCanFuckXmas() : void
  {
    $response = $this->fuck->xmas($this->name, $this->from);
  }

  public function testCanFuckYoda() : void
  {
    $response = $this->fuck->yoda($this->name, $this->from);
  }

  public function testCanFuckYou() : void
  {
    $response = $this->fuck->you($this->name, $this->from);
  }

  public function testCanFuckZayn() : void
  {
    $response = $this->fuck->zayn($this->from);
  }

  public function testCanFuckZero() : void
  {
    $response = $this->fuck->zero($this->name, $this->from);
  }
*/
}
