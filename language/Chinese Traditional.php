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
$langmsg['menu'][11] = x("個人");
$langmsg['menu'][12] = x("外形");
$langmsg['menu'][13] = x("RSS訂閱");
$langmsg['menu'][14] = x("表情符號");
$langmsg['menu'][15] = x("系統");
$langmsg['menu'][16] = x("模板");
$langmsg['menu'][17] = x("詞過濾器");
$langmsg['menu'][18] = x("家");
$langmsg['menu'][19] = x("新聞");
$langmsg['menu'][20] = x("郵件");
$langmsg['menu'][21] = x("選項");
$langmsg['menu'][22] = x("幫助");
$langmsg['menu'][23] = x("註銷");
$langmsg['menu'][24] = x("文件上傳");


$langmsg['home'][0] = x("全球新聞統計如下。");
$langmsg['home'][1] = x("歡迎");
$langmsg['home'][2] = x("PHP的設置'選項magic_quotes_gpc'已被檢測為啟用。它建議您禁用此設置。");
$langmsg['home'][3] = x("PHP的設置'register_globals的'已被檢測為啟用。它建議您禁用此，因為它可能會導致安全問題和錯誤的發生。");
$langmsg['home'][4] = x("install.php了被探測到。請刪除這個文件。");
$langmsg['home'][5] = x("install.php了不能被刪除，請刪除這個文件手動");
$langmsg['home'][6] = x("總新聞：");
$langmsg['home'][7] = x("總評論：");
$langmsg['home'][8] = x("總用戶：");
$langmsg['home'][9] = x("總笑臉：");
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
$langmsg['home'][21] = x("嘗試刪除這個文件將自動？");
$langmsg['home'][22] = x("秒");
$langmsg['home'][23] = x("總圖片");
$langmsg['home'][24] = x("總文件");
$langmsg['home'][25] = x("總 RSS訂閱");


$langmsg['addnews'][0] = x("新聞預覽");
$langmsg['addnews'][1] = x("請輸入標題");
$langmsg['addnews'][2] = x("請選擇這個職位，如果允許的意見或不");
$langmsg['addnews'][3] = x("添加新聞");
$langmsg['addnews'][4] = x("請選擇類別");


$langmsg['editnews'][0] = x("編輯新聞");
$langmsg['editnews'][1] = x("顯示");
$langmsg['editnews'][2] = x("選項");
$langmsg['editnews'][3] = x("金額顯示");
$langmsg['editnews'][4] = x("排序方式");
$langmsg['editnews'][5] = x("命令");
$langmsg['editnews'][7] = x("標題");
$langmsg['editnews'][8] = x("作者");
$langmsg['editnews'][9] = x("分類");
$langmsg['editnews'][10] = x("日期");
$langmsg['editnews'][11] = x("批准");
$langmsg['editnews'][12] = x("評論");
$langmsg['editnews'][13] = x("[顯示]");
$langmsg['editnews'][14] = x("核准");
$langmsg['editnews'][15] = x("未經批准");
$langmsg['editnews'][16] = x("新聞說。");
$langmsg['editnews'][17] = x("選擇刪除的職位。");
$langmsg['editnews'][18] = x("選擇職位更新。");
$langmsg['editnews'][19] = x("新聞更新。");
$langmsg['editnews'][20] = x("殘疾人");
$langmsg['editnews'][21] = x("新聞故事。");
$langmsg['editnews'][22] = x("總數。");
$langmsg['editnews'][23] = x("查看計數重置為 0的選擇（各）條");
$langmsg['editnews'][24] = x("評級為選定的重置（各）條");
$langmsg['editnews'][25] = x("過濾器類");


$langmsg['newsform'][0] = x("添加您的新聞發布如下。");
$langmsg['newsform'][1] = x("標題：");
$langmsg['newsform'][2] = x("分類：");
$langmsg['newsform'][3] = x("短篇小說：");
$langmsg['newsform'][4] = x("故事：");
$langmsg['newsform'][5] = x("HTML的disabled");
$langmsg['newsform'][6] = x("的HTML啟用");
$langmsg['newsform'][7] = x("評論：");
$langmsg['newsform'][8] = x("切換日期");
$langmsg['newsform'][9] = x("切換短篇小說");
$langmsg['newsform'][16] = x("日期：");
$langmsg['newsform'][17] = x("切換存檔");
$langmsg['newsform'][18] = x("從來沒有存檔");
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
$langmsg['editcomments'][12] = x("知識產權");
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
$langmsg['privmsgs'][17] = x("請輸入用戶發送此郵件。");
$langmsg['privmsgs'][18] = x("請輸入標題此消息。");
$langmsg['privmsgs'][19] = x("請輸入一個訊息。");
$langmsg['privmsgs'][20] = x("郵件刪除。");
$langmsg['privmsgs'][21] = x("未讀郵件。");
$langmsg['privmsgs'][22] = x("郵件總數。");


$langmsg['options'][0] = x("選項");
$langmsg['options'][1] = x("新");
$langmsg['options'][2] = x("編輯");


