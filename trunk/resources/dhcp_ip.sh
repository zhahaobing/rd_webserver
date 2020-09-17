#!/bin/bash

#zhahobing added for auto set ip 2019.09.04 start+++
ifconfig eno1 up
ifconfig eno2 up

/usr/local/php/sbin/php-fpm

sleep 1

dhclient eno1
dhclient eno2

exit 0

#zhahobing added for auto set ip 2019.09.04 end+++

