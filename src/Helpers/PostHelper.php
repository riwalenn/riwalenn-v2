<?php

class PostHelper implements EntityHelperInterface
{
    public function getStateClass($state): string
    {
        return match ($state) {
            Post::POST_PENDING_STATUS, Post::POST_STATUS_ARCHIVED => 'user-status-orange',
            Post::POST_STATUS_VALIDATED => 'user-status-green',
            default => 'user-status-red'
        };
    }
}