<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use Psr\Http\Message\ResponseInterface as Response;

class SignInUserAction extends UserAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $data = $this->getFormData('username');

        $user = $this->userRepository->findUserOfUsername($data->username);

        $this->logger->info("User of id `". $user->getId() ."` logged in.");

        return $this->respondWithData(["token" => "555"]);
    }
}
