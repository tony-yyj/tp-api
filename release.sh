#!/bin/sh bash
# 发布脚本，需要从jenkins中下载，然后复制到对应的项目中
# 发布工程目录
echo "开始构建"
:<<!
遇到权限问题，需要把jenkins的权限升级到root，
	1.将jenkins账号分别加入到root组中
		gpasswd -a root jenkins
	2.修改/etc/sysconfig/jenkins文件中，
		JENKINS_USER=root JENKINS_GROUP=root
	3.重启Jenkins
		service Jenkins restart
	4.验证 在Jenkins中的shell脚本中执行命令
		whoami
!
PROJ_DIR="$WORKSPACE"
# 复制目录到home/tony
if [ `whoami` = "root" ];then
    echo "root用户！"
else
    echo "非root用户！"
fi

# 删除原有的
rm -rf '/data/wwwroot/tp-api'
# 复制过去
cp -r $PROJ_DIR '/data/wwwroot/'

# 创建缓存文件runtime，并给权限777
mkdir '/data/wwwroot/tp-api/runtime'
chmod 777 '/data/wwwroot/tp-api/runtime'
