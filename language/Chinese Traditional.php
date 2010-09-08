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
#   LANGUAGE    Chinese Traditional                     #
#   VERSION     4.0                                     #
#   AUTHOR      chris@network-13.com                    #
#                                                       #
#   Any words you see wrapped in { } braces,            #
#   for example {totalnews} need to be left like that.  #
#                                                       #
#########################################################

global $langmsg;
$langmsg = array();

$langmsg['menu'][0] = x("添加新聞");
$langmsg['menu'][1] = x("編輯新聞");
$langmsg['menu'][2] = x("檔案");
$langmsg['menu'][3] = x("新的消息");
$langmsg['menu'][4] = x("收件箱");
$langmsg['menu'][5] = x("發件箱");
$langmsg['menu'][6] = x("帳戶");
$langmsg['menu'][7] = x("訪問級別");
$langmsg['menu'][8] = x("禁止IP地址");
$langmsg['menu'][9] = x("分類");
$langmsg['menu'][10] = x("圖片上傳");
$langmsg['menu'][11] = x("帳號資料");
$langmsg['menu'][12] = x("個人資料");
$langmsg['menu'][13] = x("RSS訂閱");
$langmsg['menu'][14] = x("表情符號");
$langmsg['menu'][15] = x("系統");
$langmsg['menu'][16] = x("模板");
$langmsg['menu'][17] = x("詞彙過濾器");
$langmsg['menu'][18] = x("控制台主頁");
$langmsg['menu'][19] = x("新聞");
$langmsg['menu'][20] = x("郵件");
$langmsg['menu'][21] = x("選項");
$langmsg['menu'][22] = x("幫助");
$langmsg['menu'][23] = x("登出");
$langmsg['menu'][24] = x("文件上傳");


$langmsg['home'][0] = x("全站新聞統計如下。");
$langmsg['home'][1] = x("歡迎");
$langmsg['home'][2] = x("PHP的設置'選項magic_quotes_gpc'已被檢測為啟用。它建議您禁用此設置。");
$langmsg['home'][3] = x("PHP的設置'register_globals的'已被檢測為啟用。它建議您禁用此，因為它可能會導致安全問題和錯誤的發生。");
$langmsg['home'][4] = x("探測到install.php。請刪除這個文件。");
$langmsg['home'][5] = x("install.php不能刪除，請手動刪除這個文件");
$langmsg['home'][6] = x("總新聞：");
$langmsg['home'][7] = x("總評論：");
$langmsg['home'][8] = x("總用戶：");
$langmsg['home'][9] = x("總表情符號：");
$langmsg['home'][10] = x("總過濾器：");
$langmsg['home'][11] = x("總分類：");
$langmsg['home'][12] = x("總模板：");
$langmsg['home'][13] = x("總訪問級別：");
$langmsg['home'][14] = x("連接到數據庫：");
$langmsg['home'][15] = x("優化所有表：");
$langmsg['home'][16] = x("目前版本：");
$langmsg['home'][17] = x("最新版本：");
$langmsg['home'][18] = x("查看訪問日誌");
$langmsg['home'][19] = x("查詢時間：");
$langmsg['home'][20] = x("未讀郵件");
$langmsg['home'][21] = x("嘗試自動刪除這個文件夾？");
$langmsg['home'][22] = x("秒");
$langmsg['home'][23] = x("總圖片");
$langmsg['home'][24] = x("總文件");
$langmsg['home'][25] = x("總 RSS訂閱");


$langmsg['addnews'][0] = x("新聞預覽");
$langmsg['addnews'][1] = x("請輸入標題");
$langmsg['addnews'][2] = x("這則新聞允許評論嗎？請選擇");
$langmsg['addnews'][3] = x("添加新聞");
$langmsg['addnews'][4] = x("請選擇類別");


$langmsg['editnews'][0] = x("編輯新聞");
$langmsg['editnews'][1] = x("顯示");
$langmsg['editnews'][2] = x("選項");
$langmsg['editnews'][3] = x("顯示數量");
$langmsg['editnews'][4] = x("排序方式");
$langmsg['editnews'][5] = x("排列");
$langmsg['editnews'][7] = x("標題");
$langmsg['editnews'][8] = x("作者");
$langmsg['editnews'][9] = x("分類");
$langmsg['editnews'][10] = x("日期");
$langmsg['editnews'][11] = x("批准");
$langmsg['editnews'][12] = x("評論");
$langmsg['editnews'][13] = x("[顯示]");
$langmsg['editnews'][14] = x("核准");
$langmsg['editnews'][15] = x("未經批准");
$langmsg['editnews'][16] = x("新聞已儲存");
$langmsg['editnews'][17] = x("選擇的帖子已刪除。");
$langmsg['editnews'][18] = x("選擇的帖子已更新。");
$langmsg['editnews'][19] = x("新聞更新。");
$langmsg['editnews'][20] = x("禁用");
$langmsg['editnews'][21] = x("文章。");
$langmsg['editnews'][22] = x("總數。");
$langmsg['editnews'][23] = x("把選定的文章瀏覽計數器重置為0");
$langmsg['editnews'][24] = x("把選定的文章評級重置");
$langmsg['editnews'][25] = x("以分類過濾");


$langmsg['newsform'][0] = x("添加您的新聞發布如下。");
$langmsg['newsform'][1] = x("標題：");
$langmsg['newsform'][2] = x("分類：");
$langmsg['newsform'][3] = x("摘要：");
$langmsg['newsform'][4] = x("文章：");
$langmsg['newsform'][5] = x("禁用HTML");
$langmsg['newsform'][6] = x("啟用HTML");
$langmsg['newsform'][7] = x("評論：");
$langmsg['newsform'][8] = x("切換日期");
$langmsg['newsform'][9] = x("切換到摘要");
$langmsg['newsform'][16] = x("日期：");
$langmsg['newsform'][17] = x("切換存檔");
$langmsg['newsform'][18] = x("這文章永不存檔");
$langmsg['newsform'][19] = x("文件上傳");
$langmsg['newsform'][20] = x("下載");
$langmsg['newsform'][21] = x("上傳");
$langmsg['newsform'][22] = x("文章");
$langmsg['newsform'][23] = x("輸入圖片的網址");
$langmsg['newsform'][24] = x("插入");
$langmsg['newsform'][25] = x("選擇上傳的圖像");



