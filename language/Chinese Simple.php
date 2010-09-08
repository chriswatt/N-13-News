<?php
/***********************************************************************
  N-13 News is a free news publishing system
  Copyright (C) 2010 Chris Watt
  
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.
  
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.
  
  You should have received a copy of the GNU General Public License
  along with this program.If not, see <http://www.gnu.org/licenses/>.
***********************************************************************/

#########################################################
#                                                       #
#   N-13 News Language File                             #
#   LANGUAGE    Chinese Simplified                      #
#   VERSION     4.0                                     #
#   AUTHOR      chris@network-13.com                    #
#                                                       #
#   Any words you see wrapped in { } braces,            #
#   for example {totalnews} need to be left like that.  #
#                                                       #
#########################################################

global $langmsg;
$langmsg = array();

$langmsg['menu'][0] = x("添加新闻");
$langmsg['menu'][1] = x("编辑新闻");
$langmsg['menu'][2] = x("档案");
$langmsg['menu'][3] = x("新的消息");
$langmsg['menu'][4] = x("收件箱");
$langmsg['menu'][5] = x("发件箱");
$langmsg['menu'][6] = x("帐户");
$langmsg['menu'][7] = x("访问级别");
$langmsg['menu'][8] = x("禁止IP地址");
$langmsg['menu'][9] = x("分类");
$langmsg['menu'][10] = x("图片上传");
$langmsg['menu'][11] = x("帐号资料");
$langmsg['menu'][12] = x("个人资料");
$langmsg['menu'][13] = x("RSS订阅");
$langmsg['menu'][14] = x("表情符号");
$langmsg['menu'][15] = x("系统");
$langmsg['menu'][16] = x("模板");
$langmsg['menu'][17] = x("词汇过滤器");
$langmsg['menu'][18] = x("控制台主页");
$langmsg['menu'][19] = x("新闻");
$langmsg['menu'][20] = x("邮件");
$langmsg['menu'][21] = x("选项");
$langmsg['menu'][22] = x("帮助");
$langmsg['menu'][23] = x("登出");
$langmsg['menu'][24] = x("文件上传");


$langmsg['home'][0] = x("全站新闻统计如下。");
$langmsg['home'][1] = x("欢迎");
$langmsg['home'][2] = x("PHP的设置'选项magic_quotes_gpc'已被检测为启用。它建议您禁用此设置。");
$langmsg['home'][3] = x("PHP的设置'register_globals的'已被检测为启用。它建议您禁用此，因为它可能会导致安全问题和错误的发生。");
$langmsg['home'][4] = x("探测到install.php。请删除这个文件。");
$langmsg['home'][5] = x("install.php不能删除，请手动删除这个文件");
$langmsg['home'][6] = x("总新闻：");
$langmsg['home'][7] = x("总评论：");
$langmsg['home'][8] = x("总用户：");
$langmsg['home'][9] = x("总表情符号：");
$langmsg['home'][10] = x("总过滤器：");
$langmsg['home'][11] = x("总分类：");
$langmsg['home'][12] = x("总模板：");
$langmsg['home'][13] = x("总访问级别：");
$langmsg['home'][14] = x("连接到数据库：");
$langmsg['home'][15] = x("优化所有表：");
$langmsg['home'][16] = x("目前版本：");
$langmsg['home'][17] = x("最新版本：");
$langmsg['home'][18] = x("查看访问日志");
$langmsg['home'][19] = x("查询时间：");
$langmsg['home'][20] = x("未读邮件");
$langmsg['home'][21] = x("尝试自动删除这个文件夹？");
$langmsg['home'][22] = x("秒");
$langmsg['home'][23] = x("总图片");
$langmsg['home'][24] = x("总文件");
$langmsg['home'][25] = x("总 RSS订阅");


$langmsg['addnews'][0] = x("新闻预览");
$langmsg['addnews'][1] = x("请输入标题");
$langmsg['addnews'][2] = x("这则新闻允许评论吗？请选择");
$langmsg['addnews'][3] = x("添加新闻");
$langmsg['addnews'][4] = x("请选择类别");


$langmsg['editnews'][0] = x("编辑新闻");
$langmsg['editnews'][1] = x("显示");
$langmsg['editnews'][2] = x("选项");
$langmsg['editnews'][3] = x("显示数量");
$langmsg['editnews'][4] = x("排序方式");
$langmsg['editnews'][5] = x("排列");
$langmsg['editnews'][7] = x("标题");
$langmsg['editnews'][8] = x("作者");
$langmsg['editnews'][9] = x("分类");
$langmsg['editnews'][10] = x("日期");
$langmsg['editnews'][11] = x("批准");
$langmsg['editnews'][12] = x("评论");
$langmsg['editnews'][13] = x("[显示]");
$langmsg['editnews'][14] = x("核准");
$langmsg['editnews'][15] = x("未经批准");
$langmsg['editnews'][16] = x("新闻已储存");
$langmsg['editnews'][17] = x("选择的帖子已删除。");
$langmsg['editnews'][18] = x("选择的帖子已更新。");
$langmsg['editnews'][19] = x("新闻更新。");
$langmsg['editnews'][20] = x("禁用");
$langmsg['editnews'][21] = x("文章。");
$langmsg['editnews'][22] = x("总数。");
$langmsg['editnews'][23] = x("把选定的文章浏览计数器重置为0");
$langmsg['editnews'][24] = x("把选定的文章评级重置");
$langmsg['editnews'][25] = x("以分类过滤");


$langmsg['newsform'][0] = x("添加您的新闻发布如下。");
$langmsg['newsform'][1] = x("标题：");
$langmsg['newsform'][2] = x("分类：");
$langmsg['newsform'][3] = x("摘要：");
$langmsg['newsform'][4] = x("文章：");
$langmsg['newsform'][5] = x("禁用HTML");
$langmsg['newsform'][6] = x("启用HTML");
$langmsg['newsform'][7] = x("评论：");
$langmsg['newsform'][8] = x("切换日期");
$langmsg['newsform'][9] = x("切换到摘要");
$langmsg['newsform'][16] = x("日期：");
$langmsg['newsform'][17] = x("切换存档");
$langmsg['newsform'][18] = x("这文章永不存档");
$langmsg['newsform'][19] = x("文件上传");
$langmsg['newsform'][20] = x("下载");
$langmsg['newsform'][21] = x("上传");
$langmsg['newsform'][22] = x("文章");
$langmsg['newsform'][23] = x("输入图片的网址");
$langmsg['newsform'][24] = x("插入");
$langmsg['newsform'][25] = x("选择上传的图像");


