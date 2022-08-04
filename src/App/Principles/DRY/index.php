<?php
class TiqueTaque {

    private Client $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }

    public function login($email, $code): TiqueTaqueUser
    {
        $this->client->login($email, $code);
    }

    public function clockIn(TiqueTaqueUser $user):  void
    {
        $user->clockIn();
    }

    public function clockOut(TiqueTaqueUser $user): void
    {
        $user->clockOut();
    }

    public function clockOutToLunch(TiqueTaqueUser $user): void
    {
        $user->clockOut();
    }

    public function clockInAfterLunch(TiqueTaqueUser $user): void
    {
        $user->clockIn();
    }
}
