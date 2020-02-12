#!/bin/bash

# print outputs and exit on first failure
set -xe

echo "Running add config.user"
git config user.name "Ommz94"

echo "Running add config.email"
git config user.email "omeashgaya1@gmail.com"

echo "Running pull"
git pull origin master