$langmsg['editcomments'][0] = x("编辑评论");
$langmsg['editcomments'][1] = x("编辑评论如下。");
$langmsg['editcomments'][2] = x("作者：");
$langmsg['editcomments'][3] = x("电子邮件：");
$langmsg['editcomments'][4] = x("留言：");
$langmsg['editcomments'][5] = x("评论更新。");
$langmsg['editcomments'][6] = x("评论删除。");
$langmsg['editcomments'][7] = x("评论更新。");
$langmsg['editcomments'][8] = x("评论总数。");
$langmsg['editcomments'][9] = x("消息");
$langmsg['editcomments'][10] = x("日期");
$langmsg['editcomments'][11] = x("批准");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("核准");
$langmsg['editcomments'][14] = x("未经批准");
$langmsg['editcomments'][15] = x("位置：");


$langmsg['privmsgs'][0] = x("私人信息");
$langmsg['privmsgs'][1] = x("收件箱");
$langmsg['privmsgs'][2] = x("发件箱");
$langmsg['privmsgs'][3] = x("新的消息");
$langmsg['privmsgs'][4] = x("你有");
$langmsg['privmsgs'][5] = x("标题");
$langmsg['privmsgs'][6] = x("自");
$langmsg['privmsgs'][7] = x("已发送");
$langmsg['privmsgs'][8] = x("至");
$langmsg['privmsgs'][9] = x("回复此邮件");
$langmsg['privmsgs'][10] = x("新的私人信息。");
$langmsg['privmsgs'][11] = x("发送至：");
$langmsg['privmsgs'][12] = x("标题：");
$langmsg['privmsgs'][13] = x("留言：");
$langmsg['privmsgs'][14] = x("例如'user1的，用户2，user3'");
$langmsg['privmsgs'][15] = x("邮件预览。");
$langmsg['privmsgs'][16] = x("消息发送到下列用户。");
$langmsg['privmsgs'][17] = x("请输入发送此邮件的用户。");
$langmsg['privmsgs'][18] = x("请输入此消息标题。");
$langmsg['privmsgs'][19] = x("请输入一个讯息。");
$langmsg['privmsgs'][20] = x("邮件删除。");
$langmsg['privmsgs'][21] = x("未读邮件。");
$langmsg['privmsgs'][22] = x("邮件总数。");


$langmsg['options'][0] = x("选项");
$langmsg['options'][1] = x("新");
$langmsg['options'][2] = x("编辑");


$langmsg['bannedips'][0] = x("禁止IP地址");
$langmsg['bannedips'][1] = x("禁止IP地址。");
$langmsg['bannedips'][2] = x("IP地址");
$langmsg['bannedips'][3] = x("数额次拦截");
$langmsg['bannedips'][4] = x("添加一个新的IP地址。");
$langmsg['bannedips'][5] = x("禁止讯息。 （可使用HTML）");
$langmsg['bannedips'][6] = x("IP地址：");
$langmsg['bannedips'][7] = x("该IP地址已被禁止。");
$langmsg['bannedips'][8] = x("IP地址被禁止。");
$langmsg['bannedips'][9] = x("IP地址删除。");
$langmsg['bannedips'][10] = x("IP地址已重置。");
$langmsg['bannedips'][11] = x("禁止的信息已更新。");


$langmsg['cats'][0] = x("分类");
$langmsg['cats'][1] = x("分类。");
$langmsg['cats'][2] = x("名字");
$langmsg['cats'][3] = x("文章");
$langmsg['cats'][4] = x("创建一个新的类别。");
$langmsg['cats'][5] = x("名称：");
$langmsg['cats'][6] = x("以下类别已被删除：");
$langmsg['cats'][7] = x("请选择其他名称。");
$langmsg['cats'][8] = x("分类创建。");
$langmsg['cats'][9] = x("分类更新。");
$langmsg['cats'][10] = x("编辑您的类别如下。");
$langmsg['cats'][11] = x("图片");
$langmsg['cats'][12] = x("文件");
$langmsg['cats'][13] = x("该类别名称已经存在，请选择另一个。");


$langmsg['img'][0] = x("图片上传");
$langmsg['img'][1] = x("上传新图片");
$langmsg['img'][2] = x("上传文件");
$langmsg['img'][3] = x("图片共");
$langmsg['img'][4] = x("选择图片：");
$langmsg['img'][5] = x("图片已删除。");
$langmsg['img'][6] = x("图片上传");
$langmsg['img'][7] = x("有一个错误上传文件，请再试一次。");
$langmsg['img'][8] = x("无效的文件扩展名。");
$langmsg['img'][9] = x("无效的图片。");
$langmsg['img'][10] = x("从图像中删除类别。");
$langmsg['img'][11] = x("图片添加到类别。");
$langmsg['img'][12] = x("文件名：");
$langmsg['img'][13] = x("选择一个类别：");
$langmsg['img'][14] = x("编辑图像");
$langmsg['img'][15] = x("标题：");
$langmsg['img'][16] = x("描述：");
$langmsg['img'][17] = x("更新图片");
$langmsg['img'][18] = x("无效的图片");
$langmsg['img'][19] = x("图片更新");
$langmsg['img'][20] = x("缩略图");
$langmsg['img'][21] = x("详细信息");
$langmsg['img'][22] = x("分类：");
$langmsg['img'][23] = x("文件名");
$langmsg['img'][24] = x("文件大小");
$langmsg['img'][25] = x("上传");
$langmsg['img'][26] = x("网址");
$langmsg['img'][27] = x("添加到类别");
$langmsg['img'][28] = x("从类别中删除");
$langmsg['img'][29] = x("上传图片");
$langmsg['img'][30] = x("已有相同名称的文件。");
$langmsg['img'][31] = x("所有类别");
$langmsg['img'][32] = x("无法写入上传目录。请把上传目录权限设为 777");


$langmsg['personal'][0] = x("个人选项");
$langmsg['personal'][1] = x("修改您的帐户信息如下。");
$langmsg['personal'][2] = x("个人设置");
$langmsg['personal'][3] = x("头像：");
$langmsg['personal'][4] = x("电邮地址：");
$langmsg['personal'][5] = x("消息提醒：");
$langmsg['personal'][6] = x("初始登录时显示未读邮件通知？");
$langmsg['personal'][7] = x("新密码：");
$langmsg['personal'][8] = x("（如不更改请留空）");
$langmsg['personal'][9] = x("确认密码：");
$langmsg['personal'][10] = x("必须输入电子邮件地址。");
$langmsg['personal'][11] = x("设置更新。");
$langmsg['personal'][12] = x("密码不匹配。");
$langmsg['personal'][13] = x("启用所见即所得的编辑器？");