$langmsg['editcomments'][0] = x("編輯評論");
$langmsg['editcomments'][1] = x("編輯評論如下。");
$langmsg['editcomments'][2] = x("作者：");
$langmsg['editcomments'][3] = x("電子郵件：");
$langmsg['editcomments'][4] = x("留言：");
$langmsg['editcomments'][5] = x("評論更新。");
$langmsg['editcomments'][6] = x("評論刪除。");
$langmsg['editcomments'][7] = x("評論更新。");
$langmsg['editcomments'][8] = x("評論總數。");
$langmsg['editcomments'][9] = x("消息");
$langmsg['editcomments'][10] = x("日期");
$langmsg['editcomments'][11] = x("批准");
$langmsg['editcomments'][12] = x("IP");
$langmsg['editcomments'][13] = x("核准");
$langmsg['editcomments'][14] = x("未經批准");
$langmsg['editcomments'][15] = x("位置：");


$langmsg['privmsgs'][0] = x("私人信息");
$langmsg['privmsgs'][1] = x("收件箱");
$langmsg['privmsgs'][2] = x("發件箱");
$langmsg['privmsgs'][3] = x("新的消息");
$langmsg['privmsgs'][4] = x("你有");
$langmsg['privmsgs'][5] = x("標題");
$langmsg['privmsgs'][6] = x("自");
$langmsg['privmsgs'][7] = x("已發送");
$langmsg['privmsgs'][8] = x("至");
$langmsg['privmsgs'][9] = x("回复此郵件");
$langmsg['privmsgs'][10] = x("新的私人信息。");
$langmsg['privmsgs'][11] = x("發送至：");
$langmsg['privmsgs'][12] = x("標題：");
$langmsg['privmsgs'][13] = x("留言：");
$langmsg['privmsgs'][14] = x("例如'user1的，用戶2，user3'");
$langmsg['privmsgs'][15] = x("郵件預覽。");
$langmsg['privmsgs'][16] = x("消息發送到下列用戶。");
$langmsg['privmsgs'][17] = x("請輸入發送此郵件的用戶。");
$langmsg['privmsgs'][18] = x("請輸入此消息標題。");
$langmsg['privmsgs'][19] = x("請輸入一個訊息。");
$langmsg['privmsgs'][20] = x("郵件刪除。");
$langmsg['privmsgs'][21] = x("未讀郵件。");
$langmsg['privmsgs'][22] = x("郵件總數。");


$langmsg['options'][0] = x("選項");
$langmsg['options'][1] = x("新");
$langmsg['options'][2] = x("編輯");


$langmsg['bannedips'][0] = x("禁止IP地址");
$langmsg['bannedips'][1] = x("禁止IP地址。");
$langmsg['bannedips'][2] = x("IP地址");
$langmsg['bannedips'][3] = x("數額次攔截");
$langmsg['bannedips'][4] = x("添加一個新的IP地址。");
$langmsg['bannedips'][5] = x("禁止訊息。 （可使用HTML）");
$langmsg['bannedips'][6] = x("IP地址：");
$langmsg['bannedips'][7] = x("該IP地址已被禁止。");
$langmsg['bannedips'][8] = x("IP地址被禁止。");
$langmsg['bannedips'][9] = x("IP地址刪除。");
$langmsg['bannedips'][10] = x("IP地址已重置。");
$langmsg['bannedips'][11] = x("禁止的信息已更新。");


$langmsg['cats'][0] = x("分類");
$langmsg['cats'][1] = x("分類。");
$langmsg['cats'][2] = x("名字");
$langmsg['cats'][3] = x("文章");
$langmsg['cats'][4] = x("創建一個新的類別。");
$langmsg['cats'][5] = x("名稱：");
$langmsg['cats'][6] = x("以下類別已被刪除：");
$langmsg['cats'][7] = x("請選擇其他名稱。");
$langmsg['cats'][8] = x("分類創建。");
$langmsg['cats'][9] = x("分類更新。");
$langmsg['cats'][10] = x("編輯您的類別如下。");
$langmsg['cats'][11] = x("圖片");
$langmsg['cats'][12] = x("文件");
$langmsg['cats'][13] = x("該類別名稱已經存在，請選擇另一個。");


$langmsg['img'][0] = x("圖片上傳");
$langmsg['img'][1] = x("上傳新圖片");
$langmsg['img'][2] = x("上傳文件");
$langmsg['img'][3] = x("圖片共");
$langmsg['img'][4] = x("選擇圖片：");
$langmsg['img'][5] = x("圖片已刪除。");
$langmsg['img'][6] = x("圖片上傳");
$langmsg['img'][7] = x("有一個錯誤上傳文件，請再試一次。");
$langmsg['img'][8] = x("無效的文件擴展名。");
$langmsg['img'][9] = x("無效的圖片。");
$langmsg['img'][10] = x("從圖像中刪除類別。");
$langmsg['img'][11] = x("圖片添加到類別。");
$langmsg['img'][12] = x("文件名：");
$langmsg['img'][13] = x("選擇一個類別：");
$langmsg['img'][14] = x("編輯圖像");
$langmsg['img'][15] = x("標題：");
$langmsg['img'][16] = x("描述：");
$langmsg['img'][17] = x("更新圖片");
$langmsg['img'][18] = x("無效的圖片");
$langmsg['img'][19] = x("圖片更新");
$langmsg['img'][20] = x("縮略圖");
$langmsg['img'][21] = x("詳細信息");
$langmsg['img'][22] = x("分類：");
$langmsg['img'][23] = x("文件名");
$langmsg['img'][24] = x("文件大小");
$langmsg['img'][25] = x("上傳");
$langmsg['img'][26] = x("網址");
$langmsg['img'][27] = x("添加到類別");
$langmsg['img'][28] = x("從類別中刪除");
$langmsg['img'][29] = x("上傳圖片");
$langmsg['img'][30] = x("已有相同名稱的文件。");
$langmsg['img'][31] = x("所有類別");
$langmsg['img'][32] = x("無法寫入上傳目錄。請把上傳目錄權限設為 777");


$langmsg['personal'][0] = x("個人選項");
$langmsg['personal'][1] = x("修改您的帳戶信息如下。");
$langmsg['personal'][2] = x("個人設置");
$langmsg['personal'][3] = x("頭像：");
$langmsg['personal'][4] = x("電郵地址：");
$langmsg['personal'][5] = x("消息提醒：");
$langmsg['personal'][6] = x("初始登錄時顯示未讀郵件通知？");
$langmsg['personal'][7] = x("新密碼：");
$langmsg['personal'][8] = x("（如不更改請留空）");
$langmsg['personal'][9] = x("確認密碼：");
$langmsg['personal'][10] = x("必須輸入電子郵件地址。");
$langmsg['personal'][11] = x("設置更新。");
$langmsg['personal'][12] = x("密碼不匹配。");
$langmsg['personal'][13] = x("啟用所見即所得的編輯器？");


