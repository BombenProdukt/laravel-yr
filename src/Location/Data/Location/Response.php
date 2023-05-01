<?php

declare(strict_types=1);

namespace BombenProdukt\Yr\Location\Data\Location;

use BombenProdukt\Yr\Location\Data\Links;
use BombenProdukt\Yr\Location\Data\Location;
use Spatie\LaravelData\Data;

final class Response extends Data
{
    private function __construct(
        public readonly Location $location,
        public readonly Links $links,
    ) {
        //
    }

    public static function fromResponse(array $data): self
    {
        return new self(
            location: Location::fromResponse($data),
            links: Links::fromResponse($data['_links']),
        );
    }
}