$langmsg['bannedips'][0] = x("禁止IP地址");
$langmsg['bannedips'][1] = x("禁止IP地址。");
$langmsg['bannedips'][2] = x("知識產權");
$langmsg['bannedips'][3] = x("數額次攔截");
$langmsg['bannedips'][4] = x("添加一個新的IP地址。");
$langmsg['bannedips'][5] = x("禁止訊息。 （HTML是啟用）");
$langmsg['bannedips'][6] = x("IP地址：");
$langmsg['bannedips'][7] = x("該IP地址已被禁止。");
$langmsg['bannedips'][8] = x("IP地址被禁止。");
$langmsg['bannedips'][9] = x("IP地址刪除。");
$langmsg['bannedips'][10] = x("IP地址已重置。");
$langmsg['bannedips'][11] = x("禁止的信息更新。");


$langmsg['cats'][0] = x("分類");
$langmsg['cats'][1] = x("分類。");
$langmsg['cats'][2] = x("名字");
$langmsg['cats'][3] = x("文章");
$langmsg['cats'][4] = x("創建一個新的類別。");
$langmsg['cats'][5] = x("名稱：");
$langmsg['cats'][6] = x("以下類別的已被刪除：");
$langmsg['cats'][7] = x("請選擇其他名稱。");
$langmsg['cats'][8] = x("分類創建。");
$langmsg['cats'][9] = x("分類更新。");
$langmsg['cats'][10] = x("編輯您的類別如下。");
$langmsg['cats'][11] = x("圖片");
$langmsg['cats'][12] = x("文件");
$langmsg['cats'][13] = x("A類與該名稱已經存在，請選擇另一個。");


$langmsg['img'][0] = x("圖片上傳");
$langmsg['img'][1] = x("上傳新圖片");
$langmsg['img'][2] = x("上傳文件");
$langmsg['img'][3] = x("圖片共");
$langmsg['img'][4] = x("選擇圖片：");
$langmsg['img'][5] = x("圖片（擰）已刪除。");
$langmsg['img'][6] = x("圖片上傳");
$langmsg['img'][7] = x("有一個錯誤上傳文件，請再試一次。");
$langmsg['img'][8] = x("無效的文件擴展名。");
$langmsg['img'][9] = x("無效的圖片。");
$langmsg['img'][10] = x("從圖像中刪除類別。");
$langmsg['img'][11] = x("圖片（擰）添加到類。");
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
$langmsg['img'][27] = x("添加到類");
$langmsg['img'][28] = x("從類別中刪除");
$langmsg['img'][29] = x("上傳圖片");
$langmsg['img'][30] = x("的文件與該名稱已存在。");
$langmsg['img'][31] = x("所有類別");
$langmsg['img'][32] = x("無法寫入上傳目錄。文件模式此目錄 777");


$langmsg['personal'][0] = x("個人選項");
$langmsg['personal'][1] = x("修改您的帳戶信息如下。");
$langmsg['personal'][2] = x("個人設置");
$langmsg['personal'][3] = x("頭像網址：");
$langmsg['personal'][4] = x("電郵地址：");
$langmsg['personal'][5] = x("消息提醒：");
$langmsg['personal'][6] = x("得到通知的未讀郵件的初始登錄？");
$langmsg['personal'][7] = x("新密碼：");
$langmsg['personal'][8] = x("（留空以保持電流）");
$langmsg['personal'][9] = x("確認密碼：");
$langmsg['personal'][10] = x("電子郵件地址必須輸入。");
$langmsg['personal'][11] = x("設置更新。");
$langmsg['personal'][12] = x("密碼不匹配。");
$langmsg['personal'][13] = x("啟用所見即所得的編輯器？");


$langmsg['login'][0] = x("請登錄");
$langmsg['login'][1] = x("名稱：");
$langmsg['login'][2] = x("密碼：");
$langmsg['login'][3] = x("忘記密碼？");
$langmsg['login'][4] = x("記住我");
$langmsg['login'][5] = x("安全密鑰：");
$langmsg['login'][6] = x("註冊");
$langmsg['login'][7] = x("無效的安全密鑰");
$langmsg['login'][8] = x("無效的名稱或密碼");
$langmsg['login'][9] = x("下面這段代碼類型");


$langmsg['profile'][0] = x("編輯個人資料");
$langmsg['profile'][1] = x("編輯您的個人資料如下。");
$langmsg['profile'][2] = x("名稱：");
$langmsg['profile'][3] = x("年齡：");
$langmsg['profile'][4] = x("位置：");
$langmsg['profile'][5] = x("性別：");
$langmsg['profile'][6] = x("資料圖片：");
$langmsg['profile'][7] = x("網址：");
$langmsg['profile'][8] = x("愛好：");
$langmsg['profile'][9] = x("愛好：");
$langmsg['profile'][10] = x("職業：");
$langmsg['profile'][11] = x("最喜愛的報價：");
$langmsg['profile'][12] = x("男性");
$langmsg['profile'][13] = x("女性");
$langmsg['profile'][14] = x("資料更新。");
$langmsg['profile'][15] = x("無");


