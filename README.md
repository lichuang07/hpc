# hpc
高性能俱乐部网站
开发环境部署/安装

本项目代码使用 PHP 框架 Laravel 5.5 开发，本地开发环境使用 Laravel Homestead。
苹果系统可参考以下安装流程。其它系统请参照 Homestead 安装与设置 进行安装配置。
Mac OSX 安装 Homestead

1. 下载并安装 virtualbox

2. 下载并安装 vagrant

3. 初始化 Homestead

 vagrant box add laravel/homestead
 cd ~ && git clone https://github.com/laravel/homestead.git Homestead
 cd Homestead && git checkout v7.0.1
 bash init.sh
 
4. 把 homestead 加入系统全局命令
vim ~/.bash_profile
# 最后一行加入
function homestead() {
    ( cd ~/Homestead && vagrant $* )
}
source ~/.bash_profile(如果使用的其他bash如zsh代码要加在相应文件)

项目安装和配置
1. 克隆源代码
克隆源代码到本地：
cd 你的自定义目录
git clone git@github.com:lichuang07/hpc.git

2. 配置 hosts 文件
echo "192.168.10.10   hpc.test" | sudo tee -a /etc/hosts(也可打开hosts文件加入192.168.10.10   hpc.test)

3. 配置本地的 Homestead 环境
1). 运行以下命令编辑 Homestead.yaml 文件
vim ~/Homestead/Homestead.yaml

2). 加入对应修改，如下所示：
folders:
    - map: 自定义目录/hpc # 你本地的项目目录地址
      to: /home/vagrant/hpc

sites:
    - map: hpc.test
      to: /home/vagrant/hpc/public

databases:
    - hpc
3). 应用修改
修改完成后保存，然后执行以下命令应用配置信息修改：
homestead provision
然后运行  homestead up 启动虚拟机（或 homestead reload 进行重启）

4). 进入虚拟机环境
homestead ssh
cd /home/vagrant/musikid-io/

!!注意!! 以下命令，均在 vagrant 虚拟机内执行

4. 安装扩展包依赖
composer install

5. 生成配置文件
cp .env.example .env
你可以根据情况修改 .env 文件里的内容，如数据库连接、缓存、邮件设置等。
