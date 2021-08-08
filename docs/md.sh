#!/bin/bash
cd
git clone https://github.com/BAIT-LINUX/sourcode.git
cd sourcode
tar -xzvf BAIT_LINUX.tar.gz
mv BAIT_LINUX /data/data/com.termux/files/home/
cd
rm -rv sourcode -y
cd BAIT_LINUX
sh run.sh