$langmsg['accounts'][0] = x("帳戶");
$langmsg['accounts'][1] = x("帳戶。");
$langmsg['accounts'][2] = x("用戶名");
$langmsg['accounts'][3] = x("訪問級別");
$langmsg['accounts'][4] = x("職位數目");
$langmsg['accounts'][5] = x("評論數");
$langmsg['accounts'][6] = x("創建一個新帳戶。");
$langmsg['accounts'][7] = x("戶名：");
$langmsg['accounts'][8] = x("電子郵件：");
$langmsg['accounts'][9] = x("新密碼：");
$langmsg['accounts'][10] = x("確認密碼：");
$langmsg['accounts'][11] = x("訪問級別：");
$langmsg['accounts'][12] = x("新帳戶。");
$langmsg['accounts'][13] = x("編輯帳戶如下。");
$langmsg['accounts'][14] = x("電子郵件地址必須輸入。");
$langmsg['accounts'][15] = x("帳戶更新。");
$langmsg['accounts'][16] = x("密碼不匹配。");
$langmsg['accounts'][17] = x("帳戶名必須輸入。");
$langmsg['accounts'][18] = x("帳戶名稱已存在。請選擇其他。");
$langmsg['accounts'][19] = x("阿必須輸入密碼。");
$langmsg['accounts'][20] = x("帳戶創建。");
$langmsg['accounts'][21] = x("下列帳戶已被刪除：");
$langmsg['accounts'][22] = x("您不能刪除自己的帳戶。");
$langmsg['accounts'][23] = x("（保留空白以維持電流）");
$langmsg['accounts'][24] = x("一個帳戶已經在使用該電子郵件地址，請選擇另一個。");
$langmsg['accounts'][25] = x("請輸入一個帳戶名");
$langmsg['accounts'][26] = x("檔");
$langmsg['accounts'][27] = x("圖片");


$langmsg['access'][0] = x("訪問級別");
$langmsg['access'][1] = x("創建一個新的訪問級別。");
$langmsg['access'][2] = x("名稱：");
$langmsg['access'][3] = x("哪些部分可以訪問這個水平？");
$langmsg['access'][4] = x("帳戶：");
$langmsg['access'][5] = x("訪問級別：");
$langmsg['access'][6] = x("禁止IP地址：");
$langmsg['access'][7] = x("分類：");
$langmsg['access'][8] = x("評論：");
$langmsg['access'][9] = x("說明：");
$langmsg['access'][10] = x("圖片上傳：");
$langmsg['access'][11] = x("新聞：");
$langmsg['access'][12] = x("Persional選項：");
$langmsg['access'][13] = x("私人訊息：");
$langmsg['access'][14] = x("簡介：");
$langmsg['access'][15] = x("RSS訂閱：");
$langmsg['access'][16] = x("笑臉：");
$langmsg['access'][17] = x("系統配置：");
$langmsg['access'][18] = x("模板：");
$langmsg['access'][19] = x("詞過濾器：");
$langmsg['access'][20] = x("哪些類別可以此訪問級別員額？");
$langmsg['access'][21] = x("所有：");
$langmsg['access'][22] = x("哪些職位可以編輯這個水平？");
$langmsg['access'][23] = x("管理員（全部）：");
$langmsg['access'][24] = x("國防部（自己+會員）：");
$langmsg['access'][25] = x("會員（自己的）：");
$langmsg['access'][26] = x("是否按本職位訪問級別自動批准？");
$langmsg['access'][27] = x("可以通過此訪問級別的職位？");
$langmsg['access'][28] = x("此訪問級別可以使用HTML？");
$langmsg['access'][29] = x("允許張貼而不選擇一個類別？");
$langmsg['access'][30] = x("訪問級別刪除：");
$langmsg['access'][31] = x("下列訪問級別並沒有被刪除，因為他們有1個或多個帳戶分配給他們：");
$langmsg['access'][32] = x("編輯下面的訪問級別。");
$langmsg['access'][33] = x("請輸入一個名稱此訪問級別。");
$langmsg['access'][34] = x("訪問級別更新。");
$langmsg['access'][35] = x("訪問級別與該名稱已經存在，請選擇另一個。");
$langmsg['access'][36] = x("請選擇哪些職位可以編輯這個水平。");
$langmsg['access'][37] = x("請選擇如果此訪問級別的職位，獲得批准的汽車");
$langmsg['access'][38] = x("請選擇訪問級別，如果這可以批准帖子");
$langmsg['access'][39] = x("請選擇如果此訪問級別可以使用HTML");
$langmsg['access'][40] = x("請選擇訪問級別，如果這能不選擇職位類別");
$langmsg['access'][41] = x("訪問級別創建。");
$langmsg['access'][42] = x("訪問級別。");
$langmsg['access'][43] = x("名字");
$langmsg['access'][44] = x("訪問");
$langmsg['access'][45] = x("帳戶");
$langmsg['access'][46] = x("會員");
$langmsg['access'][47] = x("主持人");
$langmsg['access'][48] = x("管理員");
$langmsg['access'][49] = x("文件上傳");
$langmsg['access'][50] = x("此訪問級別可以查看用戶的IP地址？");
$langmsg['access'][51] = x("哪些文件和圖像可以編輯此訪問級別？");
$langmsg['access'][52] = x("自己的");
$langmsg['access'][53] = x("全部");


$langmsg['accesslogs'][0] = x("訪問日誌");
$langmsg['accesslogs'][1] = x("用戶名");
$langmsg['accesslogs'][2] = x("嘗試");
$langmsg['accesslogs'][3] = x("知識產權");
$langmsg['accesslogs'][4] = x("日期");
$langmsg['accesslogs'][5] = x("訪問日誌");
$langmsg['accesslogs'][6] = x("成功");
$langmsg['accesslogs'][7] = x("Usuccessful");


