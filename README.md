# Laravel 后台生成框架Ying 
## 一个让程序员失业的框架

[欢迎使用YING框架](https://xjke.com/open-source) https://xjke.com/

[入门指南](https://xjke.com/docs/index.html)

### 一.功能:

> 1.自动生成后台管理系统,生产效率提高2000%  
> 2.不用写代码就可以构建网站后台

![Ying框架](https://xjke.com/home/img/open.jpg)

### 二.说明

> 1基于Voyager二次开发  
> 2更符合国人使用习惯  
> 3彻底的中文支持  
> 4新增图像上传表单组件

<hr>

### 三.系统要求

> 1.PHP7.3以上版本  
> 2.Laravel8.0以上版本

> Want to use Laravel 5? Use [Voyager 1.3](https://github.com/the-control-group/voyager/tree/1.3)

### 四.使用

#### 1. 通过Composer安装包

```bash
composer require xindong888/ying
```

#### 2.在(.env)配置文件里配置数据库

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

#### 4.在(.env)配置文件里配置APP_URL

```
APP_URL=http://localhost:8000
```

#### 5. 在终端运行安装命令

> 不生成用户名和密码

```bash
php artisan voyager:install
```

> 生成用户名和密码

```bash
php artisan voyager:install --with-dummy
```

后台访问地址 [http://localhost:8000/admin](http://localhost:8000/admin).

#### 6.后台用户名和密码

> **email:** `admin@admin.com`   
> **password:** `password`

#### 7.分配权限

```bash
php artisan voyager:admin your@email.com
```

#### 8.手动创建用户名和密码
```bash
php artisan voyager:admin your@email.com --create
```