$langmsg['login'][0] = x("请登录");
$langmsg['login'][1] = x("名称：");
$langmsg['login'][2] = x("密码：");
$langmsg['login'][3] = x("忘记密码？");
$langmsg['login'][4] = x("记住我");
$langmsg['login'][5] = x("安全密钥：");
$langmsg['login'][6] = x("登入");
$langmsg['login'][7] = x("无效的安全密钥");
$langmsg['login'][8] = x("无效的名称或密码");
$langmsg['login'][9] = x("输入以下文字");


$langmsg['profile'][0] = x("编辑个人资料");
$langmsg['profile'][1] = x("编辑您的个人资料如下。");
$langmsg['profile'][2] = x("名称：");
$langmsg['profile'][3] = x("年龄：");
$langmsg['profile'][4] = x("位置：");
$langmsg['profile'][5] = x("性别：");
$langmsg['profile'][6] = x("资料图片：");
$langmsg['profile'][7] = x("网址：");
$langmsg['profile'][8] = x("爱好：");
$langmsg['profile'][9] = x("兴趣：");
$langmsg['profile'][10] = x("职业：");
$langmsg['profile'][11] = x("最喜爱的金句：");
$langmsg['profile'][12] = x("男性");
$langmsg['profile'][13] = x("女性");
$langmsg['profile'][14] = x("资料更新。");
$langmsg['profile'][15] = x("无");


$langmsg['accounts'][0] = x("帐户");
$langmsg['accounts'][1] = x("帐户。");
$langmsg['accounts'][2] = x("用户名");
$langmsg['accounts'][3] = x("访问级别");
$langmsg['accounts'][4] = x("文章");
$langmsg['accounts'][5] = x("评论数");
$langmsg['accounts'][6] = x("创建一个新帐户。");
$langmsg['accounts'][7] = x("帐户名称：");
$langmsg['accounts'][8] = x("电子邮件：");
$langmsg['accounts'][9] = x("新密码：");
$langmsg['accounts'][10] = x("确认密码：");
$langmsg['accounts'][11] = x("访问级别：");
$langmsg['accounts'][12] = x("新帐户。");
$langmsg['accounts'][13] = x("编辑帐户如下。");
$langmsg['accounts'][14] = x("电子邮件地址必须输入。");
$langmsg['accounts'][15] = x("帐户更新。");
$langmsg['accounts'][16] = x("密码不匹配。");
$langmsg['accounts'][17] = x("帐户名称必须输入。");
$langmsg['accounts'][18] = x("帐户名称已存在。请选择其他。");
$langmsg['accounts'][19] = x("必须输入密码。");
$langmsg['accounts'][20] = x("帐户已创建。");
$langmsg['accounts'][21] = x("下列帐户已被删除：");
$langmsg['accounts'][22] = x("您不能删除自己的帐户。");
$langmsg['accounts'][23] = x("（如不更改请保留空白）");
$langmsg['accounts'][24] = x("已有一个帐户使用该电子邮件地址，请选择另一个。");
$langmsg['accounts'][25] = x("请输入一个帐户名称");
$langmsg['accounts'][26] = x("档");
$langmsg['accounts'][27] = x("图片");


$langmsg['access'][0] = x("访问级别");
$langmsg['access'][1] = x("创建一个新的访问级别。");
$langmsg['access'][2] = x("名称：");
$langmsg['access'][3] = x("该访问级别可以访问哪些部分？");
$langmsg['access'][4] = x("帐户：");
$langmsg['access'][5] = x("访问级别：");
$langmsg['access'][6] = x("禁止IP地址：");
$langmsg['access'][7] = x("分类：");
$langmsg['access'][8] = x("评论：");
$langmsg['access'][9] = x("说明：");
$langmsg['access'][10] = x("图片上传：");
$langmsg['access'][11] = x("新闻：");
$langmsg['access'][12] = x("个人选项：");
$langmsg['access'][13] = x("私人讯息：");
$langmsg['access'][14] = x("简介：");
$langmsg['access'][15] = x("RSS订阅：");
$langmsg['access'][16] = x("表情符号：");
$langmsg['access'][17] = x("系统配置：");
$langmsg['access'][18] = x("模板：");
$langmsg['access'][19] = x("词汇过滤器：");
$langmsg['access'][20] = x("此访问级别可以使用哪些类别？");
$langmsg['access'][21] = x("所有：");
$langmsg['access'][22] = x("此访问级别可编辑哪些帖子？");
$langmsg['access'][23] = x("管理员（全部）：");
$langmsg['access'][24] = x("编辑（自己+会员）：");
$langmsg['access'][25] = x("会员（自己的）：");
$langmsg['access'][26] = x("此访问级别的帖子是否自动批准？");
$langmsg['access'][27] = x("此访问级别可以批准帖子吗？");
$langmsg['access'][28] = x("此访问级别可以使用HTML？");
$langmsg['access'][29] = x("允许张贴而不必选择一个类别？");
$langmsg['access'][30] = x("访问级别删除：");
$langmsg['access'][31] = x("下列访问级别并没有被删除，因为有1个或多个帐户分配到该级别：");
$langmsg['access'][32] = x("编辑以下访问级别。");
$langmsg['access'][33] = x("请输入此访问级别名称。");
$langmsg['access'][34] = x("访问级别已更新。");
$langmsg['access'][35] = x("该访问级别名称已经存在，请选择另一个。");
$langmsg['access'][36] = x("请选择此访问级别可以编辑哪些帖子。");
$langmsg['access'][37] = x("请选择，如果这访问级别发出的帖子是否可自动获得批准。");
$langmsg['access'][38] = x("请选择，如果这访问级别可以批准帖子");
$langmsg['access'][39] = x("请选择，如果此访问级别可以使用HTML");
$langmsg['access'][40] = x("请选择，如果此访问级别能不选择帖子的类别");
$langmsg['access'][41] = x("访问级别已创建。");
$langmsg['access'][42] = x("访问级别。");
$langmsg['access'][43] = x("名字");
$langmsg['access'][44] = x("访问");
$langmsg['access'][45] = x("帐户");
$langmsg['access'][46] = x("会员");
$langmsg['access'][47] = x("编辑");
$langmsg['access'][48] = x("管理员");
$langmsg['access'][49] = x("文件上传");
$langmsg['access'][50] = x("此访问级别可以查看用户的IP地址？");
$langmsg['access'][51] = x("此访问级别可以编辑哪些文件和图像？");
$langmsg['access'][52] = x("自己的");
$langmsg['access'][53] = x("全部");



