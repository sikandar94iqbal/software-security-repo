#!/bin/bash
docker image ls | grep '758426454199.dkr.ecr.us-east-1.amazonaws.com/software-security-code-images' |  awk '{ print $3 }'  | while read -r line ; do docker image rm -f $line; done