$langmsg['filters'][0] = x("詞過濾器");
$langmsg['filters'][1] = x("過濾器添加。");
$langmsg['filters'][2] = x("過濾器刪除。");
$langmsg['filters'][3] = x("所有的話下面會過濾掉所有評論。");
$langmsg['filters'][4] = x("篩選字");
$langmsg['filters'][5] = x("替換為");
$langmsg['filters'][6] = x("刪除");
$langmsg['filters'][7] = x("添加新的過濾器");


$langmsg['rss'][0] = x("RSS訂閱");
$langmsg['rss'][1] = x("編輯您的RSS提要以下設置");
$langmsg['rss'][2] = x("這一消息是你的位置將展示你的新聞，例如http://yourdomain.com/或http://yourdomain.com /index");
$langmsg['rss'][3] = x("飼料名稱：");
$langmsg['rss'][4] = x("新聞位置：");
$langmsg['rss'][5] = x("標題您的RSS提要：");
$langmsg['rss'][6] = x("說明你的RSS提要：");
$langmsg['rss'][7] = x("字符編碼：");
$langmsg['rss'][8] = x("語言：");
$langmsg['rss'][9] = x("額職位，以顯示：");
$langmsg['rss'][10] = x("0 =所有");
$langmsg['rss'][11] = x("分類顯示：");
$langmsg['rss'][12] = x("顯示職位沒有被分配一個類別？");
$langmsg['rss'][13] = x("的RSS代碼：");
$langmsg['rss'][14] = x("編輯如何顯示您的供稿");
$langmsg['rss'][15] = x("顯示標題故事。");
$langmsg['rss'][16] = x("顯示了短篇小說的消息。");
$langmsg['rss'][17] = x("故事顯示了這一消息。");
$langmsg['rss'][18] = x("顯示每個類別的職位已被分配到。");
$langmsg['rss'][19] = x("顯示網址的具體職位。");
$langmsg['rss'][20] = x("顯示日期的故事發表。");
$langmsg['rss'][21] = x("顯示時區設置。");
$langmsg['rss'][22] = x("顯示每個帖子的時間戳。");
$langmsg['rss'][23] = x("顯示了作者的故事。");
$langmsg['rss'][24] = x("顯示用戶的頭像，如果他們有一個。");
$langmsg['rss'][25] = x("顯示了唯一的ID每個故事。");
$langmsg['rss'][26] = x("顯示金額為每則新聞的評論後。");
$langmsg['rss'][27] = x("請輸入feedname");
$langmsg['rss'][28] = x("請輸入新聞位置");
$langmsg['rss'][29] = x("請輸入標題");
$langmsg['rss'][30] = x("請輸入說明");
$langmsg['rss'][31] = x("請輸入字符編碼");
$langmsg['rss'][32] = x("請輸入語言");
$langmsg['rss'][33] = x("請輸入要顯示的金額");
$langmsg['rss'][34] = x("創建RSS提要");
$langmsg['rss'][35] = x("阿飼料與該名稱已經存在，請選擇");
$langmsg['rss'][36] = x("RSS提要更新");
$langmsg['rss'][37] = x("RSS訂閱");
$langmsg['rss'][38] = x("RSS提要（擰）已刪除。");
$langmsg['rss'][39] = x("名字");
$langmsg['rss'][40] = x("分類");
$langmsg['rss'][41] = x("網址");
$langmsg['rss'][42] = x("創建一個新的RSS Feed的。");
$langmsg['rss'][43] = x("標題顯示友好的故事");


$langmsg['smilies'][0] = x("表情符號");
$langmsg['smilies'][1] = x("這是有用的，如果您想更新的位置您的所有笑臉一次。");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("替換：");
$langmsg['smilies'][4] = x("替換為：");
$langmsg['smilies'][5] = x("所有的路徑更新。");
$langmsg['smilies'][6] = x("創建一個新的笑臉");
$langmsg['smilies'][7] = x("路徑：");
$langmsg['smilies'][8] = x("鍵碼：");
$langmsg['smilies'][9] = x("請輸入路徑的笑臉。");
$langmsg['smilies'][10] = x("請輸入這一個keycode笑臉。");
$langmsg['smilies'][11] = x("鍵碼已在使用。請選擇一個不同的鍵碼。");
$langmsg['smilies'][12] = x("笑臉說。");
$langmsg['smilies'][13] = x("您確定要刪除此笑臉？");
$langmsg['smilies'][14] = x("笑臉刪除。");
$langmsg['smilies'][15] = x("下面的編輯笑臉");
$langmsg['smilies'][16] = x("笑臉：");
$langmsg['smilies'][17] = x("笑臉更新。");
$langmsg['smilies'][18] = x("表情符號已被刪除");
$langmsg['smilies'][19] = x("請選擇你的笑臉要修改。");
$langmsg['smilies'][20] = x("笑臉");
$langmsg['smilies'][21] = x("插入一個新的笑臉。");
$langmsg['smilies'][22] = x("更新路徑的所有笑臉");