$langmsg['accesslogs'][0] = x("访问日志");
$langmsg['accesslogs'][1] = x("用户名");
$langmsg['accesslogs'][2] = x("尝试");
$langmsg['accesslogs'][3] = x("IP地址");
$langmsg['accesslogs'][4] = x("日期");
$langmsg['accesslogs'][5] = x("访问日志");
$langmsg['accesslogs'][6] = x("成功");
$langmsg['accesslogs'][7] = x("失败");


$langmsg['filters'][0] = x("词汇过滤器");
$langmsg['filters'][1] = x("过滤器已添加。");
$langmsg['filters'][2] = x("过滤器已删除。");
$langmsg['filters'][3] = x("评论内容中，以下词汇会被过滤。");
$langmsg['filters'][4] = x("筛选字");
$langmsg['filters'][5] = x("替换为");
$langmsg['filters'][6] = x("删除");
$langmsg['filters'][7] = x("添加新的过滤器");


$langmsg['rss'][0] = x("RSS订阅");
$langmsg['rss'][1] = x("编辑以下您的RSS设置");
$langmsg['rss'][2] = x("这一消息显示的位置，例如http://yourdomain.com/或http://yourdomain.com /index");
$langmsg['rss'][3] = x("RSS Feed名称：");
$langmsg['rss'][4] = x("新闻位置：");
$langmsg['rss'][5] = x("您的RSS标题：");
$langmsg['rss'][6] = x("你的RSS说明：");
$langmsg['rss'][7] = x("字符编码：");
$langmsg['rss'][8] = x("语言：");
$langmsg['rss'][9] = x("显示的帖子量：");
$langmsg['rss'][10] = x("0 =所有");
$langmsg['rss'][11] = x("分类显示：");
$langmsg['rss'][12] = x("显示没有指定类别的帖子吗？");
$langmsg['rss'][13] = x("的RSS代码：");
$langmsg['rss'][14] = x("编辑如何显示您的方式");
$langmsg['rss'][15] = x("显示文章标题。");
$langmsg['rss'][16] = x("显示文章摘要。");
$langmsg['rss'][17] = x("显示内文。");
$langmsg['rss'][18] = x("显示帖子所属的类别。");
$langmsg['rss'][19] = x("显示个别帖子的网址。");
$langmsg['rss'][20] = x("显示帖子的及表日期。");
$langmsg['rss'][21] = x("显示时区设置。");
$langmsg['rss'][22] = x("显示每个帖子的发表时间。");
$langmsg['rss'][23] = x("显示文章作者。");
$langmsg['rss'][24] = x("显示用户的头像，如果他们有一个。");
$langmsg['rss'][25] = x("显示每则文章的ID。");
$langmsg['rss'][26] = x("显示每则新闻的评论数量。");
$langmsg['rss'][27] = x("请输入feedname");
$langmsg['rss'][28] = x("请输入新闻位置");
$langmsg['rss'][29] = x("请输入标题");
$langmsg['rss'][30] = x("请输入说明");
$langmsg['rss'][31] = x("请输入字符编码");
$langmsg['rss'][32] = x("请输入语言");
$langmsg['rss'][33] = x("请输入要显示的数量");
$langmsg['rss'][34] = x("创建RSS提要");
$langmsg['rss'][35] = x("该名称的RSS Feed已经存在，请选择");
$langmsg['rss'][36] = x("RSS提要已更新");
$langmsg['rss'][37] = x("RSS订阅");
$langmsg['rss'][38] = x("RSS提要已删除。");
$langmsg['rss'][39] = x("名字");
$langmsg['rss'][40] = x("分类");
$langmsg['rss'][41] = x("网址");
$langmsg['rss'][42] = x("创建一个新的RSS Feed。");
$langmsg['rss'][43] = x("显示文章友好的标题");


$langmsg['smilies'][0] = x("表情符号");
$langmsg['smilies'][1] = x("适用于如果您想一次过更新所有表情符号的位置。");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("替换：");
$langmsg['smilies'][4] = x("替换为：");
$langmsg['smilies'][5] = x("所有的路径已更新。");
$langmsg['smilies'][6] = x("创建一个新的表情符号");
$langmsg['smilies'][7] = x("路径：");
$langmsg['smilies'][8] = x("键码：");
$langmsg['smilies'][9] = x("请输入表情符号的路径。");
$langmsg['smilies'][10] = x("请输入这表情符号的键码。");
$langmsg['smilies'][11] = x("键码已在使用。请选择一个不同的键码。");
$langmsg['smilies'][12] = x("表情符号已加入。");
$langmsg['smilies'][13] = x("您确定要删除此表情符号？");
$langmsg['smilies'][14] = x("表情符号已删除。");
$langmsg['smilies'][15] = x("编辑以下的表情符号");
$langmsg['smilies'][16] = x("表情符号：");
$langmsg['smilies'][17] = x("表情符号已更新。");
$langmsg['smilies'][18] = x("表情符号已删除");
$langmsg['smilies'][19] = x("请选择你要修改的表情符号。");
$langmsg['smilies'][20] = x("表情符号");
$langmsg['smilies'][21] = x("插入一个新的表情符号。");
$langmsg['smilies'][22] = x("更新所有表情符号的路径");


