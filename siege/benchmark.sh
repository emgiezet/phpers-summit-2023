#/bin/sh

siege -c 100 -r 1000 -b -i -f urls.txt -d 1
