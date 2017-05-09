Thinkpad E440 Hackintosh Files
===
OS X 10.12

1. 按教程安装可以顺利进行UniBeast_ Install macOS Sierra on Any Supported Intel-based PC _ tonymacx86.com
2. MultiBeast 中的 
  - qiuck start选  UEFI Boot Mode
  - Drives 中Misc选 FakeSMC.kext
  - Bootloaders 选 colver v2.4k r4063 UEFI boot mode
  - 注意：MultiBeast 会将FakeSMC.kext放到/Libarary/Extension中，不要用其他地方的FakeSMC.kext，否则无法启动
3. 将kexts/10.12目录下的文件复制到 /System/Libaray/Extension中，可能要修改文件owner `chown -R root:wheel *`
4. 外接无线网卡 TL-WN725N 2.0 145TE 用3in1_Wlan_11n_USB_MacOS10.8_Driver_UI_2.0.1安装
5. 问题汇总
  - unibeast 要求英文系统，先将系统调成英文。U盘>16G 现有启动盘sandisk ultra
  - unibeast 卡在installing bootloader：u盘efi分区格式不对，在U盘里有colver的安装日志，按日志中的提示格式化EFI分区 `sudo newfs_hfs -v EFI /dev/disk0s1`,成功后重新制作安装盘，重做时最好删除EFI分区,windows下用diskpart命令
  - 无法正常启动：进入单用户模式,删除/System/Libaray/Extension下错误的驱动