$langmsg['system'][0] = x("系统配置");
$langmsg['system'][1] = x("修改系统配置。");
$langmsg['system'][2] = x("新闻");
$langmsg['system'][3] = x("每页新闻 (则)：");
$langmsg['system'][4] = x("新闻显示顺序：");
$langmsg['system'][5] = x("降序");
$langmsg['system'][6] = x("升序");
$langmsg['system'][7] = x("新闻的日期和时间格式：");
$langmsg['system'][8] = x("看这里");
$langmsg['system'][9] = x("显示头像：");
$langmsg['system'][10] = x("显示不同类别新闻时的分隔符：");
$langmsg['system'][11] = x("评论");
$langmsg['system'][12] = x("每页评论 (则)：");
$langmsg['system'][13] = x("评论排序：");
$langmsg['system'][14] = x("评论的日期和时间格式：");
$langmsg['system'][15] = x("评论的最大长度：");
$langmsg['system'][16] = x("在新视窗查看评论：");
$langmsg['system'][17] = x("张贴评论后延时（垃圾邮件防护）：");
$langmsg['system'][18] = x("秒");
$langmsg['system'][19] = x("垃圾邮件：");
$langmsg['system'][20] = x("新评论信息：");
$langmsg['system'][21] = x("新评论批准信息：");
$langmsg['system'][22] = x("评论表格上使用影像验证：");
$langmsg['system'][23] = x("友好的URL");
$langmsg['system'][24] = x("启用友好的网址：");
$langmsg['system'][25] = x("文件扩展名：");
$langmsg['system'][26] = x("前缀：");
$langmsg['system'][27] = x("目录文件名：");
$langmsg['system'][28] = x("注册");
$langmsg['system'][29] = x("允许用户注册：");
$langmsg['system'][30] = x("访问级别为新用户：");
$langmsg['system'][31] = x("其他");
$langmsg['system'][32] = x("时区：");
$langmsg['system'][33] = x("允许上传文件类型的图片：");
$langmsg['system'][34] = x("图片上传路径：");
$langmsg['system'][35] = x("没有访问错误信息：");
$langmsg['system'][36] = x("设置更新。");
$langmsg['system'][37] = x("延时使用后发送到（垃圾邮件防护）：");
$langmsg['system'][38] = x("通知");
$langmsg['system'][39] = x("有新评论时发送电子邮件通知：");
$langmsg['system'][40] = x("有新注册时发送电子邮件通知：");
$langmsg['system'][41] = x("只允许注册用户评论：");
$langmsg['system'][42] = x("发送通知给这个邮件地址：");
$langmsg['system'][43] = x("允许上传文件类型：");
$langmsg['system'][44] = x("获得电子邮件通知未经批准的新闻员额：");
$langmsg['system'][45] = x("公共密钥");
$langmsg['system'][46] = x("私人密钥");
$langmsg['system'][47] = x("脚本的路径");
$langmsg['system'][48] = x("允许注册用户删除自己的意见：");
$langmsg['system'][49] = x("使用影像验证该指数登录表单：");
$langmsg['system'][50] = x("登记表格上使用影像验证：");
$langmsg['system'][51] = x("文件的日期和时间格式：");
$langmsg['system'][52] = x("在新闻下方显示'技术支持'：");


$langmsg['recover'][0] = x("密码恢复");
$langmsg['recover'][1] = x("输入您要重置密码的帐户的电子邮件地址。");
$langmsg['recover'][2] = x("电子邮件：");
$langmsg['recover'][3] = x("您或有人要求重新设置密码，请按以下的链接开始。");
$langmsg['recover'][4] = x("按此重置密码");
$langmsg['recover'][5] = x("一封电子邮件已经发送到");
$langmsg['recover'][6] = x("没有使用此电子邮件的帐户，请联系管理员。");
$langmsg['recover'][7] = x("新密码");
$langmsg['recover'][8] = x("请输入您的新密码。");
$langmsg['recover'][9] = x("无法发送密码恢复电子邮件，请与系统管理员联系。");
$langmsg['recover'][10] = x("确认密码：");
$langmsg['recover'][11] = x("密码不匹配。");
$langmsg['recover'][12] = x("您的密码已更新。");
$langmsg['recover'][13] = x("进一步指示检索您的帐户。");


