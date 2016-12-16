# PiDoor
A experimental project using RaspberryPi to control a doorlock.  
校内实验项目，利用树莓派作为控制中心，制成一套智能门禁系统。  主要利用树莓派的GPIO对继电器进行控制，从而操作锁的开关。使用python作为GPIO的开发语言，GPIO部分开发完成以后，封装为一个WEB接口，其他程序通过访问WEB接口的形式实现对硬件操作。  利用一个公网服务器，并在树莓派上运行轮询脚本，实现从访问外网开锁的效果。  
#Hardware
Pi*1、electronic lock*1、relay*1、12V power supply
#Software
Debian8、Python 2.7.9、PHP 5.6  
