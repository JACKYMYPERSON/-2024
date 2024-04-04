## 项目说明 （2024更新）

此项目为武汉轻工大学服创大赛项目，原作者仓库链接：https://github.com/1604104se-hitwh/welcome/tree/master?tab=readme-ov-file

项目更新日志将于下面给出：

|  更新日期   | 内容  |
|  ----  | ----  |
| 2024.3.9  | 暂时性修正原作者添加数据至数据库的错误，并修改readme步骤 |



## 基础配置

运行环境建议：**（以下给出原作者配置，距今时间较长，亲测PHP = 8.2.13 mysql = 8.2.0 可正常运行）**
- [x] PHP >= 7.1（推荐使用7.2以上）  
- [x] Laravel >= 5.6  
- [x] Mysql >= 5.6  
- [x] Curl  
- [ ] Opcache  
- [ ] NGINX >= 1.13  
- [ ] HTTP/2  
- [ ] 优秀的云主机  

## 开发环境配置

### 此为测试过的步骤

#### WampServer安装

WampServer是一款Windows Apache MySQL PHP集成安装环境应用软件，即在Windows系统下的Apache、PHP和Mysql的服务器软件。

[安装教程](https://blog.csdn.net/u012124199/article/details/113926524)

如果出现vc运行库报错信息，可使用[vc运行库安装软件](https://github.com/abbodi1406/vcredist/releases)

### composer安装

[安装教程](https://blog.csdn.net/u012124199/article/details/113997079)

安装后请启动，并保持后台运行状态

### git拉仓库加配环境

```
git clone https://github.com/1212wuhu/WHPU2024.git
cd Welcome
composer install
cp .env.example .env
```
请注意，如果在运行`composer install`语句，或者`php artisan ***`时出现`In PackageManifest.php line 122: Undefined index: name`报错，请按照以下步骤进行：

- 输入`composer self-update --1`，再次尝试
- 如果上一处失败，参考[此处](https://learnku.com/laravel/t/61340)


### 数据库
点击composer图标，点击mysql数据库进入数据库管理命令行，初始账号root，密码无，直接回车即可
输入创建数据库命令，而后需要打开`.env`配置本地的数据库环境

```php
DB_CONNECTION=mysql // 可能是别的数据库，具体见Laravel
DB_HOST=127.0.0.1   // 数据库地址
DB_PORT=3306        // 端口
DB_DATABASE=数据库名称
DB_USERNAME=数据库用户名
DB_PASSWORD=数据库密码
```

运行
```
php artisan key:generate
```
进而生成密钥


```php
php artisan migrate             //若之前没有表结构，则执行这条指令
php artisan migrate:refresh //否则使用这条指令--Drop all tables and re-run all migrations
php artisan migrate:rollback//若只希望回滚迁移全部数据表，则执行这条指令
```


数据填充：

```php
php artisan db:seed --class=DatabaseSeeder              // 随机生成许多学生数据
```
**此处注意！！由于原作者代码使用了随机填充，但是没有做去重处理，因此会有几率出现键值冲突问题，我已经修改补分代码尽量降低发生的概率，但是如若发生，请按下面步骤处理**

- 观察终端完成了几个表的构建
  ```
  AdminTableSeeder::class,
  DepartmentTableSeeder::class,
  DormitoryTableSeeder::class,
  EnrollCfgTableSeeder::class,
  EnrollTableSeeder::class,
  MajorTableSeeder::class,
  StudentTableSeeder::class,
  PostTableSeeder::class,
  PermissionTableSeeder::class,
  SysInfoTableSeeder::class
  ```
  从中断报错的表继续运行
  ```
  php artisan db:seed --class=*****Seeder
  ```
  直至上面列出的所有表构造完成



### 调试运行

```php
php artisan serve
```

打开浏览器，地址栏输入：`localhost:8000`

登录数据可以在相应的数据库填充器中查看，比如管理员登录就可以在`database/seeds/AdminTableSeeder.php`中选取用户名密码登录

### 简介

为提高学校自动化办公水平，提高新生入学效率，开发新生入学迎新系统。

系统向**新生**提供：

- 学生信息查询  
- 服务数据收集  
  - 表单数据  
  - 接车预约数据  
- 关键信息通知  
- 到校信息提示  
- 迎新引导  

等服务；

系统向**在校生**提供：

- 新生信息查询（同乡）

等服务；

系统向**管理员**提供：

- 学生信息发布  
- 服务数据收集  
  - 表单数据  
  - 接车预约数据  
- 信息通知发布  
  - 到校信息发布  
  - 迎新信息发布  
- 迎新核验  
- 部分大数据分析  

等服务。

### 希望解决的问题

- 信息通知不及时

- 问卷统计不方便

- 报到流程不清楚

- 学生情况不明确

总之解决新生从录取到报到完成的一体化流程，让现场报到更加快捷方便，同时也能让新生更好地了解学校，学校也能更加方便的了解报到状态。

### 希望还能实现

- 财务系统对接，学杂费用在线缴纳

- 统一认证服务，实现报到前熟悉统一认证服务

- 信息推送，包括短信和微信平台自动推送

## 项目配置

- 后端采用Laravel框架，前端采用Bootstrap。再次感谢框架作者给我们开发带来便利。  
- 前后端数据交互部分采用Pjax模式，尽量减少页面刷新的次数。  
- 前端会采用多种开源库，之后可能会有nprogrss和sweetalert2。  
- 软件遵循GPL，若使用其他框架或库有更严格copyright要求，按照最严格执行。  



## 生产环境配置

- 将整个文件夹递归的添加执行权限 chmod -R 777 welcome，具体主要是storage；
- 使用`Nginx`中间件，需要将入口导向`public`，`index.php`会将流量引导到内核和路由；  
- 删除`.env`，在`config`中进行修改配置；  
- 关闭`debug`模式，进入生产模式。  
- 部署代码到生产环境时，可以优化自动加载
    - `composer dump-autoload --optimize`

### 使用容器
目前支持使用Docker。

- 更改 `docker-compose.yml` 配置文件

    ```
    MYSQL_ROOT_PASSWORD: your password
    MYSQL_USER: root
    MYSQL_PASSWORD: your password
    ```

-  `docker-compose up -d`.

- Then run `sudo docker container ls --all`. Copy **Nginx** Container ID.

- Then run `sudo docker exec -it <container id> bash`

- Run `cp .env.example .env` 更改`.env`文件内容

    ```
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=数据库名称
    DB_USERNAME=数据库用户名
    DB_PASSWORD=数据库密码
    ```

- Run `composer install`

- Run `php artisan key:generate`

- Run `php artisan migrate:fresh --seed`

- Visit `http:\\localhost:80`.

## 已实现部分功能展示

- 登录界面

![login](./pic/login.png)

- 新生界面

![news](./pic/news.png)

- 新生查询宿舍信息

![newsDorm](./pic/newsDorm.png)

- 新生查询老乡

![newsLocal](./pic/newsLocal.png)

- 管理员界面

![admin](./pic/admin.png)

- 管理员添加学生和院系信息
- 管理员添加学校简介
- 接车服务
- 报道流程
- 迎新核验
- “绿色通道”申请与审核

## 暂定实现功能

1. 个人信息查询

- 学号  
  - 学号  
  - 班级  
  - 院系与专业  
  - 班内人员及信息  
  - 班级群信息  
- 宿舍  
  - 室友信息  
  - 宿舍位置  
  - 宿舍环境  
- 老乡  
  - 老乡信息  
  - 老乡毕业学校  
  - 老乡群信息  

2. 通知服务

   可以发布通知，及时通知学生迎新信息。或者对学校的概况进行普及。同时允许各院系针对各院学生进行通知。

3. 接车服务

- 出行提示及到站登记

  提供出行提示，方便新生到达后选择合适的到校方式。

  同时提供预约功能，新生可以预约迎新接送车辆，方便学校统计大致人数。


4. 问卷系统（待定）

   效仿本部，新生进入迎新系统后需要完成招生办设计的调查问卷，后续管理员可以通过导出数据进行数据分析，减少后续发放纸质版再统计的麻烦。

5. 报到流程

   提供报到的流程指示，通过引导的方式（可提供此步到下一步的路线图等信息），方便新生快速完成报到。

6. 迎新核验

   向各院系提供，在迎新核验时候提供学生的核验信息，在核验完成后确认报到。

*Welcome HITers Software Development Team*

W.H.S.D.T.
