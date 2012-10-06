<?php

/**
 * @group Extension
 * @group Database
 */
class TwoFactorUserTest extends MediaWikiTestCase {
	public function __construct() {
		parent::__construct();
		$this->user = User::newFromName( 'UTTwoFactor' );
		if( $this->user->getID() == 0 ) {
			$this->user->addToDatabase();
			$this->user->setPassword( 'UTTwoFactorPassword' );
			$this->user->saveSettings();
		}

		$this->twofactoruser = new TwoFactorAuthUser( $this->user );
		$this->twofactoruser->loadFromRandom();
	}

	protected function setUp() {
		parent::setUp();
		$this->twofactoruser->loadFromDatabase();
		if( $this->twofactoruser->enabled() ) {
			$this->twofactoruser->disable();
		}
	}

	/**
	 * @group Database
	 */
	public function testEnable() {
		$secret = $this->twofactoruser->getSecret();
		$this->assertTrue( $this->twofactoruser->enable() );
		$this->assertTrue( $this->twofactoruser->enabled() );

		$test = new TwoFactorAuthUser( $this->user );
		$this->assertTrue( $test->loadFromDatabase() );
		$this->assertSame( $secret, $test->getSecret() );
	}

	/**
	 * @group Database
	 */
	public function testDisable() {
		// Enable and disable first.
		$this->assertFalse( $this->twofactoruser->enabled() );
		$this->assertTrue( $this->twofactoruser->enable() );
		$this->assertTrue( $this->twofactoruser->disable() );
		$this->assertFalse( $this->twofactoruser->enabled() );

		$test = new TwoFactorAuthUser( $this->user );
		$this->assertFalse( $test->loadFromDatabase() );
	}

	public function testSession() {
		$this->twofactoruser->saveToSession();
		$test = new TwoFactorAuthUser( $this->user );

		$this->assertTrue( $test->loadFromSession() );
		$this->assertSame( $this->twofactoruser->getSecret(), $test->getSecret() );
	}

	/**
	 * @dataProvider provideValidTokens
	 */
	public function testValidTokens( $token, $type ) {
		$this->assertTrue( $this->tokenuser->verifyToken( $token ), $type );
	}

	/**
	 * @dataProvider provideInvalidTokens
	 */
	public function testInvalidTokens( $token ) {
		$this->assertFalse( $this->tokenuser->verifyToken( $token ) );
	}

	public function provideValidTokens() {
		$tokens = array();
		$secret = $this->twofactoruser->getSecret();
		$res = HOTP::generateByTimeWindow( Base32::decode( $secret ), 30 );
		foreach( $res as $token ) {
			$tokens[] = array( $token->toHOTP( 6 ), 'totp' );
		}

		$scratch = $this->twofactoruser->getScratchTokens();
		foreach( $scratch as $token ) {
			$tokens[] = array( $token, 'scratch' );
		}

		return $tokens;
	}

	public function provideInvalidTokens() {
		$tokens = array(
			array( '' ),
			array( 'ThisIsWayTooLong' ),
			array( 'ABZLSJD' ),
			array( '!@#$%^&' )
		);

		for( $i = 0; $i < 10; $i++ ) {
			$tokens[] = array( Base32::encode( MWCryptRand::generate( 6, true ) ) );
		}

		return $tokens;
	}
}
