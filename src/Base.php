<?php


namespace Format;


abstract class Base {

	protected $profile;

	public function setProfile(Profile $profile): void {
		$this->profile = $profile;
	}
}
