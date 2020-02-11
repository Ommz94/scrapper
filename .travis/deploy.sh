#!/bin/bash

# print outputs and exit on first failure
set -xe

# setup ssh agent, git config and remote
eval "$(ssh-agent -s)"
ssh-add ~/.ssh/travis_rsa
git remote add deploy "root@159.203.175.102:/var/www/html/scrapy"
git config user.name "Ommz94"
git config user.email "omeashgaya1@gmail.com"

# commit compressed files and push it to remote
rm -f .gitignore
cp .travis/deployignore .gitignore
git add .
git status # debug
git commit -m "Deploy compressed files"
git push -f deploy HEAD:master
