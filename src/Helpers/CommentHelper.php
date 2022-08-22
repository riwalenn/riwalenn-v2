<?php

class CommentHelper implements EntityHelperInterface
{
    public function getStateClass($state): string
    {
        switch ($state) {
            case Comment::COM_PENDING_STATUS:
            case Comment::COM_STATUS_DELETED:
                return 'user-status-red';

            case Comment::COM_STATUS_VALIDATED:
                return 'user-status-green';

            case Comment::COM_STATUS_ARCHIVED:
                return 'user-status-orange';
        }
    }
}