<?php

namespace Strukt\Contract\Http;

use Strukt\Contract\UserInterface;

interface RequestInterface{

	public function setUser(UserInterface $user = null);
	public function getUser();
}