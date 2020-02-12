#!/bin/bash

# print outputs and exit on first failure
set -xe

# setup ssh agent, git config and remote
eval "$(ssh-agent -s)"
ssh-add ~/.ssh/authorized_keys
git config user.name "Ommz94"
git config user.email "omeashgaya1@gmail.com"

git pull origin master