$langmsg['templates'][0] = x("模板");
$langmsg['templates'][1] = x("创建一个新的模板。");
$langmsg['templates'][2] = x("名称：");
$langmsg['templates'][3] = x("改变新闻显示方式。");
$langmsg['templates'][4] = x("显示文章标题。");
$langmsg['templates'][5] = x("显示文章摘要。");
$langmsg['templates'][6] = x("显示内文。");
$langmsg['templates'][7] = x("显示文章发表日期。");
$langmsg['templates'][8] = x("显示每个帖子所属类别。");
$langmsg['templates'][9] = x("显示文章作者。");
$langmsg['templates'][10] = x("显示用户的头像，如果他们有一个。");
$langmsg['templates'][11] = x("显示每篇文章的ID。");
$langmsg['templates'][12] = x("显示作者的IP地址。（只在登录后才显示）");
$langmsg['templates'][13] = x("显示阅读全文链接");
$langmsg['templates'][14] = x("将会显示您的电子邮件地址。");
$langmsg['templates'][15] = x("将会创建一个链接到您的电子邮件地址。");
$langmsg['templates'][16] = x("将会创建一个链接到您的个人资料。");
$langmsg['templates'][17] = x("显示每则新闻的评论数量。");
$langmsg['templates'][18] = x("将会创建一个链接到评论。");
$langmsg['templates'][19] = x("在登录后，于此标签之间显示的资料");
$langmsg['templates'][20] = x("表情符号路径");
$langmsg['templates'][21] = x("评论");
$langmsg['templates'][22] = x("更改显示评论的方式。");
$langmsg['templates'][23] = x("显示评论作者。");
$langmsg['templates'][24] = x("显示的信息。");
$langmsg['templates'][25] = x("显示用户的头像，如果他们有一个。");
$langmsg['templates'][26] = x("显示作者的IP地址。 （只在登录后才显示）");
$langmsg['templates'][27] = x("显示每个评论的ID。");
$langmsg['templates'][28] = x("显示评论者的电子邮件地址。");
$langmsg['templates'][29] = x("将会创建一个链接到用户的电子邮件。");
$langmsg['templates'][30] = x("显示发表评论的日期。");
$langmsg['templates'][31] = x("在登录后，于此标签之间显示的资料");
$langmsg['templates'][32] = x("评论表格");
$langmsg['templates'][33] = x("请注意，编辑时请确保表格栏位的名称和ID不变，否则将无法运作。还要注意onsubmit属性中，useajax = ''，yes 代表使用 ajax 提交评论，no 则否。");
$langmsg['templates'][34] = x("显示文章ID。");
$langmsg['templates'][35] = x("显示类别ID。");
$langmsg['templates'][36] = x("登录后显示你的帐户名称");
$langmsg['templates'][37] = x("登录后显示你的电子邮件");
$langmsg['templates'][38] = x("将会显示消息。");
$langmsg['templates'][39] = x("将会显示所有的表情符号。");
$langmsg['templates'][40] = x("新闻分页");
$langmsg['templates'][44] = x("评论分页");
$langmsg['templates'][45] = x("显示前页链接，如有。");
$langmsg['templates'][46] = x("显示下页链接，如有。");
$langmsg['templates'][47] = x("将显示网页数量，例如：1 2 3 4。");
$langmsg['templates'][48] = x("个人资料");
$langmsg['templates'][49] = x("修改个人资料显示方式。");
$langmsg['templates'][50] = x("显示用户的帐户名称。");
$langmsg['templates'][51] = x("显示用户的名称。");
$langmsg['templates'][52] = x("显示用户的年龄。");
$langmsg['templates'][53] = x("显示用户的位置。");
$langmsg['templates'][54] = x("显示用户的性别。");
$langmsg['templates'][55] = x("创建一个链接到用户的主页。");
$langmsg['templates'][56] = x("显示用户的喜好。");
$langmsg['templates'][57] = x("显示用户的兴趣。");
$langmsg['templates'][58] = x("显示用户的职业。");
$langmsg['templates'][59] = x("显示用户喜爱的金句。");
$langmsg['templates'][60] = x("显示用户的个人资料图片。");
$langmsg['templates'][61] = x("新闻结构");
$langmsg['templates'][62] = x("在这里，您可以控制每则新闻各元素显示顺序，例如，如果您希望在新闻上方及下方显示分页，可在此设定。");
$langmsg['templates'][63] = x("显示新闻。");
$langmsg['templates'][64] = x("显示分页。");
$langmsg['templates'][65] = x("评论结构");
$langmsg['templates'][66] = x("在这里，您可以控制阅读评论时，每则新闻各元素显示顺序，例如，如果您希望在新闻上方及下方显示分页，可在此设定。");
$langmsg['templates'][67] = x("当阅读评论时显示单一新闻");
$langmsg['templates'][68] = x("显示您的意见。");
$langmsg['templates'][69] = x("显示评论分页。");
$langmsg['templates'][70] = x("显示评论表格。");
$langmsg['templates'][71] = x("帐户登记表格");
$langmsg['templates'][72] = x("在这里，您可以控制帐户登记表格的形式。请注意，编辑时请确保表格栏位的名称和ID不变，否则将无法运作。");
$langmsg['templates'][73] = x("用户输入帐户名称。");
$langmsg['templates'][74] = x("用户输入密码。");
$langmsg['templates'][75] = x("显示错误信息，如果一个字段为空。");
$langmsg['templates'][76] = x("请输入一个名称。");
$langmsg['templates'][77] = x("模板已创建。");
$langmsg['templates'][78] = x("请选择其他名称。");
$langmsg['templates'][79] = x("编辑以下模板改变新闻和评论显示方式。");
$langmsg['templates'][80] = x("新闻");
$langmsg['templates'][81] = x("模板更新。");
$langmsg['templates'][82] = x("该模板名称已存在。请选择其他名称");
$langmsg['templates'][83] = x("无法删除使用中的模板");
$langmsg['templates'][84] = x("选择的模板已删除");
$langmsg['templates'][85] = x("模板已复制");
$langmsg['templates'][86] = x("选择以下一个模板开始编辑。");
$langmsg['templates'][87] = x("模板选择。");
$langmsg['templates'][88] = x("名字");
$langmsg['templates'][89] = x("选择");
$langmsg['templates'][90] = x("创建一个新的模板。");
$langmsg['templates'][91] = x("选择");
$langmsg['templates'][92] = x("显示每篇文章的浏览量。");
$langmsg['templates'][93] = x("显示评级星星图像。");
$langmsg['templates'][94] = x("显示当前文章的评级。");
$langmsg['templates'][95] = x("显示文章被评级的次数。");
$langmsg['templates'][96] = x("显示评级表格。");
$langmsg['templates'][98] = x("显示发送表格。");
$langmsg['templates'][99] = x("显示用户的位置");
$langmsg['templates'][100] = x("上传文件");
$langmsg['templates'][101] = x("控制上传文件的显示方式。");
$langmsg['templates'][102] = x("文件上传日期。");
$langmsg['templates'][103] = x("文件标题。");
$langmsg['templates'][104] = x("文件档名。");
$langmsg['templates'][105] = x("文件档大小。");
$langmsg['templates'][106] = x("下载该文件的网址。");
$langmsg['templates'][107] = x("上传者帐户名称。");
$langmsg['templates'][108] = x("文件下载次数。");
$langmsg['templates'][109] = x("显示新闻的关连文件。");
$langmsg['templates'][110] = x("显示新闻每一个关连文件");
$langmsg['templates'][111] = x("每次只显示3页");
$langmsg['templates'][112] = x("链接到第一页，不在第一页时显示。");
$langmsg['templates'][113] = x("链接到最后一页，不在最后一页时显示。");
$langmsg['templates'][114] = x("显示文字数量");
$langmsg['templates'][115] = x("显示友好的标题");
$langmsg['templates'][116] = x("显示 reCAPTCHA元素");
$langmsg['templates'][117] = x("创建一个删除评论的链接。");
$langmsg['templates'][118] = x("只在必须登入时，才显示登录表格。");
$langmsg['templates'][119] = x("登录表格");
$langmsg['templates'][120] = x("控制登录表格显示方式。");
$langmsg['templates'][121] = x("显示用户输入的电子邮件。");
$langmsg['templates'][122] = x("显示登录错误信息。");
$langmsg['templates'][123] = x("显示 reCAPTCHA元素。");
$langmsg['templates'][124] = x("显示用户输入的用户名。");
$langmsg['templates'][125] = x("登入后显示帐户名称。");
$langmsg['templates'][126] = x("显示搜索表格。所有栏位名称和ID必须保持不变。");
$langmsg['templates'][127] = x("显示搜索结果的数量");
$langmsg['templates'][128] = x("搜索结果显示格式。每个结果采用同一格式。");
$langmsg['templates'][129] = x("单、双行时不同的格式。");
$langmsg['templates'][130] = x("显示当前的页码。");
$langmsg['templates'][131] = x("显示以前的页码。");
$langmsg['templates'][132] = x("显示下一个页码。");
$langmsg['templates'][133] = x("显示友好的新闻标题。");
$langmsg['templates'][134] = x("搜索表单");
$langmsg['templates'][135] = x("搜索结果");
$langmsg['templates'][136] = x("上传文件");


