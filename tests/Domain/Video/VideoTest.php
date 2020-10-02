<?php
declare(strict_types=1);

namespace Tests\Domain\Video;

use App\Domain\Video\Video;
use Tests\TestCase;

class VideoTest extends TestCase
{
    public function videoProvider()
    {
        return [
            [1, "What It's Like To Work At AlgaeCal", "Discover what it's like to work at AlgaeCal with this quick video!", "m3ralniniq", ""],
        ];
    }

    /**
     * @dataProvider videoProvider
     * @param $id
     * @param $title
     * @param $description
     * @param $videoId
     * @param $category
     */
    public function testGetters($id, $title, $description, $videoId, $category)
    {
        $video = new Video($id, $title, $description, $videoId, $category);

        $this->assertEquals($id, $video->getId());
        $this->assertEquals($title, $video->getTitle());
        $this->assertEquals($description, $video->getDescription());
        $this->assertEquals($videoId, $video->getVideoId());
        $this->assertEquals($category, $video->getCategory());
    }

    /**
     * @dataProvider videoProvider
     * @param $id
     * @param $title
     * @param $description
     * @param $videoId
     * @param $category
     */
    public function testJsonSerialize($id, $title, $description, $videoId, $category)
    {
        $video = new Video($id, $title, $description, $videoId, $category);

        $expectedPayload = json_encode([
            'id'          => $id,
            'title'       => $title,
            'category'    => $category,
            'description' => $description,
            'videoId'     => $videoId,
        ]);

        $this->assertEquals($expectedPayload, json_encode($video));
    }
}
