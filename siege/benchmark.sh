#/bin/sh

siege -c 100 -r 100 -b -i -f urls.txt
