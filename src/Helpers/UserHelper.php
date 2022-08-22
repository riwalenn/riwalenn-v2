<?php

class UserHelper implements EntityHelperInterface
{
    /**
     * @throws Exception
     */
    public function generateToken($length = 32): string
    {
        $token = random_bytes($length);
        return bin2hex($token);
    }

    public function getStateClass($state): string
    {
        switch ($state) {
            case User::USER_PENDING_STATUS:
            case User::USER_STATUS_DELETED:
                return 'user-status-red';

            case User::USER_PENDING_STATUS_MODO:
                return 'user-status-orange';

            case User::USER_STATUS_VALIDATED:
                return 'user-status-green';
        }
    }
}