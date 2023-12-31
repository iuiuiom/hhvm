#!/bin/bash

readonly EXTNAME=$1

if [ ${#EXTNAME} -le 12 ]; then
  echo "ext.${EXTNAME}"
  exit 0
fi

# Some platforms limit section names to 16 characters
# So we'll use 'ext.' plus the first 12 characters of md5($extname)
if builtin command -v md5 > /dev/null; then
  SECTNAME=$(echo -n "${EXTNAME}" | md5)
elif builtin command -v md5sum > /dev/null; then
  SECTNAME=$(echo -n "${EXTNAME}" | md5sum)
else
  echo "Neither md5 nor md5sum available on this system" 2>&1
  exit 1
fi
echo "ext.${SECTNAME:0:12}"