$langmsg['login'][0] = x("請登錄");
$langmsg['login'][1] = x("名稱：");
$langmsg['login'][2] = x("密碼：");
$langmsg['login'][3] = x("忘記密碼？");
$langmsg['login'][4] = x("記住我");
$langmsg['login'][5] = x("安全密鑰：");
$langmsg['login'][6] = x("登入");
$langmsg['login'][7] = x("無效的安全密鑰");
$langmsg['login'][8] = x("無效的名稱或密碼");
$langmsg['login'][9] = x("輸入以下文字");


$langmsg['profile'][0] = x("編輯個人資料");
$langmsg['profile'][1] = x("編輯您的個人資料如下。");
$langmsg['profile'][2] = x("名稱：");
$langmsg['profile'][3] = x("年齡：");
$langmsg['profile'][4] = x("位置：");
$langmsg['profile'][5] = x("性別：");
$langmsg['profile'][6] = x("資料圖片：");
$langmsg['profile'][7] = x("網址：");
$langmsg['profile'][8] = x("愛好：");
$langmsg['profile'][9] = x("興趣：");
$langmsg['profile'][10] = x("職業：");
$langmsg['profile'][11] = x("最喜愛的金句：");
$langmsg['profile'][12] = x("男性");
$langmsg['profile'][13] = x("女性");
$langmsg['profile'][14] = x("資料更新。");
$langmsg['profile'][15] = x("無");


$langmsg['accounts'][0] = x("帳戶");
$langmsg['accounts'][1] = x("帳戶。");
$langmsg['accounts'][2] = x("用戶名");
$langmsg['accounts'][3] = x("訪問級別");
$langmsg['accounts'][4] = x("文章");
$langmsg['accounts'][5] = x("評論數");
$langmsg['accounts'][6] = x("創建一個新帳戶。");
$langmsg['accounts'][7] = x("帳戶名稱：");
$langmsg['accounts'][8] = x("電子郵件：");
$langmsg['accounts'][9] = x("新密碼：");
$langmsg['accounts'][10] = x("確認密碼：");
$langmsg['accounts'][11] = x("訪問級別：");
$langmsg['accounts'][12] = x("新帳戶。");
$langmsg['accounts'][13] = x("編輯帳戶如下。");
$langmsg['accounts'][14] = x("電子郵件地址必須輸入。");
$langmsg['accounts'][15] = x("帳戶更新。");
$langmsg['accounts'][16] = x("密碼不匹配。");
$langmsg['accounts'][17] = x("帳戶名稱必須輸入。");
$langmsg['accounts'][18] = x("帳戶名稱已存在。請選擇其他。");
$langmsg['accounts'][19] = x("必須輸入密碼。");
$langmsg['accounts'][20] = x("帳戶已創建。");
$langmsg['accounts'][21] = x("下列帳戶已被刪除：");
$langmsg['accounts'][22] = x("您不能刪除自己的帳戶。");
$langmsg['accounts'][23] = x("（如不更改請保留空白）");
$langmsg['accounts'][24] = x("已有一個帳戶使用該電子郵件地址，請選擇另一個。");
$langmsg['accounts'][25] = x("請輸入一個帳戶名稱");
$langmsg['accounts'][26] = x("檔");
$langmsg['accounts'][27] = x("圖片");


$langmsg['access'][0] = x("訪問級別");
$langmsg['access'][1] = x("創建一個新的訪問級別。");
$langmsg['access'][2] = x("名稱：");
$langmsg['access'][3] = x("該訪問級別可以訪問哪些部分？");
$langmsg['access'][4] = x("帳戶：");
$langmsg['access'][5] = x("訪問級別：");
$langmsg['access'][6] = x("禁止IP地址：");
$langmsg['access'][7] = x("分類：");
$langmsg['access'][8] = x("評論：");
$langmsg['access'][9] = x("說明：");
$langmsg['access'][10] = x("圖片上傳：");
$langmsg['access'][11] = x("新聞：");
$langmsg['access'][12] = x("個人選項：");
$langmsg['access'][13] = x("私人訊息：");
$langmsg['access'][14] = x("簡介：");
$langmsg['access'][15] = x("RSS訂閱：");
$langmsg['access'][16] = x("表情符號：");
$langmsg['access'][17] = x("系統配置：");
$langmsg['access'][18] = x("模板：");
$langmsg['access'][19] = x("詞彙過濾器：");
$langmsg['access'][20] = x("此訪問級別可以使用哪些類別？");
$langmsg['access'][21] = x("所有：");
$langmsg['access'][22] = x("此訪問級別可編輯哪些帖子？");
$langmsg['access'][23] = x("管理員（全部）：");
$langmsg['access'][24] = x("編輯（自己+會員）：");
$langmsg['access'][25] = x("會員（自己的）：");
$langmsg['access'][26] = x("此訪問級別的帖子是否自動批准？");
$langmsg['access'][27] = x("此訪問級別可以批准帖子嗎？");
$langmsg['access'][28] = x("此訪問級別可以使用HTML？");
$langmsg['access'][29] = x("允許張貼而不必選擇一個類別？");
$langmsg['access'][30] = x("訪問級別刪除：");
$langmsg['access'][31] = x("下列訪問級別並沒有被刪除，因為有1個或多個帳戶分配到該級別：");
$langmsg['access'][32] = x("編輯以下訪問級別。");
$langmsg['access'][33] = x("請輸入此訪問級別名稱。");
$langmsg['access'][34] = x("訪問級別已更新。");
$langmsg['access'][35] = x("該訪問級別名稱已經存在，請選擇另一個。");
$langmsg['access'][36] = x("請選擇此訪問級別可以編輯哪些帖子。");
$langmsg['access'][37] = x("請選擇，如果這訪問級別發出的帖子是否可自動獲得批准。");
$langmsg['access'][38] = x("請選擇，如果這訪問級別可以批准帖子");
$langmsg['access'][39] = x("請選擇，如果此訪問級別可以使用HTML");
$langmsg['access'][40] = x("請選擇，如果此訪問級別能不選擇帖子的類別");
$langmsg['access'][41] = x("訪問級別已創建。");
$langmsg['access'][42] = x("訪問級別。");
$langmsg['access'][43] = x("名字");
$langmsg['access'][44] = x("訪問");
$langmsg['access'][45] = x("帳戶");
$langmsg['access'][46] = x("會員");
$langmsg['access'][47] = x("編輯");
$langmsg['access'][48] = x("管理員");
$langmsg['access'][49] = x("文件上傳");
$langmsg['access'][50] = x("此訪問級別可以查看用戶的IP地址？");
$langmsg['access'][51] = x("此訪問級別可以編輯哪些文件和圖像？");
$langmsg['access'][52] = x("自己的");
$langmsg['access'][53] = x("全部");


