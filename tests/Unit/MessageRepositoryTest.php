<?php
/**
 * Created by PhpStorm.
 * User: shaunhare
 * Date: 02/04/2017
 * Time: 12:58
 */

namespace Tests\Unit;


use lincolnhack\Model\Message;
use Lincolnhack\Repositories\MessageRepository;
use Tests\TestCase;

class MessageRepositoryTest extends TestCase
{
    private $messageRepository;
    
    /**
     *
     */
    public function setUp()
    {
        parent::setUp();
        $this->messageRepository = new MessageRepository($this->app);
    }
    
    public function testMessageRepositoryReturnsEmptyStringIfEmptyType()
    {
        $actual = $this->messageRepository->getLastMessage('');
        
        $this->assertEmpty($actual);
    }
    
    /**
     *
     */
    public function testAddMessage()
    {
        $data = ['message'=>'test message','type'=>'home.index','active'=>time()];
        $actual = $this->messageRepository->addMessage($data);
        
        $this->assertInstanceOf(Message::class,$actual);
        $this->assertEquals ($data['message'],$actual->message);
    }
}
