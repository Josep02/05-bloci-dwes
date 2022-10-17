<?php
class Tweet {
    private string $text;
    private DateTime $createdAt;
    private array $attachments = [];
    private User $author;
    private int $likeCount = 0;

    function __construct($text, $author) {
        $this->text = $text;
        $this->author = $author;
    }

    public function getText(): string {
        return $this->text;
    }

    public function setText(string $text): void {
        $this->text = $text;
    }

    public function getCreatedAt(): DateTime {
        sleep(4);
        return $this->createdAt = new DateTime;
    }

    public function setCreatedAt(DateTime $createdAt): void {
        $this->createdAt = $createdAt;
    }

    public function addAttachment(Media $media) {
        $this->media = $media;
    }

    public function getAttachments(): array {
        return $this->attachments;
    }

    public function setAttachments(array $attachments): void {
        $this->attachments = $attachments;
    }

    public function getAuthor(): User {
        return $this->author;
    }

    public function setAuthor(User $author): void {
        $this->author = $author;
    }

    public function getLikeCount(): int {
        return $this->likeCount;
    }

    public function setLikeCount(int $likeCount): void {
        $this->likeCount = $likeCount;
    }
}