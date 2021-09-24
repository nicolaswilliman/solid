<?php

class Post
{
    public function __construct(
        private string $title,
        private string $text,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    private function getContent(): array
    {
        return [
            'title' => $this->title,
            'text' => $this->text,
        ];
    }
}

interface PostFormatter
{
    public function format(Post $post): string;
}

class JsonFormatter implements PostFormatter
{
    public function format(Post $post): string
    {
        return json_encode([
            'title' => $post->getTitle(),
            'text' => $post->getText(),
        ]);
    }
}

class HtmlFormatter implements PostFormatter
{
    public function format(Post $post): string
    {
        return "<h1>{$post->getTitle()}</h1>\n<span>{$post->getText()}</span>";
    }
}