$langmsg['uploadedfiles'][0] = x("文件上传");
$langmsg['uploadedfiles'][1] = x("上传新文件");
$langmsg['uploadedfiles'][2] = x("上传文件");
$langmsg['uploadedfiles'][4] = x("选择一个文件：");
$langmsg['uploadedfiles'][5] = x("文件已删除。");
$langmsg['uploadedfiles'][6] = x("文件上传");
$langmsg['uploadedfiles'][7] = x("上传文件有一个错误，请再试一次。");
$langmsg['uploadedfiles'][8] = x("无效的文件扩展名。");
$langmsg['uploadedfiles'][9] = x("无效的文件。");
$langmsg['uploadedfiles'][10] = x("文件已从类别中删除。");
$langmsg['uploadedfiles'][11] = x("文件已添加到类别。");
$langmsg['uploadedfiles'][12] = x("文件名");
$langmsg['uploadedfiles'][13] = x("选择一个类别：");
$langmsg['uploadedfiles'][14] = x("编辑文件");
$langmsg['uploadedfiles'][15] = x("标题：");
$langmsg['uploadedfiles'][16] = x("描述：");
$langmsg['uploadedfiles'][17] = x("更新文件");
$langmsg['uploadedfiles'][18] = x("无效的档案");
$langmsg['uploadedfiles'][19] = x("文件的更新");
$langmsg['uploadedfiles'][20] = x("缩略图");
$langmsg['uploadedfiles'][21] = x("详细信息");
$langmsg['uploadedfiles'][22] = x("分类：");
$langmsg['uploadedfiles'][23] = x("标题");
$langmsg['uploadedfiles'][24] = x("文件大小");
$langmsg['uploadedfiles'][25] = x("上传");
$langmsg['uploadedfiles'][26] = x("网址");
$langmsg['uploadedfiles'][27] = x("添加到类");
$langmsg['uploadedfiles'][28] = x("从类别中删除");
$langmsg['uploadedfiles'][29] = x("上传的文件");
$langmsg['uploadedfiles'][30] = x("该名称的文件已存在。");
$langmsg['uploadedfiles'][31] = x("重设下载：");
$langmsg['uploadedfiles'][32] = x("所有类别");
$langmsg['uploadedfiles'][33] = x("下载");
$langmsg['uploadedfiles'][34] = x("上传");


$langmsg['admindata'][0] = x("帮助");
$langmsg['admindata'][1] = x("添加新闻");
$langmsg['admindata'][2] = x("私人信息");
$langmsg['admindata'][3] = x("编辑新闻");
$langmsg['admindata'][4] = x("编辑评论");


$langmsg['submitfield'][0] = x("执行");
$langmsg['submitfield'][1] = x("预览");
$langmsg['submitfield'][2] = x("添加新闻");
$langmsg['submitfield'][3] = x("保存");
$langmsg['submitfield'][4] = x("发送");
$langmsg['submitfield'][5] = x("创建");
$langmsg['submitfield'][6] = x("更新");
$langmsg['submitfield'][7] = x("添加");
$langmsg['submitfield'][8] = x("删除");
$langmsg['submitfield'][9] = x("恢复");


$langmsg['selectfield'][0] = x("-选择选项-");
$langmsg['selectfield'][1] = x("是");
$langmsg['selectfield'][2] = x("否");
$langmsg['selectfield'][3] = x("删除");
$langmsg['selectfield'][4] = x("需要批准");
$langmsg['selectfield'][5] = x("允许评论");
$langmsg['selectfield'][6] = x("变更批准");
$langmsg['selectfield'][7] = x("批准");
$langmsg['selectfield'][8] = x("评论");
$langmsg['selectfield'][9] = x("批准");
$langmsg['selectfield'][10] = x("取消核准");
$langmsg['selectfield'][11] = x("日期");
$langmsg['selectfield'][12] = x("标题");
$langmsg['selectfield'][13] = x("作者");
$langmsg['selectfield'][14] = x("分类");
$langmsg['selectfield'][15] = x("＃评论");
$langmsg['selectfield'][16] = x("标记为已读");
$langmsg['selectfield'][17] = x("标记为未读");
$langmsg['selectfield'][18] = x("重置封锁数");
$langmsg['selectfield'][19] = x("创建副本");
$langmsg['selectfield'][20] = x("鉴于计数复位");
$langmsg['selectfield'][21] = x("复位评级");


$langmsg['js'][0] = x("您确定要从这类别中删除此图像？");
$langmsg['js'][1] = x("您确定要删除选定的图像？");
$langmsg['js'][2] = x("您确定要删除选定的邮件？");
$langmsg['js'][3] = x("您确定要删除选定的模板？");
$langmsg['js'][4] = x("您确定要删除这些IP地址？");
$langmsg['js'][5] = x("您确定要重置封锁这些IP地址的数量");
$langmsg['js'][6] = x("您确定要删除这些访问级别？");
$langmsg['js'][7] = x("您确定要删除这些类别？");
$langmsg['js'][8] = x("您确定要删除这些类别和类别中所有帖子？");
$langmsg['js'][9] = x("您确定要删除这些类别？");
$langmsg['js'][10] = x("您确定要删除这些账户？");
$langmsg['js'][11] = x("您确定要删除这些帐户和帖子？");
$langmsg['js'][12] = x("您确定要删除这些帖子？");
$langmsg['js'][13] = x("输入一些文本");
$langmsg['js'][14] = x("文本");
$langmsg['js'][15] = x("请输入颜色。例如，红色，黄色，蓝色（或十六进制值）");
$langmsg['js'][16] = x("蓝色");
$langmsg['js'][17] = x("输入网址链接");
$langmsg['js'][18] = x("输入要显示的文本");
$langmsg['js'][19] = x("链接");
$langmsg['js'][20] = x("输入字体大小");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("要显示的文字？");
$langmsg['js'][23] = x("电子邮件地址");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("发电邮给我！");
$langmsg['js'][26] = x("引用的文字？");
$langmsg['js'][27] = x("引用");
$langmsg['js'][28] = x("您确定要删除选定的评论？");
$langmsg['js'][29] = x("您确定要删除选定的类别？");
$langmsg['js'][30] = x("使用表情符号...请稍候。");
$langmsg['js'][31] = x("您确定要删除选定的文件？");
$langmsg['js'][32] = x("您确定要删除选定的表情符号？");
$langmsg['js'][33] = x("你确定要删除选定的过滤器（县）？");


