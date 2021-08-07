#!/bin/bash
cd
git clone https://github.com/BAIT-LINUX/sourcode.git
clear
cd sourcode
tar -xzvf BAIT_LINUX.tar.gz
mv BAIT_LINUX /data/data/com.termux/files/home/
cd
rm -rv sourcode
rm -rv BAIT-LINUX
cd BAIT_LINUX
sh run.sh
