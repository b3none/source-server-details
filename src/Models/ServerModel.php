<?php

namespace B3none\ServerDetails\Models;

class ServerModel
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $map;

    /**
     * @var string
     */
    protected $game;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $players;

    /**
     * @var int
     */
    protected $maxPlayers;

    /**
     * @var int
     */
    protected $bots;

    /**
     * @var bool
     */
    protected $isDedicated;

    /**
     * @var string
     */
    protected $os;

    /**
     * @var bool
     */
    protected $hasPassword;

    /**
     * @var bool
     */
    protected $hasVAC;

    /**
     * @var string
     */
    protected $appId;

    /**
     * @var array
     */
    protected $tags = [];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getMap(): string
    {
        return $this->map;
    }

    /**
     * @param string $map
     */
    public function setMap(string $map): void
    {
        $this->map = $map;
    }

    /**
     * @return string
     */
    public function getGame(): string
    {
        return $this->game;
    }

    /**
     * @param string $game
     */
    public function setGame(string $game): void
    {
        $this->game = $game;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getPlayers(): int
    {
        return $this->players;
    }

    /**
     * @param int $players
     */
    public function setPlayers(int $players): void
    {
        $this->players = $players;
    }

    /**
     * @return int
     */
    public function getMaxPlayers(): int
    {
        return $this->maxPlayers;
    }

    /**
     * @param int $maxPlayers
     */
    public function setMaxPlayers(int $maxPlayers): void
    {
        $this->maxPlayers = $maxPlayers;
    }

    /**
     * @return int
     */
    public function getBots(): int
    {
        return $this->bots;
    }

    /**
     * @param int $bots
     */
    public function setBots(int $bots): void
    {
        $this->bots = $bots;
    }

    /**
     * @return bool
     */
    public function isDedicated(): bool
    {
        return $this->isDedicated;
    }

    /**
     * @param bool $isDedicated
     */
    public function setIsDedicated(bool $isDedicated): void
    {
        $this->isDedicated = $isDedicated;
    }

    /**
     * @return string
     */
    public function getOS(): string
    {
        return $this->os;
    }

    /**
     * @param string $os
     */
    public function setOS(string $os): void
    {
        $this->os = $os;
    }

    /**
     * @return bool
     */
    public function getHasPassword(): bool
    {
        return $this->hasPassword;
    }

    /**
     * @param bool $hasPassword
     */
    public function setHasPassword(bool $hasPassword): void
    {
        $this->hasPassword = $hasPassword;
    }

    /**
     * @return bool
     */
    public function getHasVAC(): bool
    {
        return $this->hasVAC;
    }

    /**
     * @param bool $hasVAC
     */
    public function setHasVAC(bool $hasVAC): void
    {
        $this->hasVAC = $hasVAC;
    }

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     */
    public function setAppId(string $appId): void
    {
        $this->appId = $appId;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }
}