$langmsg['news'][0] = x("请输入一个名称。");
$langmsg['news'][1] = x("请输入一个讯息。");
$langmsg['news'][2] = x("无效的安全密钥");
$langmsg['news'][3] = x("选择另一个名称。");
$langmsg['news'][4] = x("无效的安全密钥");
$langmsg['news'][5] = x("结果发现：");
$langmsg['news'][6] = x("新登记被禁用。");
$langmsg['news'][7] = x("您的帐户已建立，您现在可以<a href=\"{adminpath}\">登录</a> 。");
$langmsg['news'][8] = x("请输入一个名称。");
$langmsg['news'][9] = x("请输入一个讯息。");
$langmsg['news'][10] = x("无效的安全密钥");
$langmsg['news'][11] = x("选择另一个名称。");
$langmsg['news'][12] = x("无效的安全密钥");
$langmsg['news'][13] = x("谢谢您的评价。");
$langmsg['news'][14] = x("您已经评价这篇文章。");
$langmsg['news'][15] = x("名字");
$langmsg['news'][16] = x("电子邮件：");
$langmsg['news'][17] = x("朋友的电子邮件：");
$langmsg['news'][18] = x("留言：");
$langmsg['news'][19] = x("嘿请看看我发现的这篇文章！");
$langmsg['news'][20] = x("发送给朋友");
$langmsg['news'][21] = x("电子邮件发送。");
$langmsg['news'][22] = x("请输入您的姓名");
$langmsg['news'][23] = x("请输入您的电子邮件地址");
$langmsg['news'][24] = x("请输入讯息");
$langmsg['news'][25] = x("请输入您朋友的电子邮件地址");
$langmsg['news'][27] = x("请输入有效的电子邮件地址");
$langmsg['news'][28] = x("请输入您朋友的有效电子邮件地址");
$langmsg['news'][29] = x("请输入用户名。");
$langmsg['news'][30] = x("该用户名已经有人使用，请选择另一个。");
$langmsg['news'][31] = x("该电子邮件地址已在使用，请选择另一个。");
$langmsg['news'][32] = x("请输入一个电子邮件地址。");
$langmsg['news'][33] = x("请输入有效的电子邮件地址。");
$langmsg['news'][34] = x("请输入密码。");
$langmsg['news'][35] = x("请确认您的密码。");
$langmsg['news'][36] = x("您输入的密码不匹配。");
$langmsg['news'][37] = x("无效的保安键。");
$langmsg['news'][38] = x("请稍候");
$langmsg['news'][39] = x("发送你的信息时出现问题，请联系管理员。");
$langmsg['news'][40] = x("您必须登录才可张贴评论。");
$langmsg['news'][41] = x("新评论 {domain}");
$langmsg['news'][42] = x("名称： {name} 电子邮件地址/网址： {email} IP：IP {ip} 消息： {message}");
$langmsg['news'][43] = x("新注册的域名 {domain}");
$langmsg['news'][44] = x("名称： {name} 邮箱： {email} IP：IP {ip}");
$langmsg['news'][45] = x("秒，然后递交另一条消息。");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("名称");
$langmsg['news'][48] = x("电子邮件 /网址");
$langmsg['news'][49] = x("信息");
$langmsg['news'][50] = x("输入文章标题");
$langmsg['news'][51] = x("摘要");
$langmsg['news'][52] = x("未分类");
$langmsg['news'][53] = x("日期");
$langmsg['news'][54] = x("这篇文章的张贴日期");
$langmsg['news'][55] = x("存档");


$langmsg['shortmonths'][0] = x("2008年1月");
$langmsg['shortmonths'][1] = x("2008年2月");
$langmsg['shortmonths'][2] = x("2008年3月");
$langmsg['shortmonths'][3] = x("2008年4月");
$langmsg['shortmonths'][4] = x("可能");
$langmsg['shortmonths'][5] = x("2008年6月");
$langmsg['shortmonths'][6] = x("2008年7月");
$langmsg['shortmonths'][7] = x("2008年8月");
$langmsg['shortmonths'][8] = x("2008年9月");
$langmsg['shortmonths'][9] = x("2008年10月");
$langmsg['shortmonths'][10] = x("11月");
$langmsg['shortmonths'][11] = x("12");


$langmsg['months'][0] = x("一月");
$langmsg['months'][1] = x("二月");
$langmsg['months'][2] = x("3月");
$langmsg['months'][3] = x("4月");
$langmsg['months'][4] = x("可能");
$langmsg['months'][5] = x("6月");
$langmsg['months'][6] = x("7月");
$langmsg['months'][7] = x("8月");
$langmsg['months'][8] = x("9月");
$langmsg['months'][9] = x("10月");
$langmsg['months'][10] = x("11");
$langmsg['months'][11] = x("12月");


$langmsg['search'][0] = x("把新闻存档");
$langmsg['search'][1] = x("已存档新闻");
$langmsg['search'][2] = x("最新的排前");
$langmsg['search'][3] = x("最旧的排前");
$langmsg['search'][4] = x("搜索");
$langmsg['search'][5] = x("日期范围");


$langmsg['install'][0] = x("数据库连接信息");
$langmsg['install'][1] = x("输入您的MySQL服务器信息如下。");
$langmsg['install'][2] = x("服务器：");
$langmsg['install'][3] = x("（通常是本地主机）");
$langmsg['install'][4] = x("用户名：");
$langmsg['install'][5] = x("密码：");
$langmsg['install'][6] = x("数据库：");
$langmsg['install'][7] = x("测试连接");
$langmsg['install'][8] = x("连接到服务器：");
$langmsg['install'][9] = x("选择数据库：");
$langmsg['install'][10] = x("无法写入db.php，请把这档案的权限设为777");
$langmsg['install'][11] = x("帐户信息");
$langmsg['install'][12] = x("输入你的户口资料。这将用于登录。");
$langmsg['install'][13] = x("电子邮件：");
$langmsg['install'][14] = x("确认密码：");
$langmsg['install'][15] = x("继续");
$langmsg['install'][16] = x("请输入用户名");
$langmsg['install'][17] = x("请输入一个电子邮件地址");
$langmsg['install'][18] = x("请输入您的密码");
$langmsg['install'][19] = x("按安装完成安装");
$langmsg['install'][20] = x("您的密码不匹配");
$langmsg['install'][21] = x("安装");
$langmsg['install'][22] = x("最后确定安装");
$langmsg['install'][23] = x("成功！");
$langmsg['install'][24] = x("N-13新闻已安装。");
$langmsg['install'][25] = x("登录到管理控制台。");
$langmsg['install'][26] = x("端口：");
$langmsg['install'][27] = x("Socket：");
$langmsg['install'][28] = x("扩展：");
$langmsg['install'][29] = x("（留空为默认）");
$langmsg['install'][30] = x("安装 ...请稍候。");
$langmsg['install'][31] = x("mysqli_connect功能没有找到。");
$langmsg['install'][32] = x("pdo_mysql功能没有找到。");
?>