#!/bin/bash

# bower install

cd resources

cp -r components/pyload-common/fonts components
cp -r components/pyload-common/images components

lessc -x -rp="./" main.less main.css
cp components/pyload-common/images/icon-big.png ../preview.jpg