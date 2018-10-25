<?php

namespace App\Users\Domain\Services;

use App\App\Domain\Contracts\ServiceInterface;
use App\App\Domain\Payloads\GenericPayload;
use App\Users\Domain\Repositories\UserRepository;
class DeleteUserService implements ServiceInterface {
    protected $users;
    public function __construct(UserRepository $users) {
        $this->users = $users;
    }
    public function handle($data = []) {
        return new GenericPayload($this->users->all());
    }
}