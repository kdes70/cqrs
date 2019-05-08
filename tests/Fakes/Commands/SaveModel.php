<?php

namespace ArtisanSdk\CQRS\Tests\Fakes\Commands;

use ArtisanSdk\CQRS\Command as Base;

class SaveModel extends Base
{
    public function run()
    {
        return $this->save($this->argument('model'));
    }
}