$langmsg['accesslogs'][0] = x("訪問日誌");
$langmsg['accesslogs'][1] = x("用戶名");
$langmsg['accesslogs'][2] = x("嘗試");
$langmsg['accesslogs'][3] = x("IP地址");
$langmsg['accesslogs'][4] = x("日期");
$langmsg['accesslogs'][5] = x("訪問日誌");
$langmsg['accesslogs'][6] = x("成功");
$langmsg['accesslogs'][7] = x("失敗");


$langmsg['filters'][0] = x("詞彙過濾器");
$langmsg['filters'][1] = x("過濾器已添加。");
$langmsg['filters'][2] = x("過濾器已刪除。");
$langmsg['filters'][3] = x("評論內容中，以下詞彙會被過濾。");
$langmsg['filters'][4] = x("篩選字");
$langmsg['filters'][5] = x("替換為");
$langmsg['filters'][6] = x("刪除");
$langmsg['filters'][7] = x("添加新的過濾器");


$langmsg['rss'][0] = x("RSS訂閱");
$langmsg['rss'][1] = x("編輯以下您的RSS設置");
$langmsg['rss'][2] = x("這一消息顯示的位置，例如http://yourdomain.com/或http://yourdomain.com /index");
$langmsg['rss'][3] = x("RSS Feed名稱：");
$langmsg['rss'][4] = x("新聞位置：");
$langmsg['rss'][5] = x("您的RSS標題：");
$langmsg['rss'][6] = x("你的RSS說明：");
$langmsg['rss'][7] = x("字符編碼：");
$langmsg['rss'][8] = x("語言：");
$langmsg['rss'][9] = x("顯示的帖子量：");
$langmsg['rss'][10] = x("0 =所有");
$langmsg['rss'][11] = x("分類顯示：");
$langmsg['rss'][12] = x("顯示沒有指定類別的帖子嗎？");
$langmsg['rss'][13] = x("的RSS代碼：");
$langmsg['rss'][14] = x("編輯如何顯示您的方式");
$langmsg['rss'][15] = x("顯示文章標題。");
$langmsg['rss'][16] = x("顯示文章摘要。");
$langmsg['rss'][17] = x("顯示內文。");
$langmsg['rss'][18] = x("顯示帖子所屬的類別。");
$langmsg['rss'][19] = x("顯示個別帖子的網址。");
$langmsg['rss'][20] = x("顯示帖子的及表日期。");
$langmsg['rss'][21] = x("顯示時區設置。");
$langmsg['rss'][22] = x("顯示每個帖子的發表時間。");
$langmsg['rss'][23] = x("顯示文章作者。");
$langmsg['rss'][24] = x("顯示用戶的頭像，如果他們有一個。");
$langmsg['rss'][25] = x("顯示每則文章的ID。");
$langmsg['rss'][26] = x("顯示每則新聞的評論數量。");
$langmsg['rss'][27] = x("請輸入feedname");
$langmsg['rss'][28] = x("請輸入新聞位置");
$langmsg['rss'][29] = x("請輸入標題");
$langmsg['rss'][30] = x("請輸入說明");
$langmsg['rss'][31] = x("請輸入字符編碼");
$langmsg['rss'][32] = x("請輸入語言");
$langmsg['rss'][33] = x("請輸入要顯示的數量");
$langmsg['rss'][34] = x("創建RSS提要");
$langmsg['rss'][35] = x("該名稱的RSS Feed已經存在，請選擇");
$langmsg['rss'][36] = x("RSS提要已更新");
$langmsg['rss'][37] = x("RSS訂閱");
$langmsg['rss'][38] = x("RSS提要已刪除。");
$langmsg['rss'][39] = x("名字");
$langmsg['rss'][40] = x("分類");
$langmsg['rss'][41] = x("網址");
$langmsg['rss'][42] = x("創建一個新的RSS Feed。");
$langmsg['rss'][43] = x("顯示文章友好的標題");


$langmsg['smilies'][0] = x("表情符號");
$langmsg['smilies'][1] = x("適用於如果您想一次過更新所有表情符號的位置。");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("替換：");
$langmsg['smilies'][4] = x("替換為：");
$langmsg['smilies'][5] = x("所有的路徑已更新。");
$langmsg['smilies'][6] = x("創建一個新的表情符號");
$langmsg['smilies'][7] = x("路徑：");
$langmsg['smilies'][8] = x("鍵碼：");
$langmsg['smilies'][9] = x("請輸入表情符號的路徑。");
$langmsg['smilies'][10] = x("請輸入這表情符號的鍵碼。");
$langmsg['smilies'][11] = x("鍵碼已在使用。請選擇一個不同的鍵碼。");
$langmsg['smilies'][12] = x("表情符號已加入。");
$langmsg['smilies'][13] = x("您確定要刪除此表情符號？");
$langmsg['smilies'][14] = x("表情符號已刪除。");
$langmsg['smilies'][15] = x("編輯以下的表情符號");
$langmsg['smilies'][16] = x("表情符號：");
$langmsg['smilies'][17] = x("表情符號已更新。");
$langmsg['smilies'][18] = x("表情符號已刪除");
$langmsg['smilies'][19] = x("請選擇你要修改的表情符號。");
$langmsg['smilies'][20] = x("表情符號");
$langmsg['smilies'][21] = x("插入一個新的表情符號。");
$langmsg['smilies'][22] = x("更新所有表情符號的路徑");


