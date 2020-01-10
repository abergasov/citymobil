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
        $data = [
            'worlds1',
            'sample_worlds1',
            'next_worlds1',
            'test_worlds1',
            'new_worlds1',
            'again_worlds2',
            'next_worlds2',
            'test_worlds2',
            'new_worlds2',
            'again_worlds2',
            'agaain_worlds2',
        ];

        $prefixArr = ['nex', 'test', 'again'];
        foreach ($prefixArr as $singlePrefix) {
            $matches = $this->parseRegexpData($data, $singlePrefix);
            echo 'pattern:' . $singlePrefix . PHP_EOL;
            echo 'found matches: ' . count($matches) . PHP_EOL;
            var_dump($matches);
            echo PHP_EOL;
        }
        return 0;
    }

    private function parseRegexpData (array $words, string $prefix) : array {
        $result = [];
        foreach ($words as $singleWorld) {

            if (!preg_match('/' . $prefix . '/', $singleWorld)) {
                continue;
            }
            $result[] = $singleWorld;
        }
        return $result;
    }
}