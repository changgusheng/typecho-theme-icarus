<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
return array(
    'general' => array(
        'enable' => '启用',
        'disable' => '不启用',
        'catalog' => '目录',
        'posts' => '文章',
        'categories' => '分类',
        'archives' => '归档',
        'tags' => '标签',
        'toc' => '文章目录',
        'year_tpl' => '%d年',
        'month_tpl' => '%d月',
        'author' => '作者',
        'search' => '搜索',
    ),
    'title' => array(
        'category' => '分类 %s 下的文章',
        'search' => '包含关键字 %s 的文章',
        'tag' => '标签 %s 下的文章',
        'author' => '%s 发布的文章',
        'date' => '%s 发布的文章'
    ),
    'search' => array(
        'title' => '搜索',
    ),
    'article' => array(
        'more' => '阅读更多',
    ),
    'profile' => array(
        'follow' => '关注我',
        'run_days' => '天数',
    ),
    'archive' => array(
        'date_format' => 'Y年 n月',
    ),
    'link' => array(
        'title' => '链接',
    ),
    'recent_post' => array(
        'title' => '最新文章',
    ),
    'back_to_top' => array(
        'title' => '返回顶部',
    ),
    'setting' => array(
        'general' => array(
            'title' => '基本',
            'desc' => '<p><b>注意事项</b></p><ul><li>资源文件的相对路径是指相对于 <code> %s/assets/</code> 目录的相对路径。</li><li>更换主题会导致本主题的设置项丢失。</li></ul>',
            'install_time' => array(
                'title' => '站点建立日期',
                'desc' => '用于计算站点运行时间，显示 Copyright 年份等。格式：2018-12-31',
            ), 
        ),
        'head' => array(
            'title' => '页头',
            'favicon' => array(
                'title' => 'Favicon',
                'desc' => 'Favicon 图标的相对路径或 URL。',
            ),
            'extend' => array(
                'title' => '&lt;head&gt; 标签内追加内容',
            ),
        ),
        'navbar' => array(
            'title' => '导航栏',
            'menu' => array(
                'title' => '菜单',
                'desc' => '导航栏菜单链接。一行一个，格式：<code>链接文字,链接URL</code>',
            ),
            'icons' => array(
                'title' => '图标',
                'desc' => '导航栏右上角图标链接。一行一个，格式：<code>链接文字,链接图标,链接URL</code><br />链接图标请参考 <a href="https://fontawesome.com/icons?d=gallery&m=free" rel="noopener noreferrer" target="_blank">Font Awesome Icons</a>',
            ),
        ),
        'logo' => array(
            'title' => 'Logo',
            'desc' => '站点的 Logo，显示在导航栏最左侧以及页脚左侧。',
            'text' => array(
                'title' => 'Logo 文字',
                'desc' => '留空则显示站点名称。',
            ),
            'img' => array(
                'title' => 'Logo 图片（优先显示）',
                'desc' => 'Logo 图片的相对路径或 URL。',
            ),
        ),
        'post' => array(
            'title' => '文章',
            'excerpt_preserve_tags' => array(
                'title' => '摘要保留样式',
                'options' => array(
                    '0' => '不保留',
                    '1' => '保留',
                ),
                'desc' => '在文章列表中的摘要部分保留原文样式（段落、代码高亮等）',
            ),
            'excerpt_length' => array(
                'title' => '摘要长度',
                'desc' => '指定自动生成的摘要部分的最大长度。参数值为 <code>-1</code> 则不限制最大长度。<br />需要设置 <code>摘要保留样式</code> 为 <code>不保留</code>才能生效。<br />原文中已指定摘要部分时本参数将被忽略（即包含 <code>&lt;!--more--&gt;</code> 标签）',
            ),
        ),
        'search' => array(
            'title' => '搜索',
            'enable' => array(
                'title' => '站内搜索开关',
                'options' => array(
                    '0' => '@general.disable',
                    '1' => '@general.enable',
                ),
            ),
            'type' => array(
                'title' => '搜索引擎',
                'options' => array(
                    'internal' => '内置搜索',
                ),
            ),
        ),
        'aside_common' => array(
            'enable' => array(
                'title' => 'Widget 开关',
                'desc' => '只有启用的 Widget 才会显示在页面中。',
                'options' => array(
                    '0' => '@general.disable',
                    '1' => '@general.enable',
                ),
            ),
            'seq' => array(
                'title' => '顺序',
                'desc' => '输入一个整数以指定本 Widget 在一列中显示的先后顺序，数字越小位置越靠前。',
            ),
            'position' => array(
                'title' => '位置',
                'desc' => '指定本 Widget 显示在左边栏还是右边栏。',
                'options' => array(
                    'left' => '左',
                    'right' => '右',
                ),
            ),
        ),
        'plugin_common' => array(
            'enable' => array(
                'title' => '插件开关',
                'options' => array(
                    '0' => '@general.disable',
                    '1' => '@general.enable',
                ),
            ),
        ),
        'profile' => array(
            'title' => '简介 Widget',
            'desc' => '显示头像、昵称、社交网络链接、博客基本信息等。',
            'author' => array(
                'title' => '作者昵称',
                'desc' => '留空则不显示。',
            ),
            'author_title' => array(
                'title' => '作者头衔',
                'desc' => '实际上是作者昵称的下一行。留空则不显示。',
            ),
            'location' => array(
                'title' => '作者坐标',
                'desc' => '实际上是作者头衔的下一行。留空则不显示。',
            ),
            'avatar' => array(
                'title' => '头像 URL',
                'desc' => '头像图片的相对路径或 URL。留空则显示主题默认头像。',
            ),
            'gravatar' => array(
                'title' => '调用 Gravatar 头像',
                'desc' => '填写你的邮箱，调用 Gravatar 显示邮箱对应的头像。优先于本地头像显示。',
            ),
            'follow_link' => array(
                'title' => '「关注我」按钮链接',
                'desc' => '留空则不显示「关注我」按钮。',
            ),
            'social_links' => array(
                'title' => '社交网络链接',
                'desc' => '留空则不显示。水平排列，一行一个，格式：<code>链接文字,链接图标,链接URL</code><br />链接图标请参考 <a href="https://fontawesome.com/icons?d=gallery&m=free" rel="noopener noreferrer" target="_blank">Font Awesome Icons</a>',
            ),
        ),
        'aside' => array(
            'title' => '侧边栏',
            'left_sticky' => array(
                'title' => '左边栏固定',
                'desc' => '固定左边栏，使其不随页面滚动。',
                'options' => array(
                    '0' => '@general.disable',
                    '1' => '@general.enable',
                ),
            ),
            'right_sticky' => array(
                'title' => '右边栏固定',
                'desc' => '固定右边栏，使其不随页面滚动。',
                'options' => array(
                    '0' => '@general.disable',
                    '1' => '@general.enable',
                ),
            ),
            'left_post_hide' => array(
                'title' => '左边栏文章页隐藏',
                'desc' => '在文章和独立页面隐藏左边栏。',
                'options' => array(
                    '0' => '@general.disable',
                    '1' => '@general.enable',
                ),
            ),
            'right_post_hide' => array(
                'title' => '右边栏文章页隐藏',
                'desc' => '在文章和独立页面隐藏右边栏。',
                'options' => array(
                    '0' => '@general.disable',
                    '1' => '@general.enable',
                ),
            ),
        ),
        'archive' => array(
            'title' => '归档 Widget',
            'desc' => '显示按月份列出的归档链接。',
        ),
        'category' => array(
            'title' => '分类 Widget',
            'desc' => '列出各个分类及其子分类。',
        ),
        'link' => array(
            'title' => '链接 Widget',
            'desc' => '显示指定链接。',
            'links' => array(
                'title' => '链接',
                'desc' => '显示在 Widget 中的链接。一行一个，格式：<code>链接文字,链接URL</code>',
            ),
        ),
        'recent_post' => array(
            'title' => '最新文章 Widget',
            'desc' => '列出指定数目的最新文章。',
            'limit' => array(
                'title' => '数目',
                'desc' => '最多显示的文章数。留空或非正数则默认为显示5篇。',
            ),
            'thumbnail' => array(
                'title' => '缩略图',
                'desc' => '在文章标题旁显示缩略图。',
                'options' => array(
                    '0' => '@general.disable',
                    '1' => '@general.enable',
                ),
            ),
        ),
        'tag' => array(
            'title' => '标签 Widget',
            'limit' => array(
                'title' => '数目',
                'desc' => '最多显示的标签数。为0则显示所有标签。负数或为空默认为显示20个。',
            ),
        ),
        'toc' => array(
            'title' => 'TOC Widget',
            'desc' => 'Table of Contents：文章目录',
        ),
        'footer' => array(
            'title' => '页脚',
            'links' => array(
                'title' => '链接',
                'desc' => '显示在页脚的链接。一行一个，格式：<code>链接文字,链接图标,链接URL</code><br />链接图标请参考 <a href="https://fontawesome.com/icons?d=gallery&m=free" rel="noopener noreferrer" target="_blank">Font Awesome Icons</a>',
            ),
            'content_left' => array(
                'title' => '页脚左侧追加内容',
                'desc' => '显示位置在 Copyright 以后。',
            ),
            'scripts' => array(
                'title' => '页末追加脚本',
                'desc' => '用于在页面末尾追加统计脚本等不可见内容。',
            ),
        ),
        'moment' => array(
            'title' => 'Moment 插件',
            'desc' => '将具体的时间（如：2018-12-31）转换为更人性化的显示格式（如：1小时前）',
        ),
        'animejs' => array(
            'title' => 'Animejs 插件',
            'desc' => '为页面添加动画效果。',
        ),
        'highlight' => array(
            'title' => 'highlight.js 插件',
            'desc' => '提供代码高亮功能。',
            'theme' => array(
                'title' => '主题名称',
                'desc' => '可以选用的主题名称请参考 <a href="https://highlightjs.org/static/demo/" rel="noreferrer noopener" target="_blank">highlight.js demo</a><br />默认主题：<code>atom-one-light</code>',
            ),
        ),
        'back_to_top' => array(
            'title' => '返回顶部插件',
            'desc' => '显示一个「返回顶部」按钮。',
        ),
        'clipboard'  => array(
            'title' => '剪贴板插件',
            'desc' => '在代码块上提供一个「复制」按钮。',
        ),
        'gallery' => array(
            'title' => 'Gallery 插件',
            'desc' => '利用 lightGallery 提供单张图片的灯箱效果，以及 Justified Gallery 实现图集显示。<br />图集调用方式：使用下述标签包围多张图片作为一个图集进行显示。<code>[gallery]</code><code>[/gallery]</code>',
        ),
        'mathjax' => array(
            'title' => 'Mathjax 插件（施工中）',
            'desc' => '提供数学公式显示支持。修改 <code>assets/js/mathjax.js</code> 文件以进行具体配置。',
        ),
        'outdated_browser' => array(
            'title' => 'Outdated Browser 插件（施工中）',
            'desc' => '向使用过时的浏览器的用户显示一个友好的提示。',
        ),
        'progressbar' => array(
            'title' => '进度条插件',
            'desc' => '在页面顶部显示一个加载进度条。',
        ),
    ),
    'fields' => array(
        'thumbnail' => array(
            'title' => '缩略图 URL',
            'desc' => '文章缩略图的 URL。缩略图会显示在文章列表、文章正文页以及最新文章 Widget 中。',
        ),
    ),
);