$langmsg['system'][0] = x("系統配置");
$langmsg['system'][1] = x("修改系統配置。");
$langmsg['system'][2] = x("新聞");
$langmsg['system'][3] = x("每頁新聞 (則)：");
$langmsg['system'][4] = x("新聞顯示順序：");
$langmsg['system'][5] = x("降序");
$langmsg['system'][6] = x("升序");
$langmsg['system'][7] = x("新聞的日期和時間格式：");
$langmsg['system'][8] = x("看這裡");
$langmsg['system'][9] = x("顯示頭像：");
$langmsg['system'][10] = x("顯示不同類別新聞時的分隔符：");
$langmsg['system'][11] = x("評論");
$langmsg['system'][12] = x("每頁評論 (則)：");
$langmsg['system'][13] = x("評論排序：");
$langmsg['system'][14] = x("評論的日期和時間格式：");
$langmsg['system'][15] = x("評論的最大長度：");
$langmsg['system'][16] = x("在新視窗查看評論：");
$langmsg['system'][17] = x("張貼評論後延時（垃圾郵件防護）：");
$langmsg['system'][18] = x("秒");
$langmsg['system'][19] = x("垃圾郵件：");
$langmsg['system'][20] = x("新評論信息：");
$langmsg['system'][21] = x("新評論批准信息：");
$langmsg['system'][22] = x("評論表格上使用影像驗證：");
$langmsg['system'][23] = x("友好的URL");
$langmsg['system'][24] = x("啟用友好的網址：");
$langmsg['system'][25] = x("文件擴展名：");
$langmsg['system'][26] = x("前綴：");
$langmsg['system'][27] = x("目錄文件名：");
$langmsg['system'][28] = x("註冊");
$langmsg['system'][29] = x("允許用戶註冊：");
$langmsg['system'][30] = x("訪問級別為新用戶：");
$langmsg['system'][31] = x("其他");
$langmsg['system'][32] = x("時區：");
$langmsg['system'][33] = x("允許上傳文件類型的圖片：");
$langmsg['system'][34] = x("圖片上傳路徑：");
$langmsg['system'][35] = x("沒有訪問錯誤信息：");
$langmsg['system'][36] = x("設置更新。");
$langmsg['system'][37] = x("延時使用後發送到（垃圾郵件防護）：");
$langmsg['system'][38] = x("通知");
$langmsg['system'][39] = x("有新評論時發送電子郵件通知：");
$langmsg['system'][40] = x("有新註冊時發送電子郵件通知：");
$langmsg['system'][41] = x("只允許註冊用戶評論：");
$langmsg['system'][42] = x("發送通知給這個郵件地址：");
$langmsg['system'][43] = x("允許上傳文件類型：");
$langmsg['system'][44] = x("獲得電子郵件通知未經批准的新聞員額：");
$langmsg['system'][45] = x("公共密鑰");
$langmsg['system'][46] = x("私人密鑰");
$langmsg['system'][47] = x("腳本的路徑");
$langmsg['system'][48] = x("允許註冊用戶刪除自己的意見：");
$langmsg['system'][49] = x("使用影像驗證該指數登錄表單：");
$langmsg['system'][50] = x("登記表格上使用影像驗證：");
$langmsg['system'][51] = x("文件的日期和時間格式：");
$langmsg['system'][52] = x("在新聞下方顯示'技術支持'：");


$langmsg['recover'][0] = x("密碼恢復");
$langmsg['recover'][1] = x("輸入您要重置密碼的帳戶的電子郵件地址。");
$langmsg['recover'][2] = x("電子郵件：");
$langmsg['recover'][3] = x("您或有人要求重新設置密碼，請按以下的鏈接開始。");
$langmsg['recover'][4] = x("按此重置密碼");
$langmsg['recover'][5] = x("一封電子郵件已經發送到");
$langmsg['recover'][6] = x("沒有使用此電子郵件的帳戶，請聯繫管理員。");
$langmsg['recover'][7] = x("新密碼");
$langmsg['recover'][8] = x("請輸入您的新密碼。");
$langmsg['recover'][9] = x("無法發送密碼恢復電子郵件，請與系統管理員聯繫。");
$langmsg['recover'][10] = x("確認密碼：");
$langmsg['recover'][11] = x("密碼不匹配。");
$langmsg['recover'][12] = x("您的密碼已更新。");
$langmsg['recover'][13] = x("進一步指示檢索您的帳戶。");


