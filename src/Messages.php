<?php
declare(strict_types=1);

namespace App;

class Messages
{
    
    protected $test_file = 'uploads/test_file.txt';

    public function title() : string
    {
        return "Hello World";
    }

    public function message() : string
    {
        return "With love from Platform.sh";
    }
    
    public function write_file() : bool
    {
        $result = file_put_contents($this->test_file, $this->message());
        return empty($result);
    }

    public function read_file() : bool
    {
        $result = file_get_contents($this->test_file);
        return empty($result);
    }

}
