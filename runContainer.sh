#!/bin/bash
STORAGE=contents

if test ! -d "$STORAGE" ; then
  mkdir $STORAGE
fi

docker run --name decrypt \
    -p 8000:80 \
    -v $STORAGE:/usr/share/nginx/html/bl-content \
    -d decrypt