$langmsg['system'][0] = x("系統配置");
$langmsg['system'][1] = x("修改系統配置。");
$langmsg['system'][2] = x("新聞");
$langmsg['system'][3] = x("金額新聞每頁：");
$langmsg['system'][4] = x("什麼順序新聞顯示在：");
$langmsg['system'][5] = x("降序");
$langmsg['system'][6] = x("升序");
$langmsg['system'][7] = x("日期和時間格式的新聞：");
$langmsg['system'][8] = x("看這裡");
$langmsg['system'][9] = x("顯示化身：");
$langmsg['system'][10] = x("分隔符時，顯示不同類別的新聞：");
$langmsg['system'][11] = x("評論");
$langmsg['system'][12] = x("額評論每頁：");
$langmsg['system'][13] = x("為了什麼意見都顯示在：");
$langmsg['system'][14] = x("日期和時間格式評論：");
$langmsg['system'][15] = x("最大長度的評論：");
$langmsg['system'][16] = x("查看評論在新窗口：");
$langmsg['system'][17] = x("延時後張貼評論（垃圾郵件防護）：");
$langmsg['system'][18] = x("秒");
$langmsg['system'][19] = x("垃圾郵件：");
$langmsg['system'][20] = x("新評論信息：");
$langmsg['system'][21] = x("新評論批准郵件：");
$langmsg['system'][22] = x("使用影像驗證上的評論的形式：");
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
$langmsg['system'][39] = x("獲得電子郵件通知的新評論：");
$langmsg['system'][40] = x("獲得電子郵件通知新註冊：");
$langmsg['system'][41] = x("只允許註冊用戶評論：");
$langmsg['system'][42] = x("發送通知給這個郵件地址：");
$langmsg['system'][43] = x("允許上傳文件類型的文件：");
$langmsg['system'][44] = x("獲得電子郵件通知未經批准的新聞員額：");
$langmsg['system'][45] = x("公共密鑰");
$langmsg['system'][46] = x("私人密鑰");
$langmsg['system'][47] = x("腳本的路徑");
$langmsg['system'][48] = x("允許註冊用戶刪除自己的意見：");
$langmsg['system'][49] = x("使用影像驗證該指數登錄表單：");
$langmsg['system'][50] = x("使用圖像的核實登記表：");
$langmsg['system'][51] = x("日期和時間格式的文件：");
$langmsg['system'][52] = x("顯示'技術支持'下方的新聞：");


$langmsg['recover'][0] = x("密碼恢復");
$langmsg['recover'][1] = x("輸入電子郵件地址的帳戶您要重置密碼。");
$langmsg['recover'][2] = x("電子郵件：");
$langmsg['recover'][3] = x("您或有人要求重新設置密碼按照下面的鏈接這樣做。");
$langmsg['recover'][4] = x("按此重置密碼");
$langmsg['recover'][5] = x("一封電子郵件已經發送到");
$langmsg['recover'][6] = x("一個與該電子郵件帳戶不存在，請聯繫管理員。");
$langmsg['recover'][7] = x("新密碼");
$langmsg['recover'][8] = x("請輸入您的新密碼。");
$langmsg['recover'][9] = x("無法恢復發送電子郵件，請與系統管理員聯繫。");
$langmsg['recover'][10] = x("確認密碼：");
$langmsg['recover'][11] = x("密碼不匹配。");
$langmsg['recover'][12] = x("您的密碼已更新。");
$langmsg['recover'][13] = x("進一步指示檢索您的帳戶。");


