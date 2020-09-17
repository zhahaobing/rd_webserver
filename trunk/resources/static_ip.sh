#!/bin/bash

#zhahobing added for auto set ip 2019.09.04 start+++
ifconfig eno1 up
ifconfig eno2 up

/usr/local/php/sbin/php-fpm

sleep 1

ifconfig eno1 192.168.1.100
ifconfig eno2 192.168.2.100

exit 0

#zhahobing added for auto set ip 2019.09.04 end+++

