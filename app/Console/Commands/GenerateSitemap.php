<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml file';

    public function handle(): void
    {
        $sitemap = Sitemap::create()
            ->add(
                Url::create('/')
                    ->setPriority(1.0)
                    ->setChangeFrequency('daily')
            )
            ->add(
                Url::create('/reviews')
                    ->setPriority(0.9)
                    ->setChangeFrequency('daily')
            )
            ->add(
                Url::create('/oz-collectibles')
                    ->setPriority(0.8)
                    ->setChangeFrequency('weekly')
            )
            ->add(
                Url::create('/community')
                    ->setPriority(0.7)
                    ->setChangeFrequency('daily')
            );

        // When you have a Review model, add dynamic entries like:
        // Review::published()->each(fn ($review) =>
        //     $sitemap->add(
        //         Url::create(route('reviews.show', $review))
        //             ->setLastModificationDate($review->updated_at)
        //             ->setPriority(0.8)
        //     )
        // );

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('sitemap.xml generated at ' . public_path('sitemap.xml'));
    }
}
