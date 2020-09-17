#!/bin/bash

#zhahobing added for auto set ip 2019.09.04 start+++
ifconfig eno1 up
ifconfig eno2 up

sleep 1

ifconfig eno1 192.168.1.100
ifconfig eno2 192.168.2.100

sleep 1
svnserve -d -r /home/sdb1/code/svn

exit

#zhahobing added for auto set ip 2019.09.04 end+++

