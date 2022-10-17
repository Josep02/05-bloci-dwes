<?php
class Twitter {
    private array $tweets = [];
    private array $users = [];
    private int $numberOfTweets = 0;
    private int $numberOfUsers = 0;

    function __contruct($tweets, $users, $numberOfTweets, $numberOfUsers) {
        $this->tweets = $tweets;
        $this->users = $users;
        $this->numberOfTweets = $numberOfTweets;
        $this->numberOfUsers = $numberOfUsers;
    }

    public function likeTweet(User $user, Tweet $tweet) {
        $this->user = $user;
        $this->tweet = $tweet;
    }

    public function addUser(User $user) {
        array_push($this->users, $user);
        $this->numberOfUsers++;
    }

    public function addTweet(Tweet $tweet) {
        array_push($this->tweets, $tweet);
        $this->numberOfTweets++;
    }

    public function getTweets(): array {
        return $this->tweets;
    }

    public function setTweets(array $tweets): void {
        $this->tweets = $tweets;
    }

    public function getUsers(): array {
        return $this->users ;
    }

    public function setUsers(array $users): void {
        $this->users = $users;
    }

    public function getNumberOfTweets(): int {
        return $this->numberOfTweets;
    }

    public function setNumberOfTweets(int $numberOfTweets): void {
        $this->numberOfTweets = $numberOfTweets;
    }

    public function getNumberOfUsers(): int {
        return $this->numberOfUsers;
    }

    public function setNumberOfUsers(int $numberOfUsers): void {
        $this->numberOfUsers = $numberOfUsers;
    }


}