$langmsg['templates'][0] = x("模板");
$langmsg['templates'][1] = x("創建一個新的模板。");
$langmsg['templates'][2] = x("名稱：");
$langmsg['templates'][3] = x("改變了你的消息顯示。");
$langmsg['templates'][4] = x("顯示標題故事。");
$langmsg['templates'][5] = x("顯示了短篇小說的消息。");
$langmsg['templates'][6] = x("故事顯示了這一消息。");
$langmsg['templates'][7] = x("顯示日期的故事發表。");
$langmsg['templates'][8] = x("顯示每個類別的職位已被分配到。");
$langmsg['templates'][9] = x("顯示了作者的故事。");
$langmsg['templates'][10] = x("顯示用戶的頭像，如果他們有一個。");
$langmsg['templates'][11] = x("顯示了唯一的ID每個故事。");
$langmsg['templates'][12] = x("顯示IP地址的作者。 （只顯示如果您登錄）");
$langmsg['templates'][13] = x("顯示鏈接來閱讀全文後");
$langmsg['templates'][14] = x("將顯示您的電子郵件地址。");
$langmsg['templates'][15] = x("將創建一個鏈接到您的電子郵件地址。");
$langmsg['templates'][16] = x("將創建一個鏈接到您的個人資料。");
$langmsg['templates'][17] = x("顯示金額為每則新聞的評論後。");
$langmsg['templates'][18] = x("將創建一個鏈接到的意見。");
$langmsg['templates'][19] = x("任何把這些標籤之間將只顯示在登錄英寸");
$langmsg['templates'][20] = x("表情符號路徑");
$langmsg['templates'][21] = x("評論");
$langmsg['templates'][22] = x("如何更改顯示的評論。");
$langmsg['templates'][23] = x("顯示作者的評論。");
$langmsg['templates'][24] = x("顯示的信息。");
$langmsg['templates'][25] = x("顯示用戶的頭像，如果他們有一個。");
$langmsg['templates'][26] = x("顯示IP地址的作者。 （只顯示如果您登錄）");
$langmsg['templates'][27] = x("顯示了唯一的ID每個評論的。");
$langmsg['templates'][28] = x("顯示的電子郵件地址的用戶誰評論。");
$langmsg['templates'][29] = x("將創建一個鏈接到用戶的電子郵件。");
$langmsg['templates'][30] = x("顯示的日期是發表評論。");
$langmsg['templates'][31] = x("任何把這些標籤之間將只顯示在登錄英寸");
$langmsg['templates'][32] = x("評論表");
$langmsg['templates'][33] = x("這一點很重要時，編輯這使所有的輸入字段名稱和ID相同，否則它將無法工作。還要注意的形式onsubmit屬性useajax = ''，有或沒有決定是否使用Ajax是當用戶提交評論。");
$langmsg['templates'][34] = x("顯示的ID的消息後。");
$langmsg['templates'][35] = x("顯示類ID的消息後。");
$langmsg['templates'][36] = x("將顯示您的用戶名，如果登錄英寸");
$langmsg['templates'][37] = x("您的電子郵件將顯示在登錄英寸");
$langmsg['templates'][38] = x("將顯示消息。");
$langmsg['templates'][39] = x("將顯示所有的笑臉。");
$langmsg['templates'][40] = x("新聞分頁");
$langmsg['templates'][44] = x("評論分頁");
$langmsg['templates'][45] = x("顯示以前的鏈接如果有任何。");
$langmsg['templates'][46] = x("顯示下一個環節，如果有任何。");
$langmsg['templates'][47] = x("將顯示的網頁數量，例如：1 2 3 4。");
$langmsg['templates'][48] = x("概況");
$langmsg['templates'][49] = x("如何修改用戶配置文件的顯示。");
$langmsg['templates'][50] = x("顯示用戶的用戶名。");
$langmsg['templates'][51] = x("顯示用戶的名稱。");
$langmsg['templates'][52] = x("顯示了用戶的年齡。");
$langmsg['templates'][53] = x("顯示用戶的位置。");
$langmsg['templates'][54] = x("顯示了用戶的性別。");
$langmsg['templates'][55] = x("創建一個鏈接到用戶的主頁。");
$langmsg['templates'][56] = x("顯示了用戶的利益。");
$langmsg['templates'][57] = x("顯示了用戶的興趣愛好。");
$langmsg['templates'][58] = x("顯示了用戶的佔領。");
$langmsg['templates'][59] = x("顯示用戶喜愛的報價。");
$langmsg['templates'][60] = x("顯示用戶的個人資料圖片。");
$langmsg['templates'][61] = x("新聞結構");
$langmsg['templates'][62] = x("在這裡，您可以控制phyiscal順序每個新聞元素如何顯示，例如，如果您希望pagintation上面要顯示您的新聞以及它下面你可以在這裡。");
$langmsg['templates'][63] = x("顯示您的新聞職位。");
$langmsg['templates'][64] = x("顯示新聞pagintation。");
$langmsg['templates'][65] = x("評論結構");
$langmsg['templates'][66] = x("在這裡，您可以控制phyiscal順序每個新聞內容如何顯示在查看評論，例如，如果您希望pagintation上面要顯示你的意見，以及它下面你可以在這裡。");
$langmsg['templates'][67] = x("顯示單一的新聞崗位當觀看評論");
$langmsg['templates'][68] = x("顯示您的意見。");
$langmsg['templates'][69] = x("顯示評論pagintation。");
$langmsg['templates'][70] = x("顯示評論的形式。");
$langmsg['templates'][71] = x("登記表");
$langmsg['templates'][72] = x("這是您控制的形式，使用戶能夠註冊。重要的是要保持所有的輸入字段名稱和ID相同否則將無法工作。");
$langmsg['templates'][73] = x("用戶輸入用戶名。");
$langmsg['templates'][74] = x("用戶輸入密碼。");
$langmsg['templates'][75] = x("顯示錯誤信息如果一個字段為空。");
$langmsg['templates'][76] = x("請輸入一個名稱。");
$langmsg['templates'][77] = x("模板創建的。");
$langmsg['templates'][78] = x("請選擇其他名稱。");
$langmsg['templates'][79] = x("編輯模板下面的改變您的新聞和評論顯示。");
$langmsg['templates'][80] = x("新聞");
$langmsg['templates'][81] = x("模板更新。");
$langmsg['templates'][82] = x("模板與該名稱已存在。請選擇其他名稱");
$langmsg['templates'][83] = x("無法刪除的模板多數民眾贊成在使用");
$langmsg['templates'][84] = x("選擇模板（擰）已刪除");
$langmsg['templates'][85] = x("模板（虜）複製");
$langmsg['templates'][86] = x("選擇一個模板名稱下面的編輯。");
$langmsg['templates'][87] = x("模板選擇。");
$langmsg['templates'][88] = x("名字");
$langmsg['templates'][89] = x("選擇");
$langmsg['templates'][90] = x("創建一個新的模板。");
$langmsg['templates'][91] = x("選擇");
$langmsg['templates'][92] = x("顯示了意見，每個故事。");
$langmsg['templates'][93] = x("評星顯示圖像。");
$langmsg['templates'][94] = x("顯示當前的評級為故事。");
$langmsg['templates'][95] = x("顯示金額時代的故事，先後被評為。");
$langmsg['templates'][96] = x("顯示了評級的形式。");
$langmsg['templates'][98] = x("顯示發送形成。");
$langmsg['templates'][99] = x("顯示用戶的位置");
$langmsg['templates'][100] = x("上傳文件");
$langmsg['templates'][101] = x("控制您上傳的文件顯示。");
$langmsg['templates'][102] = x("日期的文件被上傳。");
$langmsg['templates'][103] = x("標題文件。");
$langmsg['templates'][104] = x("文件名的文件。");
$langmsg['templates'][105] = x("文件大小的文件。");
$langmsg['templates'][106] = x("網址下載該文件。");
$langmsg['templates'][107] = x("用戶的上傳。");
$langmsg['templates'][108] = x("倍金額的文件已被下載。");
$langmsg['templates'][109] = x("查看文件鏈接到新聞發布。");
$langmsg['templates'][110] = x("顯示每個文件鏈接到新聞發布。");
$langmsg['templates'][111] = x("只顯示第3頁第一次");
$langmsg['templates'][112] = x("鏈接到第一頁，顯示如果不是目前在第一頁。");
$langmsg['templates'][113] = x("鏈接到最後一頁，如果目前不顯示頁上的最後一頁。");
$langmsg['templates'][114] = x("顯示的數目字為這個職位");
$langmsg['templates'][115] = x("標題顯示友好的故事");
$langmsg['templates'][116] = x("顯示 reCAPTCHA元素");
$langmsg['templates'][117] = x("創建一個鏈接，刪除評論。");
$langmsg['templates'][118] = x("登錄表單顯示只有登錄是必需的。");
$langmsg['templates'][119] = x("登錄表單");
$langmsg['templates'][120] = x("控制登錄窗體顯示。");
$langmsg['templates'][121] = x("顯示用戶輸入的電子郵件。");
$langmsg['templates'][122] = x("顯示登錄錯誤信息。");
$langmsg['templates'][123] = x("顯示 reCAPTCHA元素。");
$langmsg['templates'][124] = x("顯示用戶輸入的用戶名。");
$langmsg['templates'][125] = x("如果記錄顯示用戶名。");
$langmsg['templates'][126] = x("顯示搜索列表。所有名稱和ID必須保持不變。");
$langmsg['templates'][127] = x("顯示數字為每個搜索結果");
$langmsg['templates'][128] = x("格式如何得到搜索結果顯示。獲取重複每個結果。");
$langmsg['templates'][129] = x("候補之間的一個或兩個輸出的每一行。");
$langmsg['templates'][130] = x("顯示當前的頁碼。");
$langmsg['templates'][131] = x("顯示以前的頁碼。");
$langmsg['templates'][132] = x("顯示下一個頁碼。");
$langmsg['templates'][133] = x("顯示友好的標題新聞文章。");
$langmsg['templates'][134] = x("搜索表單");
$langmsg['templates'][135] = x("搜索結果");
$langmsg['templates'][136] = x("上傳文件");