$langmsg['templates'][0] = x("模板");
$langmsg['templates'][1] = x("創建一個新的模板。");
$langmsg['templates'][2] = x("名稱：");
$langmsg['templates'][3] = x("改變新聞顯示方式。");
$langmsg['templates'][4] = x("顯示文章標題。");
$langmsg['templates'][5] = x("顯示文章摘要。");
$langmsg['templates'][6] = x("顯示內文。");
$langmsg['templates'][7] = x("顯示文章發表日期。");
$langmsg['templates'][8] = x("顯示每個帖子所屬類別。");
$langmsg['templates'][9] = x("顯示文章作者。");
$langmsg['templates'][10] = x("顯示用戶的頭像，如果他們有一個。");
$langmsg['templates'][11] = x("顯示每篇文章的ID。");
$langmsg['templates'][12] = x("顯示作者的IP地址。（只在登錄後才顯示）");
$langmsg['templates'][13] = x("顯示閱讀全文鏈接");
$langmsg['templates'][14] = x("將會顯示您的電子郵件地址。");
$langmsg['templates'][15] = x("將會創建一個鏈接到您的電子郵件地址。");
$langmsg['templates'][16] = x("將會創建一個鏈接到您的個人資料。");
$langmsg['templates'][17] = x("顯示每則新聞的評論數量。");
$langmsg['templates'][18] = x("將會創建一個鏈接到評論。");
$langmsg['templates'][19] = x("在登錄後，於此標籤之間顯示的資料");
$langmsg['templates'][20] = x("表情符號路徑");
$langmsg['templates'][21] = x("評論");
$langmsg['templates'][22] = x("更改顯示評論的方式。");
$langmsg['templates'][23] = x("顯示評論作者。");
$langmsg['templates'][24] = x("顯示的信息。");
$langmsg['templates'][25] = x("顯示用戶的頭像，如果他們有一個。");
$langmsg['templates'][26] = x("顯示作者的IP地址。 （只在登錄後才顯示）");
$langmsg['templates'][27] = x("顯示每個評論的ID。");
$langmsg['templates'][28] = x("顯示評論者的電子郵件地址。");
$langmsg['templates'][29] = x("將會創建一個鏈接到用戶的電子郵件。");
$langmsg['templates'][30] = x("顯示發表評論的日期。");
$langmsg['templates'][31] = x("在登錄後，於此標籤之間顯示的資料");
$langmsg['templates'][32] = x("評論表格");
$langmsg['templates'][33] = x("請注意，編輯時請確保表格欄位的名稱和ID不變，否則將無法運作。還要注意onsubmit屬性中，useajax = ''，yes 代表使用 ajax 提交評論，no 則否。");
$langmsg['templates'][34] = x("顯示文章ID。");
$langmsg['templates'][35] = x("顯示類別ID。");
$langmsg['templates'][36] = x("登錄後顯示你的帳戶名稱");
$langmsg['templates'][37] = x("登錄後顯示你的電子郵件");
$langmsg['templates'][38] = x("將會顯示消息。");
$langmsg['templates'][39] = x("將會顯示所有的表情符號。");
$langmsg['templates'][40] = x("新聞分頁");
$langmsg['templates'][44] = x("評論分頁");
$langmsg['templates'][45] = x("顯示前頁鏈接，如有。");
$langmsg['templates'][46] = x("顯示下頁鏈接，如有。");
$langmsg['templates'][47] = x("將顯示網頁數量，例如：1 2 3 4。");
$langmsg['templates'][48] = x("個人資料");
$langmsg['templates'][49] = x("修改個人資料顯示方式。");
$langmsg['templates'][50] = x("顯示用戶的帳戶名稱。");
$langmsg['templates'][51] = x("顯示用戶的名稱。");
$langmsg['templates'][52] = x("顯示用戶的年齡。");
$langmsg['templates'][53] = x("顯示用戶的位置。");
$langmsg['templates'][54] = x("顯示用戶的性別。");
$langmsg['templates'][55] = x("創建一個鏈接到用戶的主頁。");
$langmsg['templates'][56] = x("顯示用戶的喜好。");
$langmsg['templates'][57] = x("顯示用戶的興趣。");
$langmsg['templates'][58] = x("顯示用戶的職業。");
$langmsg['templates'][59] = x("顯示用戶喜愛的金句。");
$langmsg['templates'][60] = x("顯示用戶的個人資料圖片。");
$langmsg['templates'][61] = x("新聞結構");
$langmsg['templates'][62] = x("在這裡，您可以控制每則新聞各元素顯示順序，例如，如果您希望在新聞上方及下方顯示分頁，可在此設定。");
$langmsg['templates'][63] = x("顯示新聞。");
$langmsg['templates'][64] = x("顯示分頁。");
$langmsg['templates'][65] = x("評論結構");
$langmsg['templates'][66] = x("在這裡，您可以控制閱讀評論時，每則新聞各元素顯示順序，例如，如果您希望在新聞上方及下方顯示分頁，可在此設定。");
$langmsg['templates'][67] = x("當閱讀評論時顯示單一新聞");
$langmsg['templates'][68] = x("顯示您的意見。");
$langmsg['templates'][69] = x("顯示評論分頁。");
$langmsg['templates'][70] = x("顯示評論表格。");
$langmsg['templates'][71] = x("帳戶登記表格");
$langmsg['templates'][72] = x("在這裡，您可以控制帳戶登記表格的形式。請注意，編輯時請確保表格欄位的名稱和ID不變，否則將無法運作。");
$langmsg['templates'][73] = x("用戶輸入帳戶名稱。");
$langmsg['templates'][74] = x("用戶輸入密碼。");
$langmsg['templates'][75] = x("顯示錯誤信息，如果一個字段為空。");
$langmsg['templates'][76] = x("請輸入一個名稱。");
$langmsg['templates'][77] = x("模板已創建。");
$langmsg['templates'][78] = x("請選擇其他名稱。");
$langmsg['templates'][79] = x("編輯以下模板改變新聞和評論顯示方式。");
$langmsg['templates'][80] = x("新聞");
$langmsg['templates'][81] = x("模板更新。");
$langmsg['templates'][82] = x("該模板名稱已存在。請選擇其他名稱");
$langmsg['templates'][83] = x("無法刪除使用中的模板");
$langmsg['templates'][84] = x("選擇的模板已刪除");
$langmsg['templates'][85] = x("模板已複製");
$langmsg['templates'][86] = x("選擇以下一個模板開始編輯。");
$langmsg['templates'][87] = x("模板選擇。");
$langmsg['templates'][88] = x("名字");
$langmsg['templates'][89] = x("選擇");
$langmsg['templates'][90] = x("創建一個新的模板。");
$langmsg['templates'][91] = x("選擇");
$langmsg['templates'][92] = x("顯示每篇文章的瀏覽量。");
$langmsg['templates'][93] = x("顯示評級星星圖像。");
$langmsg['templates'][94] = x("顯示當前文章的評級。");
$langmsg['templates'][95] = x("顯示文章被評級的次數。");
$langmsg['templates'][96] = x("顯示評級表格。");
$langmsg['templates'][98] = x("顯示發送表格。");
$langmsg['templates'][99] = x("顯示用戶的位置");
$langmsg['templates'][100] = x("上傳文件");
$langmsg['templates'][101] = x("控制上傳文件的顯示方式。");
$langmsg['templates'][102] = x("文件上傳日期。");
$langmsg['templates'][103] = x("文件標題。");
$langmsg['templates'][104] = x("文件檔名。");
$langmsg['templates'][105] = x("文件檔大小。");
$langmsg['templates'][106] = x("下載該文件的網址。");
$langmsg['templates'][107] = x("上傳者帳戶名稱。");
$langmsg['templates'][108] = x("文件下載次數。");
$langmsg['templates'][109] = x("顯示新聞的關連文件。");
$langmsg['templates'][110] = x("顯示新聞每一個關連文件");
$langmsg['templates'][111] = x("每次只顯示3頁");
$langmsg['templates'][112] = x("鏈接到第一頁，不在第一頁時顯示。");
$langmsg['templates'][113] = x("鏈接到最後一頁，不在最後一頁時顯示。");
$langmsg['templates'][114] = x("顯示文字數量");
$langmsg['templates'][115] = x("顯示友好的標題");
$langmsg['templates'][116] = x("顯示 reCAPTCHA元素");
$langmsg['templates'][117] = x("創建一個刪除評論的鏈接。");
$langmsg['templates'][118] = x("只在必須登入時，才顯示登錄表格。");
$langmsg['templates'][119] = x("登錄表格");
$langmsg['templates'][120] = x("控制登錄表格顯示方式。");
$langmsg['templates'][121] = x("顯示用戶輸入的電子郵件。");
$langmsg['templates'][122] = x("顯示登錄錯誤信息。");
$langmsg['templates'][123] = x("顯示 reCAPTCHA元素。");
$langmsg['templates'][124] = x("顯示用戶輸入的用戶名。");
$langmsg['templates'][125] = x("登入後顯示帳戶名稱。");
$langmsg['templates'][126] = x("顯示搜索表格。所有欄位名稱和ID必須保持不變。");
$langmsg['templates'][127] = x("顯示搜索結果的數量");
$langmsg['templates'][128] = x("搜索結果顯示格式。每個結果採用同一格式。");
$langmsg['templates'][129] = x("單、雙行時不同的格式。");
$langmsg['templates'][130] = x("顯示當前的頁碼。");
$langmsg['templates'][131] = x("顯示以前的頁碼。");
$langmsg['templates'][132] = x("顯示下一個頁碼。");
$langmsg['templates'][133] = x("顯示友好的新聞標題。");
$langmsg['templates'][134] = x("搜索表單");
$langmsg['templates'][135] = x("搜索結果");
$langmsg['templates'][136] = x("上傳文件");


