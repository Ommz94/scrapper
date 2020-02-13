<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ScrappyTest extends TestCase
{
    public function test_when_a_user_visits_home_page_place_holder_message_should_display()
    {
        $content = file_get_contents('http://165.22.48.48/scrappy');
        $this->assertContains('Enter webpage url to scrap content', $content);
    }

    public function test_when_a_user_submits_a_url_it_should_be_scrapped()
    {
        $content = file_get_contents('http://165.22.48.48/scrappy/index.php?url=https%3A%2F%2Fwww.google.com%2F');
        $this->assertContains('Abstract', $content);
        $this->assertContains('Images', $content);
        $this->assertContains('Content', $content);
    }
}
