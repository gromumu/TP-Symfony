<?php


namespace App\Security;


use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserManager
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function save(User $user): void
    {
        $encodedPassword = $this->passwordEncoder->encodePassword(
            $user,
            $user->getPassword()
    );
        dump($encodedPassword, $user); die;
    }

}