$langmsg['uploadedfiles'][0] = x("文件上傳");
$langmsg['uploadedfiles'][1] = x("上傳新文件");
$langmsg['uploadedfiles'][2] = x("上傳文件");
$langmsg['uploadedfiles'][4] = x("選擇一個文件：");
$langmsg['uploadedfiles'][5] = x("文件已刪除。");
$langmsg['uploadedfiles'][6] = x("文件上傳");
$langmsg['uploadedfiles'][7] = x("上傳文件有一個錯誤，請再試一次。");
$langmsg['uploadedfiles'][8] = x("無效的文件擴展名。");
$langmsg['uploadedfiles'][9] = x("無效的文件。");
$langmsg['uploadedfiles'][10] = x("文件已從類別中刪除。");
$langmsg['uploadedfiles'][11] = x("文件已添加到類別。");
$langmsg['uploadedfiles'][12] = x("文件名");
$langmsg['uploadedfiles'][13] = x("選擇一個類別：");
$langmsg['uploadedfiles'][14] = x("編輯文件");
$langmsg['uploadedfiles'][15] = x("標題：");
$langmsg['uploadedfiles'][16] = x("描述：");
$langmsg['uploadedfiles'][17] = x("更新文件");
$langmsg['uploadedfiles'][18] = x("無效的檔案");
$langmsg['uploadedfiles'][19] = x("文件的更新");
$langmsg['uploadedfiles'][20] = x("縮略圖");
$langmsg['uploadedfiles'][21] = x("詳細信息");
$langmsg['uploadedfiles'][22] = x("分類：");
$langmsg['uploadedfiles'][23] = x("標題");
$langmsg['uploadedfiles'][24] = x("文件大小");
$langmsg['uploadedfiles'][25] = x("上傳");
$langmsg['uploadedfiles'][26] = x("網址");
$langmsg['uploadedfiles'][27] = x("添加到類");
$langmsg['uploadedfiles'][28] = x("從類別中刪除");
$langmsg['uploadedfiles'][29] = x("上傳的文件");
$langmsg['uploadedfiles'][30] = x("該名稱的文件已存在。");
$langmsg['uploadedfiles'][31] = x("重設下載：");
$langmsg['uploadedfiles'][32] = x("所有類別");
$langmsg['uploadedfiles'][33] = x("下載");
$langmsg['uploadedfiles'][34] = x("上傳");


$langmsg['admindata'][0] = x("幫助");
$langmsg['admindata'][1] = x("添加新聞");
$langmsg['admindata'][2] = x("私人信息");
$langmsg['admindata'][3] = x("編輯新聞");
$langmsg['admindata'][4] = x("編輯評論");


$langmsg['submitfield'][0] = x("執行");
$langmsg['submitfield'][1] = x("預覽");
$langmsg['submitfield'][2] = x("添加新聞");
$langmsg['submitfield'][3] = x("保存");
$langmsg['submitfield'][4] = x("發送");
$langmsg['submitfield'][5] = x("創建");
$langmsg['submitfield'][6] = x("更新");
$langmsg['submitfield'][7] = x("添加");
$langmsg['submitfield'][8] = x("刪除");
$langmsg['submitfield'][9] = x("恢復");


$langmsg['selectfield'][0] = x("-選擇選項-");
$langmsg['selectfield'][1] = x("是");
$langmsg['selectfield'][2] = x("否");
$langmsg['selectfield'][3] = x("刪除");
$langmsg['selectfield'][4] = x("需要批准");
$langmsg['selectfield'][5] = x("允許評論");
$langmsg['selectfield'][6] = x("變更批准");
$langmsg['selectfield'][7] = x("批准");
$langmsg['selectfield'][8] = x("評論");
$langmsg['selectfield'][9] = x("批准");
$langmsg['selectfield'][10] = x("取消核准");
$langmsg['selectfield'][11] = x("日期");
$langmsg['selectfield'][12] = x("標題");
$langmsg['selectfield'][13] = x("作者");
$langmsg['selectfield'][14] = x("分類");
$langmsg['selectfield'][15] = x("＃評論");
$langmsg['selectfield'][16] = x("標記為已讀");
$langmsg['selectfield'][17] = x("標記為未讀");
$langmsg['selectfield'][18] = x("重置封鎖數");
$langmsg['selectfield'][19] = x("創建副本");
$langmsg['selectfield'][20] = x("鑑於計數復位");
$langmsg['selectfield'][21] = x("復位評級");


$langmsg['js'][0] = x("您確定要從這類別中刪除此圖像？");
$langmsg['js'][1] = x("您確定要刪除選定的圖像？");
$langmsg['js'][2] = x("您確定要刪除選定的郵件？");
$langmsg['js'][3] = x("您確定要刪除選定的模板？");
$langmsg['js'][4] = x("您確定要刪除這些IP地址？");
$langmsg['js'][5] = x("您確定要重置封鎖這些IP地址的數量");
$langmsg['js'][6] = x("您確定要刪除這些訪問級別？");
$langmsg['js'][7] = x("您確定要刪除這些類別？");
$langmsg['js'][8] = x("您確定要刪除這些類別和類別中所有帖子？");
$langmsg['js'][9] = x("您確定要刪除這些類別？");
$langmsg['js'][10] = x("您確定要刪除這些賬戶？");
$langmsg['js'][11] = x("您確定要刪除這些帳戶和帖子？");
$langmsg['js'][12] = x("您確定要刪除這些帖子？");
$langmsg['js'][13] = x("輸入一些文本");
$langmsg['js'][14] = x("文本");
$langmsg['js'][15] = x("請輸入顏色。例如，紅色，黃色，藍色（或十六進制值）");
$langmsg['js'][16] = x("藍色");
$langmsg['js'][17] = x("輸入網址鏈接");
$langmsg['js'][18] = x("輸入要顯示的文本");
$langmsg['js'][19] = x("鏈接");
$langmsg['js'][20] = x("輸入字體大小");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("要顯示的文字？");
$langmsg['js'][23] = x("電子郵件地址");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("發電郵給我！");
$langmsg['js'][26] = x("引用的文字？");
$langmsg['js'][27] = x("引用");
$langmsg['js'][28] = x("您確定要刪除選定的評論？");
$langmsg['js'][29] = x("您確定要刪除選定的類別？");
$langmsg['js'][30] = x("使用表情符號...請稍候。");
$langmsg['js'][31] = x("您確定要刪除選定的文件？");
$langmsg['js'][32] = x("您確定要刪除選定的表情符號？");
$langmsg['js'][33] = x("你確定要刪除選定的過濾器（縣）？");


