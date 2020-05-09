#!/bin/bash

SERVICE="dockerd"

if ! pgrep -x "$SERVICE" > /dev/null
then
	sudo service docker start
fi

docker-compose up -d
