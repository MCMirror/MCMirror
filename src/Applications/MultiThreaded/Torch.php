<?php


namespace App\Applications\MultiThreaded;

use App\Applications\ApplicationInterface;


class Torch implements ApplicationInterface
{
    public function isRecommended(): bool
    {
        return false;
    }

    public function isAbandoned(): bool
    {
        return true;
    }

    public function isExternal(): bool
    {
        return false;
    }

    public function getUrl(): ?string
    {
        return null;
    }

    public function getName(): string
    {
        return 'Torch';
    }

    public function getCategory(): string
    {
        return 'Multi-Threaded';
    }

    public function getOfficialLinks(): array
    {
        return [];
    }
}