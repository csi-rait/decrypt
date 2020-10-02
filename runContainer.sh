#!/bin/bash
STORAGE=~/decrypt_contents

if test ! -d "$STORAGE" ; then
  mkdir $STORAGE
fi
echo $STORAGE
docker run --name decrypt \
    -p 80:80 \
    -v $STORAGE:"/usr/share/nginx/html/bl-content" \
    -d decrypt