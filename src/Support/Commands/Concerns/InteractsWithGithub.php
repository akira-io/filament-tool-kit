<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Support\Commands\Concerns;

trait InteractsWithGithub
{
    protected function createGitHubIssue(
        string $columnName,
        string $prefix = ''
    ): void {

        // Add the prefix to the title if provided
        $title = "{$prefix} Missing Column Class: {$columnName}";
        $body = "No matching  class found for  {$prefix} column: {$columnName}";

        // Generate the issue URL
        $url = 'https://github.com/akira-io/filament-tool-kit/issues/new?title='
            .urlencode($title).'&body='.urlencode($body);

        // Inform the user to create the issue
        \Laravel\Prompts\info("Please create an issue on GitHub for the missing {$prefix} : {$columnName}");
        \Laravel\Prompts\info("You can do so by visiting this URL: {$url}");
    }
}
