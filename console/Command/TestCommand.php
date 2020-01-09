<?php

namespace Console\Command;

use App\DraftObject;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command {

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
        echo getenv('SAMPLE_PARAM') . PHP_EOL;
        $tmp = new DraftObject();
        $tmp->ping();
        return 0;
    }
}