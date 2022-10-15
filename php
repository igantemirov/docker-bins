#!/bin/bash
command="docker run --rm --interactive --tty --volume $PWD:/app php:8.1-cli php $@"
echo "Running PHP on Docker"
$command