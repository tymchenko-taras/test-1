<?php
declare(strict_types=1);

namespace App\Application\Actions\Video;

use App\Application\Actions\Action;
use App\Domain\Video\VideoRepository;
use Psr\Log\LoggerInterface;

abstract class VideoAction extends Action
{
    /**
     * @var VideoRepository
     */
    protected $repository;

    /**
     * VideoAction constructor.
     * @param LoggerInterface $logger
     * @param VideoRepository $repository
     */
    public function __construct(LoggerInterface $logger, VideoRepository $repository)
    {
        parent::__construct($logger);
        $this->repository = $repository;
    }
}