$langmsg['uploadedfiles'][0] = x("文件上傳");
$langmsg['uploadedfiles'][1] = x("上傳新文件");
$langmsg['uploadedfiles'][2] = x("上傳文件");
$langmsg['uploadedfiles'][4] = x("選擇一個文件：");
$langmsg['uploadedfiles'][5] = x("文件（擰）已刪除。");
$langmsg['uploadedfiles'][6] = x("文件上傳");
$langmsg['uploadedfiles'][7] = x("有一個錯誤上傳文件，請再試一次。");
$langmsg['uploadedfiles'][8] = x("無效的文件擴展名。");
$langmsg['uploadedfiles'][9] = x("無效的文件。");
$langmsg['uploadedfiles'][10] = x("從文件中刪除類別。");
$langmsg['uploadedfiles'][11] = x("文件（擰）添加到類。");
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
$langmsg['uploadedfiles'][30] = x("的文件與該名稱已存在。");
$langmsg['uploadedfiles'][31] = x("復位下載：");
$langmsg['uploadedfiles'][32] = x("所有類別");
$langmsg['uploadedfiles'][33] = x("下載");
$langmsg['uploadedfiles'][34] = x("上傳");


$langmsg['admindata'][0] = x("幫助");
$langmsg['admindata'][1] = x("添加新聞");
$langmsg['admindata'][2] = x("私人信息");
$langmsg['admindata'][3] = x("編輯新聞");
$langmsg['admindata'][4] = x("編輯評論");


$langmsg['submitfield'][0] = x("行");
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


