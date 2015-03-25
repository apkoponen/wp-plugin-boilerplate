#!/bin/bash
echo "Replacing Boilerplate with $1 and boilerplate with ${1,,}"
find ../ -type f -not -path "*/.*" -not -path "*bin*" -print0 | xargs -0 sed -i "s/boilerplate/${1,,}/g"
find . -type f -not -path "*/.*" -not -path "*bin*" -print0 | xargs -0 sed -i "s/Boilerplate/$1/g"
mv ../boilerplate.php ../${1,,}.php