$langmsg['news'][0] = x("請輸入一個名稱。");
$langmsg['news'][1] = x("請輸入一個訊息。");
$langmsg['news'][2] = x("無效的安全密鑰");
$langmsg['news'][3] = x("選擇另一個名稱。");
$langmsg['news'][4] = x("無效的安全密鑰");
$langmsg['news'][5] = x("結果發現：");
$langmsg['news'][6] = x("新登記被禁用。");
$langmsg['news'][7] = x("您的帳戶已建立，您現在可以<a href=\"{adminpath}\">登錄</a> 。");
$langmsg['news'][8] = x("請輸入一個名稱。");
$langmsg['news'][9] = x("請輸入一個訊息。");
$langmsg['news'][10] = x("無效的安全密鑰");
$langmsg['news'][11] = x("選擇另一個名稱。");
$langmsg['news'][12] = x("無效的安全密鑰");
$langmsg['news'][13] = x("謝謝您的評價。");
$langmsg['news'][14] = x("您已經評價這篇文章。");
$langmsg['news'][15] = x("名字");
$langmsg['news'][16] = x("電子郵件：");
$langmsg['news'][17] = x("朋友的電子郵件：");
$langmsg['news'][18] = x("留言：");
$langmsg['news'][19] = x("嘿請看看我發現的這篇文章！");
$langmsg['news'][20] = x("發送給朋友");
$langmsg['news'][21] = x("電子郵件發送。");
$langmsg['news'][22] = x("請輸入您的姓名");
$langmsg['news'][23] = x("請輸入您的電子郵件地址");
$langmsg['news'][24] = x("請輸入訊息");
$langmsg['news'][25] = x("請輸入您朋友的電子郵件地址");
$langmsg['news'][27] = x("請輸入有效的電子郵件地址");
$langmsg['news'][28] = x("請輸入您朋友的有效電子郵件地址");
$langmsg['news'][29] = x("請輸入用戶名。");
$langmsg['news'][30] = x("該用戶名已經有人使用，請選擇另一個。");
$langmsg['news'][31] = x("該電子郵件地址已在使用，請選擇另一個。");
$langmsg['news'][32] = x("請輸入一個電子郵件地址。");
$langmsg['news'][33] = x("請輸入有效的電子郵件地址。");
$langmsg['news'][34] = x("請輸入密碼。");
$langmsg['news'][35] = x("請確認您的密碼。");
$langmsg['news'][36] = x("您輸入的密碼不匹配。");
$langmsg['news'][37] = x("無效的保安鍵。");
$langmsg['news'][38] = x("請稍候");
$langmsg['news'][39] = x("發送你的信息時出現問題，請聯繫管理員。");
$langmsg['news'][40] = x("您必須登錄才可張貼評論。");
$langmsg['news'][41] = x("新評論 {domain}");
$langmsg['news'][42] = x("名稱： {name} 電子郵件地址/網址： {email} IP：IP {ip} 消息： {message}");
$langmsg['news'][43] = x("新註冊的域名 {domain}");
$langmsg['news'][44] = x("名稱： {name} 郵箱： {email} IP：IP {ip}");
$langmsg['news'][45] = x("秒，然後遞交另一條消息。");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("名稱");
$langmsg['news'][48] = x("電子郵件 /網址");
$langmsg['news'][49] = x("信息");
$langmsg['news'][50] = x("輸入文章標題");
$langmsg['news'][51] = x("摘要");
$langmsg['news'][52] = x("未分類");
$langmsg['news'][53] = x("日期");
$langmsg['news'][54] = x("這篇文章的張貼日期");
$langmsg['news'][55] = x("存檔");



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


$langmsg['search'][0] = x("把新聞存檔");
$langmsg['search'][1] = x("已存檔新聞");
$langmsg['search'][2] = x("最新的排前");
$langmsg['search'][3] = x("最舊的排前");
$langmsg['search'][4] = x("搜索");
$langmsg['search'][5] = x("日期範圍");


$langmsg['install'][0] = x("數據庫連接信息");
$langmsg['install'][1] = x("輸入您的MySQL服務器信息如下。");
$langmsg['install'][2] = x("服務器：");
$langmsg['install'][3] = x("（通常是本地主機）");
$langmsg['install'][4] = x("用戶名：");
$langmsg['install'][5] = x("密碼：");
$langmsg['install'][6] = x("數據庫：");
$langmsg['install'][7] = x("測試連接");
$langmsg['install'][8] = x("連接到服務器：");
$langmsg['install'][9] = x("選擇數據庫：");
$langmsg['install'][10] = x("無法寫入db.php，請把這檔案的權限設為777");
$langmsg['install'][11] = x("帳戶信息");
$langmsg['install'][12] = x("輸入你的戶口資料。這將用於登錄。");
$langmsg['install'][13] = x("電子郵件：");
$langmsg['install'][14] = x("確認密碼：");
$langmsg['install'][15] = x("繼續");
$langmsg['install'][16] = x("請輸入用戶名");
$langmsg['install'][17] = x("請輸入一個電子郵件地址");
$langmsg['install'][18] = x("請輸入您的密碼");
$langmsg['install'][19] = x("按安裝完成安裝");
$langmsg['install'][20] = x("您的密碼不匹配");
$langmsg['install'][21] = x("安裝");
$langmsg['install'][22] = x("最後確定安裝");
$langmsg['install'][23] = x("成功！");
$langmsg['install'][24] = x("N-13新聞已安裝。");
$langmsg['install'][25] = x("登錄到管理控制台。");
$langmsg['install'][26] = x("端口：");
$langmsg['install'][27] = x("Socket：");
$langmsg['install'][28] = x("擴展：");
$langmsg['install'][29] = x("（留空為默認）");
$langmsg['install'][30] = x("安裝 ...請稍候。");
$langmsg['install'][31] = x("mysqli_connect功能沒有找到。");
$langmsg['install'][32] = x("pdo_mysql功能沒有找到。");
?>