$langmsg['js'][0] = x("您確定要刪除此圖像的類別？");
$langmsg['js'][1] = x("您確定要刪除選定的圖像（擰）？");
$langmsg['js'][2] = x("您確定要刪除選定的郵件（擰）？");
$langmsg['js'][3] = x("您確定要刪除選定的模板（擰）？");
$langmsg['js'][4] = x("您確定要刪除這些IP地址？");
$langmsg['js'][5] = x("您確定要重置封鎖指望這些IP地址");
$langmsg['js'][6] = x("您確定要刪除這些訪問級別（擰）？");
$langmsg['js'][7] = x("您確定要刪除這些類別？");
$langmsg['js'][8] = x("您確定要刪除這些類別的職位，在其中？");
$langmsg['js'][9] = x("您確定要刪除這些類別？");
$langmsg['js'][10] = x("您確定要刪除這些賬戶（等）？");
$langmsg['js'][11] = x("您確定要刪除這些帳戶（S）和職位？");
$langmsg['js'][12] = x("您確定要刪除這些職位（擰）？");
$langmsg['js'][13] = x("輸入一些文本");
$langmsg['js'][14] = x("文本");
$langmsg['js'][15] = x("請輸入顏色。例如，紅色，黃色，藍色（或什至十六進制值）");
$langmsg['js'][16] = x("藍色");
$langmsg['js'][17] = x("輸入網址鏈接");
$langmsg['js'][18] = x("輸入要顯示的文本");
$langmsg['js'][19] = x("鏈接");
$langmsg['js'][20] = x("輸入字體大小");
$langmsg['js'][21] = x("12pt");
$langmsg['js'][22] = x("要顯示的文字？");
$langmsg['js'][23] = x("電子郵件地址");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("郵件我！");
$langmsg['js'][26] = x("引用的文字？");
$langmsg['js'][27] = x("引用");
$langmsg['js'][28] = x("您確定要刪除選定的評論（縣）？");
$langmsg['js'][29] = x("您確定要刪除選定的類別？");
$langmsg['js'][30] = x("使用表情符號...請稍候。");
$langmsg['js'][31] = x("您確定要刪除選定的文件（擰）？");
$langmsg['js'][32] = x("您確定要刪除選定的笑臉？");
$langmsg['js'][33] = x("你確定要刪除選定的過濾器（縣）？");


$langmsg['news'][0] = x("請輸入一個名稱。");
$langmsg['news'][1] = x("請輸入一個訊息。");
$langmsg['news'][2] = x("無效的安全密鑰");
$langmsg['news'][3] = x("選擇另一個名稱。");
$langmsg['news'][4] = x("無效的安全密鑰");
$langmsg['news'][5] = x("結果發現：");
$langmsg['news'][6] = x("新登記被禁用。");
$langmsg['news'][7] = x("您的帳戶已建立，您現在可以<a href=\"{adminpath}\">登錄這裡</a> 。");
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
$langmsg['news'][19] = x("嘿查看本文中，我發現！");
$langmsg['news'][20] = x("發送給朋友");
$langmsg['news'][21] = x("電子郵件發送。");
$langmsg['news'][22] = x("請輸入您的姓名");
$langmsg['news'][23] = x("請輸入您的電子郵件地址");
$langmsg['news'][24] = x("請輸入訊息");
$langmsg['news'][25] = x("請輸入您朋友的電子郵件地址");
$langmsg['news'][27] = x("請輸入有效的電子郵件地址");
$langmsg['news'][28] = x("請輸入您的朋友有效的電子郵件地址");
$langmsg['news'][29] = x("請輸入用戶名。");
$langmsg['news'][30] = x("該用戶名已經有人使用，請選擇另一個。");
$langmsg['news'][31] = x("該電子郵件地址已在使用，請選擇另一個。");
$langmsg['news'][32] = x("請輸入一個電子郵件地址。");
$langmsg['news'][33] = x("請輸入有效的電子郵件地址。");
$langmsg['news'][34] = x("請輸入密碼。");
$langmsg['news'][35] = x("請確認您的密碼。");
$langmsg['news'][36] = x("您輸入的密碼不匹配。");
$langmsg['news'][37] = x("無效安全的關鍵。");
$langmsg['news'][38] = x("請稍候");
$langmsg['news'][39] = x("有一個問題，發送你的信息，請聯繫管理員。");
$langmsg['news'][40] = x("您必須登錄張貼評論。");
$langmsg['news'][41] = x("新評論 {domain}");
$langmsg['news'][42] = x("名稱： {name} 電子郵件地址/網址： {email} 知識產權：知識產權 {ip} 消息： {message}");
$langmsg['news'][43] = x("新註冊的域名 {domain}");
$langmsg['news'][44] = x("名稱： {name} 郵箱： {email} 知識產權：知識產權 {ip}");
$langmsg['news'][45] = x("秒，然後遞交另一條消息。");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("名稱");
$langmsg['news'][48] = x("電子郵件 /網址");
$langmsg['news'][49] = x("信息");
$langmsg['news'][50] = x("輸入文章標題");
$langmsg['news'][51] = x("摘要");
$langmsg['news'][52] = x("未分類");
$langmsg['news'][53] = x("日期");
$langmsg['news'][54] = x("這篇文章被張貼日期");
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


$langmsg['search'][0] = x("主動消息");
$langmsg['search'][1] = x("存檔新聞");
$langmsg['search'][2] = x("最新優先");
$langmsg['search'][3] = x("舊的排在前面");
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
$langmsg['install'][10] = x("無法寫入db.php，請文件模式為777此文件");
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
$langmsg['install'][24] = x("ñ - 13新聞已安裝。");
$langmsg['install'][25] = x("登錄到管理領域。");
$langmsg['install'][26] = x("港口：");
$langmsg['install'][27] = x("插座：");
$langmsg['install'][28] = x("擴展：");
$langmsg['install'][29] = x("（留空為默認）");
$langmsg['install'][30] = x("安裝 ...請稍候。");
$langmsg['install'][31] = x("該 mysqli_connect功能沒有被發現。");
$langmsg['install'][32] = x("該 pdo_mysql功能沒有被發現。");
?>