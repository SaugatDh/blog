<?php

function formatPostBody(string $body): string
{
    $body = e($body);

    $imageExtensions = ['jpeg', 'jpg', 'png', 'gif', 'webp', 'svg'];

    foreach ($imageExtensions as $ext) {
        $body = preg_replace(
            '/(https?:\/\/[^\s]+\.' . $ext . ')/i',
            '<img src="$1" alt="Post image" class="rounded-lg my-4 w-1/2 mx-auto block">',
            $body
        );
    }

    $body = nl2br($body);

    return $body;
}
