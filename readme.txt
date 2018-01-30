用composer做项目的步骤：

    1.首先在GitHub中创建项目
    2.然后克隆至本地git中，用编辑器打开
    3.打开命令提示符
    4.进入项目目录中
    4.1例如：
        e:
        cd www-web
        cd composer
    5.初始化composer
        composer init
    6.提示输入GitHub下的项目目录
        Package name (<vendor>/<name>) [jinan/composer]: richcadman/composer

    7.提示输入项目描述
        Description []: a test composer project

    8.提示输入作者信息，格式：Must be in the format: John Smith <john@example.com>
        Author [, n to skip]: Liu <417626953@qq.com>

    9.提示输入引入类库的版本，开发版或者稳定版
        Minimum Stability []: dev

    10.提示输入项目类型
        Package Type (e.g. library, project, metapackage, composer-plugin) []: project

    11.提示输入协议
        License []: MIT

    12.提示输入是否依赖第三方的库
        Would you like to define your dependencies (require) interactively [yes]? yes

    13.提示输入选择的库名：
        Search for a package: hdphp

    14.然后查询出以下类库
        Found 15 packages matching hdphp

           [0] houdunwang/arr
           [1] houdunwang/wechat
           [2] houdunwang/rbac
           [3] houdunwang/crypt
           [4] houdunwang/config
           [5] houdunwang/cart
           [6] houdunwang/hdphp
           [7] houdunwang/zip
           [8] houdunwang/xml
           [9] houdunwang/view
          [10] houdunwang/validate
          [11] houdunwang/tool
          [12] houdunwang/str
          [13] houdunwang/session
          [14] houdunwang/route

    15.提示选择哪个类库：
        Enter package # to add, or the complete package name if it is not listed: 0

    16.提示选择哪个版本：
        Enter the version constraint to require (or leave blank to use the latest versio
        n): *      *号为任意版本

    17.提示在开发模式中是否依赖别的库    回车不选择
        Would you like to define your dev dependencies (require-dev) interactively [yes]?

    18.然后列出composer.json的预览
        {
            "name": "richcadman/composer",
            "description": "a test composer project",
            "type": "project",
            "require": {
                "houdunwang/arr": "*"
            },
            "license": "MIT",
            "authors": [
                {
                    "name": "Liu",
                    "email": "417626953@qq.com"
                }
            ],
            "minimum-stability": "dev"
        }

    19.提示信心确定没问题
        Do you confirm generation [yes]? yes

    20.提示是否把vendor放到忽略列表里面
       Would you like the vendor directory added to your .gitignore [yes]? yes

    21.接下来安装类库包
        composer install

    ////////////////////////////////////////////////////////////////////
    1.从packlist应用商店下载包到本地
        composer create-project richcadman/composer a1 dev-master --prefer-dist
            richcadman/composer ：商店包的位置
            a1                  ：新建本地文件夹并将包保存至此文件夹


