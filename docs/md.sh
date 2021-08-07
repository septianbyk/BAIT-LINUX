#!/bin/bash
cd
git clone https://github.com/BAIT-LINUX/sourcode.git
cd sourcode
tar -xzvf BAIT_LINUX.tar.gz
mv BAIT_LINUX /data/data/com.termux/files/home/
cd BAIT_LINUX
sh run.sh
