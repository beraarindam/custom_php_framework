<?php

namespace App\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateFileCommand extends Command
{
    // Command name and description
    protected static $defaultName = 'make:file';
    protected static $defaultDescription = 'Create a new file with specified content';

    protected function configure()
    {
        $this
            ->addArgument('filename', InputArgument::REQUIRED, 'The name of the file to create')
            ->addArgument('content', InputArgument::REQUIRED, 'The content of the file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $filename = $input->getArgument('filename');
        $content = $input->getArgument('content');

        if (file_put_contents($filename, $content) !== false) {
            $output->writeln("File created successfully!");
        } else {
            $output->writeln("Failed to create file.");
        }

        return Command::SUCCESS;
    }
}
