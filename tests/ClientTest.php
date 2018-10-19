<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ClientTeste extends TestCase
{

    protected $fuck;
    protected $name;
    protected $from;

    public function setUp()
    {
        $this->fuck = new Bmonteirog\FOAAS\Client;
        $this->name = 'Teste';
        $this->from = 'Bruno';
    }

    public function testCanCreateClient(): void
    {
        $this->assertInstanceOf(
            Bmonteirog\FOAAS\ClientInterface::class,
            $this->fuck
        );
    }

    public function testCanGetVersion(): void
    {
        $response = $this->fuck->asHtml()->version();
        $this->assertRegexp('/FOAAS - Version /', $response);
    }

    public function testCanGetOperations(): void
    {
        $response = $this->fuck->operations();
        $this->assertRegexp('/{"name":"Version","url":"\/version"/', $response);
    }

    public function testCanFuckAnyway(): void
    {
        $response = $this->fuck->anyway($this->name, $this->from);
        $this->assertRegexp('/Who the fuck are you anyway/', $response);
    }

    public function testCanFuckAwesome(): void
    {
        $response = $this->fuck->awesome($this->from);
        $this->assertRegexp('/This is Fucking Awesome/', $response);
    }

    public function testCanFuckBack(): void
    {
        $response = $this->fuck->back($this->name, $this->from);
        $this->assertRegexp('/ back the fuck off/', $response);
    }

    public function testCanFuckBag(): void
    {
        $response = $this->fuck->bag($this->name);
        $this->assertRegexp('/Eat a bag of fucking/', $response);
    }

    public function testCanFuckBallmer(): void
    {
        $response = $this->fuck->ballmer($this->name, $this->name, $this->from);
        $this->assertRegexp('/ going to fucking bury that guy/', $response);
    }

    public function testCanFuckBday(): void
    {
        $response = $this->fuck->bday($this->name, $this->from);
        $this->assertRegexp('/Happy Fucking Birthday/', $response);
    }

    public function testCanFuckBecause(): void
    {
        $response = $this->fuck->because($this->from);
        $this->assertRegexp('/Because fuck you/', $response);
    }

    public function testCanFuckBlackadder(): void
    {
        $response = $this->fuck->blackadder($this->name, $this->from);
        $this->assertRegexp('/your head is as empty/', $response);
    }

    public function testCanFuckBm(): void
    {
        $response = $this->fuck->bm($this->name, $this->from);
        $this->assertRegexp('/Bravo mike/', $response);
    }

    public function testCanFuckBucket(): void
    {
        $response = $this->fuck->bucket($this->from);
        $this->assertRegexp('/choke on a bucket/', $response);
    }

    public function testCanFuckBus(): void
    {
        $response = $this->fuck->bus($this->name, $this->from);
        $this->assertRegexp('/on a bendy-bus/', $response);
    }

    public function testCanFuckBye(): void
    {
        $response = $this->fuck->bye($this->from);
        $this->assertRegexp('/Fuckity bye/', $response);
    }

    public function testCanFuckCaniuse(): void
    {
        $response = $this->fuck->caniuse('tool', $this->from);
        $this->assertRegexp('/Can you use/', $response);
    }

    public function testCanFuckChainsaw(): void
    {
        $response = $this->fuck->chainsaw($this->name, $this->from);
        $this->assertRegexp('/me gently with a chainsaw/', $response);
    }

    public function testCanFuckCocksplat(): void
    {
        $response = $this->fuck->cocksplat($this->name, $this->from);
        $this->assertRegexp('/you worthless cocksplat/', $response);
    }

    public function testCanFuckCool(): void
    {
        $response = $this->fuck->cool($this->from);
        $this->assertRegexp('/Cool story, bro/', $response);
    }

    public function testCanFuckCup(): void
    {
        $response = $this->fuck->cup($this->from);
        $this->assertRegexp('/How about a nice cup/', $response);
    }

    public function testCanFuckDalton(): void
    {
        $response = $this->fuck->dalton($this->name, $this->from);
        $this->assertRegexp('/A fucking problem solving/', $response);
    }

    public function testCanFuckDeraadt(): void
    {
        $checkFor = 'you are being the usual slimy';
        $response = $this->fuck->deraadt($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckDiabetes(): void
    {
        $checkFor = 'have type 2 diabetes';
        $response = $this->fuck->diabetes($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckDonut(): void
    {
        $checkFor = 'flying fuck at a rolling donut';
        $response = $this->fuck->donut($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckDosomething(): void
    {
        $checkFor = 'do the fucking';
        $response = $this->fuck->dosomething('do', 'something', $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckEveryone(): void
    {
        $checkFor = 'Everyone can go and fuck off';
        $response = $this->fuck->everyone($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckEverything(): void
    {
        $checkFor = 'Fuck everything';
        $response = $this->fuck->everything($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckFamily(): void
    {
        $checkFor = 'your whole family';
        $response = $this->fuck->family($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckFascinating(): void
    {
        $checkFor = 'Fascinating story';
        $response = $this->fuck->fascinating($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckField(): void
    {
        $checkFor = 'cast thine eyes upon the field';
        $response = $this->fuck->field($this->name, $this->from, 'reference');
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckFlying(): void
    {
        $checkFor = 'give a flying fuck';
        $response = $this->fuck->flying($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckFyyff(): void
    {
        $checkFor = 'you fucking fuck';
        $response = $this->fuck->fyyff($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckGfy(): void
    {
        $checkFor = 'Golf foxtrot yankee';
        $response = $this->fuck->gfy($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckGive(): void
    {
        $checkFor = 'I give zero fucks';
        $response = $this->fuck->give($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckGreed(): void
    {
        $checkFor = 'and captures the essence of the evolutionary spirit';
        $response = $this->fuck->greed('noun', $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckHorse(): void
    {
        $checkFor = 'Fuck you and the horse you rode in on';
        $response = $this->fuck->horse($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckImmensity(): void
    {
        $checkFor = 'You can not imagine the immensity';
        $response = $this->fuck->immensity($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckIng(): void
    {
        $checkFor = 'Fucking fuck off';
        $response = $this->fuck->ing($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckKeep(): void
    {
        $checkFor = 'And when you get there';
        $response = $this->fuck->keep($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckKeepcalm(): void
    {
        $checkFor = 'Keep the fuck calm';
        $response = $this->fuck->keepcalm('reaction', $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckKing(): void
    {
        $checkFor = 'you are fucking thick';
        $response = $this->fuck->king($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckLife(): void
    {
        $checkFor = 'Fuck my life';
        $response = $this->fuck->life($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckLinus(): void
    {
        $checkFor = 'express my disgust and frustration with this crap';
        $response = $this->fuck->linus($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckLook(): void
    {
        $checkFor = 'do I look like I give';
        $response = $this->fuck->look($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckLooking(): void
    {
        $checkFor = 'Looking for a fuck to give';
        $response = $this->fuck->looking($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckMadison(): void
    {
        $checkFor = 'most insanely idiotic things I have ever heard';
        $response = $this->fuck->madison($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckMaybe(): void
    {
        $checkFor = 'Maybe. Maybe not.';
        $response = $this->fuck->maybe($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckMe(): void
    {
        $checkFor = 'Fuck me';
        $response = $this->fuck->me($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckMornin(): void
    {
        $checkFor = 'Happy fuckin';
        $response = $this->fuck->mornin($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckNo(): void
    {
        $checkFor = 'No fucks given';
        $response = $this->fuck->no($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckNugget(): void
    {
        $checkFor = 'you a shining example of a rancid';
        $response = $this->fuck->nugget($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckOff(): void
    {
        $checkFor = 'Fuck off';
        $response = $this->fuck->off($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckOffWith(): void
    {
        $checkFor = 'Fuck off with';
        $response = $this->fuck->offWith('behavior', $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckOutside(): void
    {
        $checkFor = 'you go outside and play hide-and-go-fuck-yourself';
        $response = $this->fuck->outside($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckParticular(): void
    {
        $checkFor = 'in particular';
        $response = $this->fuck->particular('thing', $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckPink(): void
    {
        $checkFor = 'fuck me pink';
        $response = $this->fuck->pink($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckProblem(): void
    {
        $checkFor = 'What the fuck is your problem';
        $response = $this->fuck->problem($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckProgrammer(): void
    {
        $checkFor = 'a programmer, bitch';
        $response = $this->fuck->programmer($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckPulp(): void
    {
        $checkFor = 'motherfucker, do you speak it';
        $response = $this->fuck->pulp('php', $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckRetard(): void
    {
        $checkFor = 'You Fucktard';
        $response = $this->fuck->retard($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckRidiculous(): void
    {
        $checkFor = 'fucking ridiculous';
        $response = $this->fuck->ridiculous($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckRtfm(): void
    {
        $checkFor = 'Read the fucking manual';
        $response = $this->fuck->rtfm($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckSake(): void
    {
        $checkFor = 'For Fuck\'s sake';
        $response = $this->fuck->sake($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckShakespeare(): void
    {
        $checkFor = 'Thou clay-brained guts';
        $response = $this->fuck->shakespeare($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckShit(): void
    {
        $checkFor = 'Fuck this shit';
        $response = $this->fuck->shit($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckShutup(): void
    {
        $checkFor = 'shut the fuck up';
        $response = $this->fuck->shutup($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckSingle(): void
    {
        $checkFor = 'Not a single fuck was given';
        $response = $this->fuck->single($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckThanks(): void
    {
        $checkFor = 'Fuck you very much';
        $response = $this->fuck->thanks($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckThat(): void
    {
        $checkFor = 'Fuck that';
        $response = $this->fuck->that($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckThink(): void
    {
        $checkFor = 'you think I give a fuck';
        $response = $this->fuck->think($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckThinking(): void
    {
        $checkFor = 'what the fuck were you actually';
        $response = $this->fuck->thinking($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckThis(): void
    {
        $checkFor = 'Fuck this';
        $response = $this->fuck->this($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckThumbs(): void
    {
        $checkFor = 'Who has two thumbs';
        $response = $this->fuck->thumbs($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckToo(): void
    {
        $checkFor = 'Thanks, fuck you too';
        $response = $this->fuck->too($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckTucker(): void
    {
        $checkFor = 'Come the fuck in or fuck';
        $response = $this->fuck->tucker($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckWhat(): void
    {
        $checkFor = 'What the fuck';
        $response = $this->fuck->what($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckXmas(): void
    {
        $checkFor = 'Merry Fucking Christmas';
        $response = $this->fuck->xmas($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckYoda(): void
    {
        $checkFor = 'Fuck off, you must';
        $response = $this->fuck->yoda($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckYou(): void
    {
        $checkFor = 'Fuck you,';
        $response = $this->fuck->you($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckZayn(): void
    {
        $checkFor = 'Ask me if I give a motherfuck';
        $response = $this->fuck->zayn($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanFuckZero(): void
    {
        $checkFor = 'the number of fucks I give';
        $response = $this->fuck->zero($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanShoutFuckYou(): void
    {
        $checkFor = 'FUCK YOU,';
        $response = $this->fuck->shout()->you($this->name, $this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

    public function testCanShoutFuckMe(): void
    {
        $checkFor = 'FUCK ME';
        $response = $this->fuck->shout()->me($this->from);
        $this->assertRegexp('/' . $checkFor . '/', $response);
    }

}
