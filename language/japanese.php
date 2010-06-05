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
#   LANGUAGE    Japanese                                #
#   VERSION     3.6                                     #
#   AUTHOR      chris@network-13.com                    #
#                                                       #
#   Any words you see wrapped in { } braces,            #
#   for example {totalnews} need to be left like that.  #
#                                                       #
#########################################################

global $langmsg;
$langmsg = array();

$langmsg['menu'][0] = x("ニュースを追加");
$langmsg['menu'][1] = x("ニュース編集");
$langmsg['menu'][2] = x("アーカイブ");
$langmsg['menu'][3] = x("新しいメッセージ");
$langmsg['menu'][4] = x("受信トレイ");
$langmsg['menu'][5] = x("トレイ");
$langmsg['menu'][6] = x("アカウント");
$langmsg['menu'][7] = x("アクセスレベル");
$langmsg['menu'][8] = x("禁止IPアドレス");
$langmsg['menu'][9] = x("カテゴリ");
$langmsg['menu'][10] = x("画像のアップロード");
$langmsg['menu'][11] = x("パーソナル");
$langmsg['menu'][12] = x("横顔");
$langmsg['menu'][13] = x("RSSフィード");
$langmsg['menu'][14] = x("スマイリー");
$langmsg['menu'][15] = x("システム");
$langmsg['menu'][16] = x("テンプレート");
$langmsg['menu'][17] = x("Wordのフィルタ");
$langmsg['menu'][18] = x("家");
$langmsg['menu'][19] = x("ニュース");
$langmsg['menu'][20] = x("メッセージ");
$langmsg['menu'][21] = x("オプション");
$langmsg['menu'][22] = x("ヘルプ");
$langmsg['menu'][23] = x("ログアウト");
$langmsg['menu'][24] = x("ファイルをアップロード");


$langmsg['home'][0] = x("以下のグローバルニュースを見てみよう。");
$langmsg['home'][1] = x("ようこそ");
$langmsg['home'][2] = x("PHP設定'magic_quotes_gpcの'として有効に検出されました。これは、この設定を無効にすることをお勧め。");
$langmsg['home'][3] = x("register_globalsが'として有効に検出されているPHP設定'。それはあなたは、このように発生するセキュリティ上の問題やエラーを引き起こす可能性が無効にお勧めします。");
$langmsg['home'][4] = x("install.phpに検出されました。このファイルを削除します。");
$langmsg['home'][5] = x("install.phpを、手動でこのファイルを削除して削除することはできません");
$langmsg['home'][6] = x("トータルニュース：");
$langmsg['home'][7] = x("総コメント数：");
$langmsg['home'][8] = x("合計ユーザー数：");
$langmsg['home'][9] = x("合計スマイリー：");
$langmsg['home'][10] = x("合計フィルタ：");
$langmsg['home'][11] = x("トータルカテゴリ：");
$langmsg['home'][12] = x("合計テンプレート：");
$langmsg['home'][13] = x("トータルアクセスレベル：");
$langmsg['home'][14] = x("データベースへの接続：");
$langmsg['home'][15] = x("すべてのテーブルの最適化：");
$langmsg['home'][16] = x("現在のバージョン：");
$langmsg['home'][17] = x("最新バージョン：");
$langmsg['home'][18] = x("プロフィールへのアクセスログ");
$langmsg['home'][19] = x("クエリのタイム：");
$langmsg['home'][20] = x("未読メッセージ");
$langmsg['home'][21] = x("自動的にこのファイルを削除してみてください？");
$langmsg['home'][22] = x("秒");
$langmsg['home'][23] = x("合計画像");
$langmsg['home'][24] = x("全ファイル");
$langmsg['home'][25] = x("合計RSSフィード");


$langmsg['addnews'][0] = x("ニュースプレビュー");
$langmsg['addnews'][1] = x("してくださいタイトルを入力します");
$langmsg['addnews'][2] = x("この記事のコメントかどうかできるように選択してください");
$langmsg['addnews'][3] = x("ニュースを追加");
$langmsg['addnews'][4] = x("してくださいカテゴリを選択");


$langmsg['editnews'][0] = x("ニュース編集");
$langmsg['editnews'][1] = x("表示");
$langmsg['editnews'][2] = x("オプション");
$langmsg['editnews'][3] = x("量を表示する");
$langmsg['editnews'][4] = x("並べ替え");
$langmsg['editnews'][5] = x("順番");
$langmsg['editnews'][7] = x("タイトル");
$langmsg['editnews'][8] = x("著者");
$langmsg['editnews'][9] = x("カテゴリ");
$langmsg['editnews'][10] = x("日付");
$langmsg['editnews'][11] = x("承認");
$langmsg['editnews'][12] = x("コメント");
$langmsg['editnews'][13] = x("[表示]");
$langmsg['editnews'][14] = x("承認");
$langmsg['editnews'][15] = x("未承認");
$langmsg['editnews'][16] = x("ニュースを追加しました。");
$langmsg['editnews'][17] = x("選択した記事を削除した。");
$langmsg['editnews'][18] = x("選択した記事を更新しました。");
$langmsg['editnews'][19] = x("ニュースを更新しました。");
$langmsg['editnews'][20] = x("バリアフリー");
$langmsg['editnews'][21] = x("ニュース。");
$langmsg['editnews'][22] = x("合計です。");
$langmsg['editnews'][23] = x("選択した記事（掲載を0にビューのカウントをリセット）");
$langmsg['editnews'][24] = x("格付けは、選択した項目（複数可）をリセットする");


$langmsg['newsform'][0] = x("以下のニュースのポストを追加します。");
$langmsg['newsform'][1] = x("タイトル：");
$langmsg['newsform'][2] = x("カテゴリ：");
$langmsg['newsform'][3] = x("ショートストーリー：");
$langmsg['newsform'][4] = x("ストーリー：");
$langmsg['newsform'][5] = x("HTMLの使用不可");
$langmsg['newsform'][6] = x("HTMLの有効化");
$langmsg['newsform'][7] = x("コメント数：");
$langmsg['newsform'][8] = x("トグル日");
$langmsg['newsform'][9] = x("トグル短編小説");
$langmsg['newsform'][16] = x("日付：");
$langmsg['newsform'][17] = x("トグルアーカイブ");
$langmsg['newsform'][18] = x("決してアーカイブ");
$langmsg['newsform'][19] = x("ファイルをアップロード");
$langmsg['newsform'][20] = x("ダウンロード");
$langmsg['newsform'][21] = x("アップロード");


$langmsg['editcomments'][0] = x("[編集]コメント");
$langmsg['editcomments'][1] = x("編集して、下記のコメント。");
$langmsg['editcomments'][2] = x("著者：");
$langmsg['editcomments'][3] = x("Eメール：");
$langmsg['editcomments'][4] = x("メッセージ：");
$langmsg['editcomments'][5] = x("コメントを更新しました。");
$langmsg['editcomments'][6] = x("コメントを削除しました。");
$langmsg['editcomments'][7] = x("コメントを更新しました。");
$langmsg['editcomments'][8] = x("合計でコメント。");
$langmsg['editcomments'][9] = x("メッセージ");
$langmsg['editcomments'][10] = x("日付");
$langmsg['editcomments'][11] = x("承認");
$langmsg['editcomments'][12] = x("IPアドレス");
$langmsg['editcomments'][13] = x("承認");
$langmsg['editcomments'][14] = x("未承認");
$langmsg['editcomments'][15] = x("場所：");


$langmsg['privmsgs'][0] = x("プライベートメッセージ");
$langmsg['privmsgs'][1] = x("受信トレイ");
$langmsg['privmsgs'][2] = x("トレイ");
$langmsg['privmsgs'][3] = x("新しいメッセージ");
$langmsg['privmsgs'][4] = x("お持ち");
$langmsg['privmsgs'][5] = x("タイトル");
$langmsg['privmsgs'][6] = x("〜から");
$langmsg['privmsgs'][7] = x("送った");
$langmsg['privmsgs'][8] = x("〜へ");
$langmsg['privmsgs'][9] = x("このメッセージに返信");
$langmsg['privmsgs'][10] = x("新しいプライベートメッセージが。");
$langmsg['privmsgs'][11] = x("送信先：");
$langmsg['privmsgs'][12] = x("タイトル：");
$langmsg['privmsgs'][13] = x("メッセージ：");
$langmsg['privmsgs'][14] = x("例えば、'はuser1、user2は、同様の作業'");
$langmsg['privmsgs'][15] = x("メッセージをプレビューします。");
$langmsg['privmsgs'][16] = x("メッセージは、次のユーザーに送られます。");
$langmsg['privmsgs'][17] = x("喜ばせるためには、このメッセージを送信するユーザーを入力します。");
$langmsg['privmsgs'][18] = x("このメッセージのタイトルを入力します。");
$langmsg['privmsgs'][19] = x("してくださいメッセージを入力します。");
$langmsg['privmsgs'][20] = x("メッセージが削除されます。");
$langmsg['privmsgs'][21] = x("未読のメッセージです。");
$langmsg['privmsgs'][22] = x("合計でメッセージを。");


$langmsg['options'][0] = x("オプション");


$langmsg['bannedips'][0] = x("禁止IPアドレス");
$langmsg['bannedips'][1] = x("禁止IPアドレス。");
$langmsg['bannedips'][2] = x("IPアドレス");
$langmsg['bannedips'][3] = x("量の倍ブロック");
$langmsg['bannedips'][4] = x("新しいIPアドレスを追加します。");
$langmsg['bannedips'][5] = x("禁止メッセージです。 （html）を有効になって");
$langmsg['bannedips'][6] = x("IPアドレス：");
$langmsg['bannedips'][7] = x("そのIPアドレスは、既に禁止されて。");
$langmsg['bannedips'][8] = x("IPアドレスを禁止アドレスです。");
$langmsg['bannedips'][9] = x("IPアドレスを削除アドレス。");
$langmsg['bannedips'][10] = x("IPアドレスがリセットされました。");
$langmsg['bannedips'][11] = x("禁止のメッセージを更新しました。");


$langmsg['cats'][0] = x("カテゴリ");
$langmsg['cats'][1] = x("カテゴリー。");
$langmsg['cats'][2] = x("名前");
$langmsg['cats'][3] = x("関連記事");
$langmsg['cats'][4] = x("新しいカテゴリを作成します。");
$langmsg['cats'][5] = x("名前：");
$langmsg['cats'][6] = x("次のカテゴリに含まれています：");
$langmsg['cats'][7] = x("別の名前を選択します。");
$langmsg['cats'][8] = x("カテゴリーを作成しました。");
$langmsg['cats'][9] = x("カテゴリーを更新しました。");
$langmsg['cats'][10] = x("あなたのカテゴリの下を編集します。");
$langmsg['cats'][11] = x("画像");
$langmsg['cats'][12] = x("ファイル");
$langmsg['cats'][13] = x("既に存在する名前のカテゴリは、別のを選択してください。");


$langmsg['img'][0] = x("画像のアップロード");
$langmsg['img'][1] = x("アップロードする新しいイメージ");
$langmsg['img'][2] = x("ファイルのアップロード");
$langmsg['img'][3] = x("の画像を合計");
$langmsg['img'][4] = x("イメージを選択します：");
$langmsg['img'][5] = x("画像（秒）を削除しました。");
$langmsg['img'][6] = x("画像をアップロード");
$langmsg['img'][7] = x("エラーが発生したファイルをアップロードし、再度試してください。");
$langmsg['img'][8] = x("無効なファイル拡張子。");
$langmsg['img'][9] = x("無効なイメージ。");
$langmsg['img'][10] = x("画像のカテゴリから削除されます。");
$langmsg['img'][11] = x("掲載）カテゴリの追加画像（。");
$langmsg['img'][12] = x("ファイル名：");
$langmsg['img'][13] = x("カテゴリの選択：");
$langmsg['img'][14] = x("[編集]画像");
$langmsg['img'][15] = x("タイトル：");
$langmsg['img'][16] = x("概要：");
$langmsg['img'][17] = x("更新画像");
$langmsg['img'][18] = x("無効なイメージ");
$langmsg['img'][19] = x("画像が更新");
$langmsg['img'][20] = x("サムネール");
$langmsg['img'][21] = x("詳細");
$langmsg['img'][22] = x("カテゴリー：");
$langmsg['img'][23] = x("ファイル名");
$langmsg['img'][24] = x("ファイルサイズ");
$langmsg['img'][25] = x("アップローダ");
$langmsg['img'][26] = x("URLを");
$langmsg['img'][27] = x("カテゴリに追加");
$langmsg['img'][28] = x("削除のカテゴリーから");
$langmsg['img'][29] = x("画像をアップロード");
$langmsg['img'][30] = x("その名前を持つファイルが既に存在します。");
$langmsg['img'][31] = x("すべてのカテゴリ");
$langmsg['img'][32] = x("アップロードディレクトリに書き込むことができません。 777には、このディレクトリCHMODは");


$langmsg['personal'][0] = x("個人用オプション]");
$langmsg['personal'][1] = x("あなたのアカウント情報を、以下を編集します。");
$langmsg['personal'][2] = x("個人用設定のため");
$langmsg['personal'][3] = x("アバターのURL：");
$langmsg['personal'][4] = x("電子メールアドレス：");
$langmsg['personal'][5] = x("メッセージの通知：");
$langmsg['personal'][6] = x("取得の未読メッセージの最初のログイン時に警告？");
$langmsg['personal'][7] = x("新しいパスワード：");
$langmsg['personal'][8] = x("（現在の）を保持する空白のままに");
$langmsg['personal'][9] = x("パスワードの確認：");
$langmsg['personal'][10] = x("電子メールアドレスを入力する必要があります。");
$langmsg['personal'][11] = x("設定を更新しました。");
$langmsg['personal'][12] = x("パスワードが一致しません。");


$langmsg['login'][0] = x("ログインしてください");
$langmsg['login'][1] = x("名前：");
$langmsg['login'][2] = x("パスワード：");
$langmsg['login'][3] = x("パスワードをお忘れですか？");
$langmsg['login'][4] = x("私記憶");
$langmsg['login'][5] = x("セキュリティキー：");
$langmsg['login'][6] = x("ログイン");
$langmsg['login'][7] = x("無効なセキュリティキー");
$langmsg['login'][8] = x("無効な名前またはパスワードを");
$langmsg['login'][9] = x("型は、このコードの下に");


$langmsg['profile'][0] = x("プロフィールを編集");
$langmsg['profile'][1] = x("あなたのプロファイルに以下を編集します。");
$langmsg['profile'][2] = x("名前：");
$langmsg['profile'][3] = x("年齢：");
$langmsg['profile'][4] = x("場所：");
$langmsg['profile'][5] = x("性別：");
$langmsg['profile'][6] = x("表示画像：");
$langmsg['profile'][7] = x("ホームページ：");
$langmsg['profile'][8] = x("趣味：");
$langmsg['profile'][9] = x("趣味：");
$langmsg['profile'][10] = x("職業：");
$langmsg['profile'][11] = x("お気に入りの引用：");
$langmsg['profile'][12] = x("男性");
$langmsg['profile'][13] = x("女性");
$langmsg['profile'][14] = x("プロフィールを更新しました。");


$langmsg['accounts'][0] = x("アカウント");
$langmsg['accounts'][1] = x("占めている。");
$langmsg['accounts'][2] = x("ユーザー名");
$langmsg['accounts'][3] = x("アクセスレベル");
$langmsg['accounts'][4] = x("番号の投稿");
$langmsg['accounts'][5] = x("番号のコメント");
$langmsg['accounts'][6] = x("新しいアカウントを作成します。");
$langmsg['accounts'][7] = x("アカウント名：");
$langmsg['accounts'][8] = x("Eメール：");
$langmsg['accounts'][9] = x("新しいパスワード：");
$langmsg['accounts'][10] = x("パスワードの確認：");
$langmsg['accounts'][11] = x("アクセスレベル：");
$langmsg['accounts'][12] = x("新しいアカウントを作成。");
$langmsg['accounts'][13] = x("アカウントの下に編集します。");
$langmsg['accounts'][14] = x("電子メールアドレスを入力する必要があります。");
$langmsg['accounts'][15] = x("アカウントを更新しました。");
$langmsg['accounts'][16] = x("パスワードが一致しません。");
$langmsg['accounts'][17] = x("アカウント名を入力する必要があります。");
$langmsg['accounts'][18] = x("アカウント名は既に存在します。してください別のを選択します。");
$langmsg['accounts'][19] = x("パスワードを入力する必要があります。");
$langmsg['accounts'][20] = x("アカウントを作成しました。");
$langmsg['accounts'][21] = x("次のアカウントが削除されています：");
$langmsg['accounts'][22] = x("あなた自身のアカウントを削除することはできません。");
$langmsg['accounts'][23] = x("（現在の）を保持する空白のままに");
$langmsg['accounts'][24] = x("アカウントに既にしてください別の選択は、電子メールアドレスを使用しています。");
$langmsg['accounts'][25] = x("してくださいアカウント名を入力します。");


$langmsg['access'][0] = x("アクセスレベル");
$langmsg['access'][1] = x("新しいアクセスレベルを作成します。");
$langmsg['access'][2] = x("名前：");
$langmsg['access'][3] = x("このレベルのアクセスを、どのセクション？");
$langmsg['access'][4] = x("アカウント：");
$langmsg['access'][5] = x("アクセスレベル：");
$langmsg['access'][6] = x("禁止IPアドレス：");
$langmsg['access'][7] = x("カテゴリ：");
$langmsg['access'][8] = x("コメント数：");
$langmsg['access'][9] = x("ヘルプ：");
$langmsg['access'][10] = x("画像のアップロード：");
$langmsg['access'][11] = x("ニュース：");
$langmsg['access'][12] = x("Persionalオプション：");
$langmsg['access'][13] = x("プライベートメッセージ：");
$langmsg['access'][14] = x("プロフィール：");
$langmsg['access'][15] = x("RSSフィード：");
$langmsg['access'][16] = x("スマイリー：");
$langmsg['access'][17] = x("システム構成：");
$langmsg['access'][18] = x("テンプレート：");
$langmsg['access'][19] = x("Wordのフィルタ：");
$langmsg['access'][20] = x("どのカテゴリには、このアクセスレベルをポスト？");
$langmsg['access'][21] = x("すべて：");
$langmsg['access'][22] = x("投稿をこのレベルで編集できますか？");
$langmsg['access'][23] = x("管理ツール（すべて）：");
$langmsg['access'][24] = x("国防省（自社+メンバー）：");
$langmsg['access'][25] = x("会員（専用）：");
$langmsg['access'][26] = x("ポストは、このアクセスレベルを自動的に承認によって作らていますか？");
$langmsg['access'][27] = x("このアクセスレベルでの投稿を承認できますか？");
$langmsg['access'][28] = x("することができますこのアクセスレベルを使用するHTML？");
$langmsg['access'][29] = x("カテゴリーを選択せずに投稿を許可する？");
$langmsg['access'][30] = x("アクセスレベルを削除：");
$langmsg['access'][31] = x("ので、1つ以上のアカウントが割り当てられて、次のアクセスレベルが削除されていない：");
$langmsg['access'][32] = x("[編集]のアクセスレベルを下回る。");
$langmsg['access'][33] = x("このアクセスレベルの名前を入力します。");
$langmsg['access'][34] = x("アクセスレベルを更新しました。");
$langmsg['access'][35] = x("既に存在する名前を持つアクセスレベルは、別のを選択してください。");
$langmsg['access'][36] = x("このレベルを編集することができます投稿を選択します。");
$langmsg['access'][37] = x("このアクセスレベルの記事を自動承認してもらう選択してください");
$langmsg['access'][38] = x("このアクセスレベルの投稿を承認することができます選択してください");
$langmsg['access'][39] = x("このアクセスレベルのHTMLを使用することができます選択してください");
$langmsg['access'][40] = x("このアクセスレベルは、カテゴリを選択せずにポストすることができます選択してください");
$langmsg['access'][41] = x("アクセスレベルを作成しました。");
$langmsg['access'][42] = x("アクセスレベル。");
$langmsg['access'][43] = x("名前");
$langmsg['access'][44] = x("アクセス");
$langmsg['access'][45] = x("アカウント");
$langmsg['access'][46] = x("会員");
$langmsg['access'][47] = x("モデレータ");
$langmsg['access'][48] = x("管理者");
$langmsg['access'][49] = x("ファイルをアップロード");
$langmsg['access'][50] = x("することができますこのアクセスレベルを表示する、ユーザーのIPアドレス？");
$langmsg['access'][51] = x("どのファイルと画像は、このアクセスレベルを編集できますか？");
$langmsg['access'][52] = x("自身の");
$langmsg['access'][53] = x("すべての");


$langmsg['accesslogs'][0] = x("アクセスログ");
$langmsg['accesslogs'][1] = x("ユーザー名");
$langmsg['accesslogs'][2] = x("試み");
$langmsg['accesslogs'][3] = x("IPアドレス");
$langmsg['accesslogs'][4] = x("日付");
$langmsg['accesslogs'][5] = x("アクセスに関するログを見る");
$langmsg['accesslogs'][6] = x("成功");
$langmsg['accesslogs'][7] = x("Usuccessful");


$langmsg['filters'][0] = x("Wordのフィルタ");
$langmsg['filters'][1] = x("フィルタを追加。");
$langmsg['filters'][2] = x("フィルタを削除。");
$langmsg['filters'][3] = x("すべての単語の下のすべてのコメントから除外されます。");
$langmsg['filters'][4] = x("フィルタリングのWord");
$langmsg['filters'][5] = x("に置き換えます。");
$langmsg['filters'][6] = x("削除する");


$langmsg['rss'][0] = x("RSSフィード");
$langmsg['rss'][1] = x("[編集]あなたのRSSの設定を以下のフィード");
$langmsg['rss'][2] = x("ニュース場所は、例えば、あなたのニュースが表示されますhttp://yourdomain.com/またはhttp: //yourdomain.com/index");
$langmsg['rss'][3] = x("フィードの名前：");
$langmsg['rss'][4] = x("ニュース場所：");
$langmsg['rss'][5] = x("タイトルあなたのRSSフィード：");
$langmsg['rss'][6] = x("あなたのRSSの概要フィード：");
$langmsg['rss'][7] = x("文字エンコーディング：");
$langmsg['rss'][8] = x("言語：");
$langmsg['rss'][9] = x("記事の量を表示する：");
$langmsg['rss'][10] = x("0 =すべて");
$langmsg['rss'][11] = x("カテゴリを表示する：");
$langmsg['rss'][12] = x("どのカテゴリに割り当てられていないディスプレイの記事は？");
$langmsg['rss'][13] = x("RSSコード：");
$langmsg['rss'][14] = x("[編集]どのようにフィードが表示されます");
$langmsg['rss'][15] = x("が表示されますが、物語のタイトルです。");
$langmsg['rss'][16] = x("ニュースの短編小説を示します。");
$langmsg['rss'][17] = x("ニュースの記事を表示します。");
$langmsg['rss'][18] = x("カテゴリごとにポストショーに割り当てられている。");
$langmsg['rss'][19] = x("特定のポストのURLが表示されます。");
$langmsg['rss'][20] = x("ストーリー上で公開された日付を示します。");
$langmsg['rss'][21] = x("タイムゾーンの設定を示します。");
$langmsg['rss'][22] = x("各記事のタイムスタンプが表示されます。");
$langmsg['rss'][23] = x("著者は、物語を示します。");
$langmsg['rss'][24] = x("場合は1を持つユーザーのアバターを表示します。");
$langmsg['rss'][25] = x("一意の各記事IDを表示しています。");
$langmsg['rss'][26] = x("各ニュース記事へのコメントの量が表示されます。");
$langmsg['rss'][27] = x("してください。feednameを入力します。");
$langmsg['rss'][28] = x("してくださいニュースの場所を入力します。");
$langmsg['rss'][29] = x("してくださいタイトルを入力します");
$langmsg['rss'][30] = x("してください説明を入力します");
$langmsg['rss'][31] = x("してください。エンコーディングは、文字を入力する");
$langmsg['rss'][32] = x("してください言語を入力する");
$langmsg['rss'][33] = x("してください表示する金額を入力");
$langmsg['rss'][34] = x("RSSフィードを作成");
$langmsg['rss'][35] = x("既に存在する名前を持つフィードを、別のを選択してください。");
$langmsg['rss'][36] = x("RSSフィード更新フィード");
$langmsg['rss'][37] = x("RSSフィード");
$langmsg['rss'][38] = x("RSSフィード（秒）を削除しました。");
$langmsg['rss'][39] = x("名前");
$langmsg['rss'][40] = x("カテゴリ");
$langmsg['rss'][41] = x("URLを");
$langmsg['rss'][42] = x("新たにRSSフィードを作成します。");
$langmsg['rss'][43] = x("物語のフレンドリーなタイトルを表示");


$langmsg['smilies'][0] = x("スマイリー");
$langmsg['smilies'][1] = x("場合は、一度にすべてのスマイリーの位置情報を更新する場合に便利です。");
$langmsg['smilies'][2] = x("");
$langmsg['smilies'][3] = x("置換：");
$langmsg['smilies'][4] = x("に置き換えます：");
$langmsg['smilies'][5] = x("すべてのパスを更新しました。");
$langmsg['smilies'][6] = x("新しいsmilieを作成します。");
$langmsg['smilies'][7] = x("パス：");
$langmsg['smilies'][8] = x("キーコード：");
$langmsg['smilies'][9] = x("してください。スマイリーへのパスを入力します。");
$langmsg['smilies'][10] = x("この笑顔のためのキーコードを入力します。");
$langmsg['smilies'][11] = x("キーコードを既に使用されている。してください別のキーコードを選択します。");
$langmsg['smilies'][12] = x("スマイリーしました。");
$langmsg['smilies'][13] = x("あなたは、この顔文字を削除してもよろしいですか？");
$langmsg['smilies'][14] = x("スマイリーを削除しました。");
$langmsg['smilies'][15] = x("編集して、笑顔の下");
$langmsg['smilies'][16] = x("スマイリー：");
$langmsg['smilies'][17] = x("スマイリーを更新しました。");
$langmsg['smilies'][18] = x("スマイリー削除されている");
$langmsg['smilies'][19] = x("してください編集するようなことは、笑顔を選択します。");
$langmsg['smilies'][20] = x("スマイリー");
$langmsg['smilies'][21] = x("新しい顔文字を挿入します。");
$langmsg['smilies'][22] = x("すべてのスマイリーのアップデートパス");


$langmsg['system'][0] = x("システム構成");
$langmsg['system'][1] = x("システム構成を編集します。");
$langmsg['system'][2] = x("ニュース");
$langmsg['system'][3] = x("1ページあたりのニュース金額：");
$langmsg['system'][4] = x("何のニュースの順序で表示されます：");
$langmsg['system'][5] = x("DESCを");
$langmsg['system'][6] = x("昇順");
$langmsg['system'][7] = x("ニュースの日付と時刻の形式：");
$langmsg['system'][8] = x("ここを参照してください");
$langmsg['system'][9] = x("表示アバター：");
$langmsg['system'][10] = x("区切り文字の種類がニュースの表示を分離する：");
$langmsg['system'][11] = x("コメント");
$langmsg['system'][12] = x("1ページあたりのコメント量：");
$langmsg['system'][13] = x("注文のコメントにはどのように表示されます：");
$langmsg['system'][14] = x("コメントの日付と時刻の形式：");
$langmsg['system'][15] = x("コメントの最大長さ：");
$langmsg['system'][16] = x("新しいウィンドウで表示コメント：");
$langmsg['system'][17] = x("（スパム対策）コメントを投稿した後の時間遅延：");
$langmsg['system'][18] = x("秒");
$langmsg['system'][19] = x("迷惑メールのメッセージ：");
$langmsg['system'][20] = x("新しいコメントの投稿メッセージ：");
$langmsg['system'][21] = x("新しいコメントの承認メッセージ：");
$langmsg['system'][22] = x("コメントに使用してイメージを検証フォーム：");
$langmsg['system'][23] = x("フレンドリーなURL");
$langmsg['system'][24] = x("フレンドリーURLを有効にする：");
$langmsg['system'][25] = x("ファイル拡張子：");
$langmsg['system'][26] = x("接頭辞：");
$langmsg['system'][27] = x("ディレクトリファイル名：");
$langmsg['system'][28] = x("登録");
$langmsg['system'][29] = x("登録するユーザーに許可する：");
$langmsg['system'][30] = x("新しいユーザーのアクセスレベル：");
$langmsg['system'][31] = x("その他の");
$langmsg['system'][32] = x("タイムゾーン：");
$langmsg['system'][33] = x("アップロードした画像のファイルタイプのペット：");
$langmsg['system'][34] = x("画像のアップロードパス：");
$langmsg['system'][35] = x("アクセス不可のエラーメッセージ：");
$langmsg['system'][36] = x("設定を更新しました。");
$langmsg['system'][37] = x("（スパム対策）への送信を使用した後の時間遅延：");
$langmsg['system'][38] = x("通知");
$langmsg['system'][39] = x("新しいコメントの電子メール通知の取得：");
$langmsg['system'][40] = x("新規登録の電子メール通知の取得：");
$langmsg['system'][41] = x("コメントを登録したユーザーのみを許可する：");
$langmsg['system'][42] = x("このメールアドレスに通知を送信する：");
$langmsg['system'][43] = x("アップロードしたファイルのファイルタイプのペット：");
$langmsg['system'][44] = x("未承認のニュース記事を電子メール通知の取得：");
$langmsg['system'][45] = x("公開鍵");
$langmsg['system'][46] = x("秘密鍵");
$langmsg['system'][47] = x("スクリプトのパス");
$langmsg['system'][48] = x("自分のコメントを削除するには、登録ユーザーに許可する：");
$langmsg['system'][49] = x("インデックスのログインフォームを使用してイメージの検証：");
$langmsg['system'][50] = x("登録フォーム上で使用してイメージの検証：");
$langmsg['system'][51] = x("日付とファイルの時刻の形式：");
$langmsg['system'][52] = x("地図'で'あなたのニュース以下の電源：");


$langmsg['recover'][0] = x("パスワードの回復");
$langmsg['recover'][1] = x("アカウントのあなたのためのパスワードをリセットしたいのですが、電子メールアドレスを入力します。");
$langmsg['recover'][2] = x("Eメール：");
$langmsg['recover'][3] = x("か、または誰かこれを行うには下のリンクをたどって、パスワードのリセットを要求しています。");
$langmsg['recover'][4] = x("ここをクリックしてパスワードをリセットする");
$langmsg['recover'][5] = x("Eメールアドレスに送信されている");
$langmsg['recover'][6] = x("は、電子メールのアカウントは、管理者に連絡してくださいが存在しません。");
$langmsg['recover'][7] = x("新しいパスワード");
$langmsg['recover'][8] = x("下記の新しいパスワードを入力します。");
$langmsg['recover'][9] = x("回復のメールを送信する、お使いのシステムの管理者に連絡できませんでした。");
$langmsg['recover'][10] = x("パスワードの確認：");
$langmsg['recover'][11] = x("パスワードが一致しません。");
$langmsg['recover'][12] = x("あなたのパスワードが更新されています。");
$langmsg['recover'][13] = x("お客様のアカウントを取得する詳細な手順です。");


$langmsg['templates'][0] = x("テンプレート");
$langmsg['templates'][1] = x("新しいテンプレートを作成します。");
$langmsg['templates'][2] = x("名前：");
$langmsg['templates'][3] = x("変更をどのようにニュースが表示されます。");
$langmsg['templates'][4] = x("が表示されますが、物語のタイトルです。");
$langmsg['templates'][5] = x("ニュースの短編小説を示します。");
$langmsg['templates'][6] = x("ニュースの記事を表示します。");
$langmsg['templates'][7] = x("ストーリー上で公開された日付を示します。");
$langmsg['templates'][8] = x("カテゴリごとにポストショーに割り当てられている。");
$langmsg['templates'][9] = x("著者は、物語を示します。");
$langmsg['templates'][10] = x("場合は1を持つユーザーのアバターを表示します。");
$langmsg['templates'][11] = x("一意の各記事IDを表示しています。");
$langmsg['templates'][12] = x("著者のIPアドレスを示します。場合に記録されます（のみ）を示しています");
$langmsg['templates'][13] = x("リンク表示の完全なポストを読む");
$langmsg['templates'][14] = x("お客様のメールアドレスは表示されます。");
$langmsg['templates'][15] = x("あなたのメールアドレスへのリンクを作成します。");
$langmsg['templates'][16] = x("あなたのプロフィールにリンクを作成します。");
$langmsg['templates'][17] = x("各ニュース記事へのコメントの量が表示されます。");
$langmsg['templates'][18] = x("コメントへのリンクが作成されます。");
$langmsg['templates'][19] = x("何か、これらのタグ間の場合はログインしてのみ表示されます置く");
$langmsg['templates'][20] = x("スマイリーへのパス");
$langmsg['templates'][21] = x("コメント");
$langmsg['templates'][22] = x("変更方法については、コメントが表示されます。");
$langmsg['templates'][23] = x("が表示されますコメントの著者。");
$langmsg['templates'][24] = x("メッセージが表示されます。");
$langmsg['templates'][25] = x("場合は1を持つユーザーのアバターを表示します。");
$langmsg['templates'][26] = x("著者のIPアドレスを示します。場合に記録されます（のみ）を示しています");
$langmsg['templates'][27] = x("一意の各コメントのIDを表示しています。");
$langmsg['templates'][28] = x("ユーザーの人コメント：Eメールのアドレスを示します。");
$langmsg['templates'][29] = x("ユーザーの電子メールへのリンクが作成されます。");
$langmsg['templates'][30] = x("コメントで公開された日付を示します。");
$langmsg['templates'][31] = x("何か、これらのタグ間の場合はログインしてのみ表示されます置く");
$langmsg['templates'][32] = x("コメントフォーム");
$langmsg['templates'][33] = x("それを編集するときは、このすべての入力フィールドの名前とIDは、それ以外の場合は動作しません同じように重要です。また、yesまたはフォームのonsubmit属性useajax = ''、通知の場合のAjaxは、ユーザーがコメントを送信使用され、決定されます。");
$langmsg['templates'][34] = x("が表示されますニュース記事のIDです。");
$langmsg['templates'][35] = x("が表示されますカテゴリーのニュース記事のIDです。");
$langmsg['templates'][36] = x("場合はログインしてあなたのユーザ名は表示されます");
$langmsg['templates'][37] = x("場合はログインしてあなたのメールアドレスは表示されます");
$langmsg['templates'][38] = x("メッセージが表示されます。");
$langmsg['templates'][39] = x("すべてのスマイリーを表示します。");
$langmsg['templates'][40] = x("ニュースページネーション");
$langmsg['templates'][44] = x("コメントページネーション");
$langmsg['templates'][45] = x("以前のリンクが存在する場合が表示されます。");
$langmsg['templates'][46] = x("次のリンクが存在する場合が表示されます。");
$langmsg['templates'][47] = x("ページ例：1 2 3 4の量が表示されます。");
$langmsg['templates'][48] = x("プロフィール");
$langmsg['templates'][49] = x("どのようにユーザープロファイルが表示されますを編集します。");
$langmsg['templates'][50] = x("ユーザー名を表示します。");
$langmsg['templates'][51] = x("ユーザー名を示します。");
$langmsg['templates'][52] = x("ユーザーの年齢を示します。");
$langmsg['templates'][53] = x("ユーザーの位置を示します。");
$langmsg['templates'][54] = x("ユーザーの性別を表示します。");
$langmsg['templates'][55] = x("ユーザのホームページへのリンクを作成します。");
$langmsg['templates'][56] = x("ユーザの関心を示します。");
$langmsg['templates'][57] = x("ユーザーの趣味を示します。");
$langmsg['templates'][58] = x("ユーザーの職業を表示します。");
$langmsg['templates'][59] = x("お気に入りの引用符のユーザーを表示します。");
$langmsg['templates'][60] = x("ユーザーのプロフィール画像を表示します。");
$langmsg['templates'][61] = x("ニュースの構造");
$langmsg['templates'][62] = x("ここでは、どのように各ニュースの要素が表示されると、例えば、もしそれだけでなく、以下を行うことができますニュースの上に表示する pagintationしたいのphyiscal順序を制御することができますここでは。");
$langmsg['templates'][63] = x("が表示されますあなたのニュース記事。");
$langmsg['templates'][64] = x("が表示されますニュースpagintation。");
$langmsg['templates'][65] = x("コメント構造");
$langmsg['templates'][66] = x("ここでは、どのように各ニュースの要素を閲覧する際のコメントは、例えば場合は、それだけでなく、以下のご意見、上記を行うことができます表示されることpagintationしたい表示されるのphyiscal順序を制御することができますここでは。");
$langmsg['templates'][67] = x("1つのニュース記事にコメントを表示が表示されます");
$langmsg['templates'][68] = x("が表示されますあなたのコメント。");
$langmsg['templates'][69] = x("が表示されますコメントpagintation。");
$langmsg['templates'][70] = x("が表示されます申し訳ない。");
$langmsg['templates'][71] = x("登録フォーム");
$langmsg['templates'][72] = x("ここでは、ユーザーが登録できるようにフォームのコントロールです。これは、すべての入力フィールドの名前とIDは、それ以外の場合は、この作業をしないと同じように重要です。");
$langmsg['templates'][73] = x("そのユーザ名を入力します。");
$langmsg['templates'][74] = x("ユーザーのパスワードを入力します。");
$langmsg['templates'][75] = x("場合は、フィールドに残っている空白のエラーメッセージが表示されます。");
$langmsg['templates'][76] = x("してください名前を入力します。");
$langmsg['templates'][77] = x("テンプレートを作成しました。");
$langmsg['templates'][78] = x("別の名前を選択します。");
$langmsg['templates'][79] = x("以下の方法を、ニュースやコメントが表示されますを変更するためのテンプレートを編集します。");
$langmsg['templates'][80] = x("ニュース");
$langmsg['templates'][81] = x("テンプレートを更新しました。");
$langmsg['templates'][82] = x("その名前のテンプレートはすでに存在します。別の名前を選択する");
$langmsg['templates'][83] = x("使用中のthatsのテンプレートを削除することはできません");
$langmsg['templates'][84] = x("（秒）を削除テンプレートを選択");
$langmsg['templates'][85] = x("（秒）にコピーテンプレート");
$langmsg['templates'][86] = x("を選択して編集するには下テンプレートの名前。");
$langmsg['templates'][87] = x("テンプレートを選択します。");
$langmsg['templates'][88] = x("名前");
$langmsg['templates'][89] = x("選択");
$langmsg['templates'][90] = x("新しいテンプレートを作成します。");
$langmsg['templates'][91] = x("を選択する");
$langmsg['templates'][92] = x("各ストーリー件を表示しています。");
$langmsg['templates'][93] = x("評価星の画像を表示します。");
$langmsg['templates'][94] = x("物語のための定格電流を示します。");
$langmsg['templates'][95] = x("回のストーリーを評価されている容量を示します。");
$langmsg['templates'][96] = x("評価フォームを表示します。");
$langmsg['templates'][98] = x("フォームに送信する方法を示します。");
$langmsg['templates'][99] = x("ユーザーの位置を示します");
$langmsg['templates'][100] = x("アップロードされたファイル");
$langmsg['templates'][101] = x("コントロールをどのようにアップロードされたファイルが表示されます。");
$langmsg['templates'][102] = x("日付は、ファイルがアップロードされました。");
$langmsg['templates'][103] = x("タイトル：ファイルの場所。");
$langmsg['templates'][104] = x("filenameは、ファイルの場所。");
$langmsg['templates'][105] = x("ファイルサイズファイルの場所。");
$langmsg['templates'][106] = x("URLは、ファイルをダウンロードする。");
$langmsg['templates'][107] = x("usernameは、アップローダです。");
$langmsg['templates'][108] = x("倍の量のファイルをダウンロードしています。");
$langmsg['templates'][109] = x("表示されるニュース記事にリンクされたファイルです。");
$langmsg['templates'][110] = x("表示の各ニュース記事にリンクします。");
$langmsg['templates'][111] = x("一度に3ページを示しています");
$langmsg['templates'][112] = x("1ページ目へのリンク、いない場合は、現在1ページ目に表示されます。");
$langmsg['templates'][113] = x("最後のページにリンクを使用しない場合、現在のページ最後のページを示しています。");
$langmsg['templates'][114] = x("このポストのための単語の数を示します");
$langmsg['templates'][115] = x("物語のフレンドリーなタイトルを表示");
$langmsg['templates'][116] = x("ReCaptchaは要素が表示されます");
$langmsg['templates'][117] = x("コメントを削除するためのリンクを作成します。");
$langmsg['templates'][118] = x("が表示されますは、ログインフォームの場合のみ、ログインが必要です。");
$langmsg['templates'][119] = x("ログインフォーム");
$langmsg['templates'][120] = x("コントロールをどのようにログインフォームが表示されます。");
$langmsg['templates'][121] = x("が表示されますメールは、ユーザーが入力した。");
$langmsg['templates'][122] = x("が表示されますログインエラーメッセージです。");
$langmsg['templates'][123] = x("が表示されますReCaptchaは要素です。");
$langmsg['templates'][124] = x("が表示されますユーザー名は、ユーザーが入力した。");
$langmsg['templates'][125] = x("ディスプレイのユーザ名を記録します。");
$langmsg['templates'][126] = x("表示検索フォーム。すべての名前とIDが同じまま必要があります。");
$langmsg['templates'][127] = x("各検索の結果の数を表示");
$langmsg['templates'][128] = x("フォーマット方法の検索結果が表示さを得る。各検索結果の繰り返しを取得します。");
$langmsg['templates'][129] = x("行ごとに1つまたは2つの出力交互。");
$langmsg['templates'][130] = x("が表示されます現在のページ番号です。");
$langmsg['templates'][131] = x("表示前のページ番号です。");
$langmsg['templates'][132] = x("表示次のページ番号です。");
$langmsg['templates'][133] = x("が表示されますニュース記事の友好タイトル。");


$langmsg['uploadedfiles'][0] = x("ファイルをアップロード");
$langmsg['uploadedfiles'][1] = x("アップロードする新しいファイル");
$langmsg['uploadedfiles'][2] = x("ファイルのアップロード");
$langmsg['uploadedfiles'][4] = x("ファイルを選択します：");
$langmsg['uploadedfiles'][5] = x("（秒）を削除ファイル。");
$langmsg['uploadedfiles'][6] = x("ファイルをアップロード");
$langmsg['uploadedfiles'][7] = x("エラーが発生したファイルをアップロードし、再度試してください。");
$langmsg['uploadedfiles'][8] = x("無効なファイル拡張子。");
$langmsg['uploadedfiles'][9] = x("無効なファイルです。");
$langmsg['uploadedfiles'][10] = x("カテゴリから削除するファイル。");
$langmsg['uploadedfiles'][11] = x("（秒）カテゴリに追加するファイル。");
$langmsg['uploadedfiles'][12] = x("ファイル名");
$langmsg['uploadedfiles'][13] = x("カテゴリの選択：");
$langmsg['uploadedfiles'][14] = x("[編集]ファイル");
$langmsg['uploadedfiles'][15] = x("タイトル：");
$langmsg['uploadedfiles'][16] = x("概要：");
$langmsg['uploadedfiles'][17] = x("ファイルを更新");
$langmsg['uploadedfiles'][18] = x("無効なファイル");
$langmsg['uploadedfiles'][19] = x("ファイルを更新");
$langmsg['uploadedfiles'][20] = x("サムネール");
$langmsg['uploadedfiles'][21] = x("詳細");
$langmsg['uploadedfiles'][22] = x("カテゴリー：");
$langmsg['uploadedfiles'][23] = x("タイトル");
$langmsg['uploadedfiles'][24] = x("ファイルサイズ");
$langmsg['uploadedfiles'][25] = x("アップローダ");
$langmsg['uploadedfiles'][26] = x("URLを");
$langmsg['uploadedfiles'][27] = x("カテゴリに追加");
$langmsg['uploadedfiles'][28] = x("削除のカテゴリーから");
$langmsg['uploadedfiles'][29] = x("ファイルのアップロード");
$langmsg['uploadedfiles'][30] = x("その名前を持つファイルが既に存在します。");
$langmsg['uploadedfiles'][31] = x("リセットをダウンロード：");
$langmsg['uploadedfiles'][32] = x("すべてのカテゴリ");
$langmsg['uploadedfiles'][33] = x("ダウンロード");
$langmsg['uploadedfiles'][34] = x("アップロード");


$langmsg['admindata'][0] = x("ヘルプ");
$langmsg['admindata'][1] = x("ニュースを追加");
$langmsg['admindata'][2] = x("プライベートメッセージ");
$langmsg['admindata'][3] = x("ニュース編集");
$langmsg['admindata'][4] = x("[編集]コメント");


$langmsg['submitfield'][0] = x("[OK]を");
$langmsg['submitfield'][1] = x("プレビュー");
$langmsg['submitfield'][2] = x("ニュースを追加");
$langmsg['submitfield'][3] = x("保存する");
$langmsg['submitfield'][4] = x("送る");
$langmsg['submitfield'][5] = x("を作成します。");
$langmsg['submitfield'][6] = x("更新する");
$langmsg['submitfield'][7] = x("追加する");
$langmsg['submitfield'][8] = x("削除する");
$langmsg['submitfield'][9] = x("回復");


$langmsg['selectfield'][0] = x("-オプションの選択-");
$langmsg['selectfield'][1] = x("はい");
$langmsg['selectfield'][2] = x("いいえ");
$langmsg['selectfield'][3] = x("削除する");
$langmsg['selectfield'][4] = x("必要な承認");
$langmsg['selectfield'][5] = x("コメントを許可する");
$langmsg['selectfield'][6] = x("変更の承認");
$langmsg['selectfield'][7] = x("承認");
$langmsg['selectfield'][8] = x("コメント");
$langmsg['selectfield'][9] = x("承認");
$langmsg['selectfield'][10] = x("Unapprove");
$langmsg['selectfield'][11] = x("日付");
$langmsg['selectfield'][12] = x("タイトル");
$langmsg['selectfield'][13] = x("著者");
$langmsg['selectfield'][14] = x("カテゴリー");
$langmsg['selectfield'][15] = x("＃コメント");
$langmsg['selectfield'][16] = x("既読にする");
$langmsg['selectfield'][17] = x("未読にする");
$langmsg['selectfield'][18] = x("リセットカウントブロック");
$langmsg['selectfield'][19] = x("コピーを作成します");
$langmsg['selectfield'][20] = x("のビューにリセットカウント");
$langmsg['selectfield'][21] = x("リセットの評価");


$langmsg['js'][0] = x("あなたのカテゴリからこの画像を削除してもよろしいですか？");
$langmsg['js'][1] = x("あなたが選択した画像（秒）を削除してもよろしいですか？");
$langmsg['js'][2] = x("あなたが選択したメッセージを（秒）を削除してもよろしいですか？");
$langmsg['js'][3] = x("あなたは、（選択したテンプレートを削除してもよろしいですか秒）？");
$langmsg['js'][4] = x("あなたがこれらのIPアドレスを削除してもよろしいですか？");
$langmsg['js'][5] = x("あなたがこれらのIPアドレスのブロックのカウントをリセットしてもよろしいですか");
$langmsg['js'][6] = x("あなたがこれらのアクセスレベル（秒）を削除してもよろしいですか？");
$langmsg['js'][7] = x("あなたがこれらのカテゴリを削除してもよろしいですか？");
$langmsg['js'][8] = x("あなたとその中の記事、これらのカテゴリを削除してもよろしいですか？");
$langmsg['js'][9] = x("あなたがこれらのカテゴリを削除してもよろしいですか？");
$langmsg['js'][10] = x("あなたがこれらのアカウント（s）を削除してもよろしいですか？");
$langmsg['js'][11] = x("あなたがこれらのアカウント（s）との投稿を削除してもよろしいですか？");
$langmsg['js'][12] = x("あなたがこれらのポスト（秒）を削除してもよろしいですか？");
$langmsg['js'][13] = x("いくつかのテキストを入力します");
$langmsg['js'][14] = x("テキスト");
$langmsg['js'][15] = x("してください色を入力します。たとえば、赤、黄、青（あるいは16進数の値）");
$langmsg['js'][16] = x("青");
$langmsg['js'][17] = x("リンクのURLを入力");
$langmsg['js'][18] = x("テキストを入力して表示される");
$langmsg['js'][19] = x("リンク");
$langmsg['js'][20] = x("フォントサイズを入力します");
$langmsg['js'][21] = x("12ptの");
$langmsg['js'][22] = x("テキストを表示する？");
$langmsg['js'][23] = x("電子メールアドレス");
$langmsg['js'][24] = x("user@domain.com");
$langmsg['js'][25] = x("メールを私に！");
$langmsg['js'][26] = x("引用テキスト？");
$langmsg['js'][27] = x("引用する");
$langmsg['js'][28] = x("あなたが選択したコメント（sを削除します）よろしいですか？");
$langmsg['js'][29] = x("あなたが選択したカテゴリを削除してもよろしいですか？");
$langmsg['js'][30] = x("取得スマイリー...しばらくお待ちください。");
$langmsg['js'][31] = x("あなたが選択したファイル（秒）を削除してもよろしいですか？");
$langmsg['js'][32] = x("あなたが選択したスマイリーを削除してもよろしいですか？");

$langmsg['news'][0] = x("してください名前を入力します。");
$langmsg['news'][1] = x("してくださいメッセージを入力します。");
$langmsg['news'][2] = x("無効なセキュリティキー");
$langmsg['news'][3] = x("別の名前を選択します。");
$langmsg['news'][4] = x("無効なセキュリティキー");
$langmsg['news'][5] = x("検索結果が見つかりました：");
$langmsg['news'][6] = x("新規登録は無効になります。");
$langmsg['news'][7] = x("お客様のアカウントは、今すぐ<a href=\"{adminpath}\">こちらからログイン</a>することができますが作成されている。");
$langmsg['news'][8] = x("してください名前を入力します。");
$langmsg['news'][9] = x("してくださいメッセージを入力します。");
$langmsg['news'][10] = x("無効なセキュリティキー");
$langmsg['news'][11] = x("別の名前を選択します。");
$langmsg['news'][12] = x("無効なセキュリティキー");
$langmsg['news'][13] = x("あなたの評価いただき、ありがとうございます。");
$langmsg['news'][14] = x("あなたはすでにこの記事は、定格している。");
$langmsg['news'][15] = x("名前");
$langmsg['news'][16] = x("Eメール：");
$langmsg['news'][17] = x("友達のEメールアドレス：");
$langmsg['news'][18] = x("メッセージ：");
$langmsg['news'][19] = x("私がこの記事をおいチェック！");
$langmsg['news'][20] = x("友達に送る");
$langmsg['news'][21] = x("メールを送った。");
$langmsg['news'][22] = x("あなたのお名前を入力します。");
$langmsg['news'][23] = x("あなたのメールアドレスを入力します。");
$langmsg['news'][24] = x("してくださいメッセージを入力します");
$langmsg['news'][25] = x("あなたのメールアドレスをお友達を入力します。");
$langmsg['news'][27] = x("有効なメールアドレスを入力します。");
$langmsg['news'][28] = x("してください有効なメールアドレスをお友達を入力します。");
$langmsg['news'][29] = x("ユーザー名を入力します。");
$langmsg['news'][30] = x("そのユーザー名はすでに、別の選択してください取られている。");
$langmsg['news'][31] = x("は、電子メールアドレスが既に使用して、別の選択してくださいです。");
$langmsg['news'][32] = x("してください電子メールアドレスを入力します。");
$langmsg['news'][33] = x("有効なメールアドレスを入力します。");
$langmsg['news'][34] = x("してくださいパスワードを入力します。");
$langmsg['news'][35] = x("あなたのパスワードを確認します。");
$langmsg['news'][36] = x("あなたが一致しない場合入力したパスワード。");
$langmsg['news'][37] = x("無効なセキュリティキーです。");
$langmsg['news'][38] = x("しばらくお待ちください");
$langmsg['news'][39] = x("問題があるメッセージを送信し、管理者に連絡してください。れました。");
$langmsg['news'][40] = x("あなたはコメントを投稿するには、ログインする必要があります。");
$langmsg['news'][41] = x("{domain} の新規コメント");
$langmsg['news'][42] = x("名前： {name} Eメール/のURL： {email} IPアドレス： {ip} メッセージ： {message}");
$langmsg['news'][43] = x("{domain} の新規登録");
$langmsg['news'][44] = x("名前： {name} Eメール： {email} IPアドレス： {ip}");
$langmsg['news'][45] = x("別のメッセージを送信するまでの秒数。");
$langmsg['news'][46] = x("{author} - {date} - {title}");
$langmsg['news'][47] = x("名");
$langmsg['news'][48] = x("Eメール/ URLは");
$langmsg['news'][49] = x("メッセージ");


$langmsg['shortmonths'][0] = x("09年01月");
$langmsg['shortmonths'][1] = x("2月");
$langmsg['shortmonths'][2] = x("03");
$langmsg['shortmonths'][3] = x("4月");
$langmsg['shortmonths'][4] = x("〜かもしれない");
$langmsg['shortmonths'][5] = x("6月");
$langmsg['shortmonths'][6] = x("7月");
$langmsg['shortmonths'][7] = x("8月");
$langmsg['shortmonths'][8] = x("9月");
$langmsg['shortmonths'][9] = x("10月");
$langmsg['shortmonths'][10] = x("11月");
$langmsg['shortmonths'][11] = x("12月");


$langmsg['months'][0] = x("1月");
$langmsg['months'][1] = x("2月");
$langmsg['months'][2] = x("2007年3月");
$langmsg['months'][3] = x("4月");
$langmsg['months'][4] = x("〜かもしれない");
$langmsg['months'][5] = x("6月");
$langmsg['months'][6] = x("7月");
$langmsg['months'][7] = x("8月");
$langmsg['months'][8] = x("9月");
$langmsg['months'][9] = x("10月");
$langmsg['months'][10] = x("11月");
$langmsg['months'][11] = x("12月");


$langmsg['search'][0] = x("積極的なニュース");
$langmsg['search'][1] = x("ニュースアーカイブ");
$langmsg['search'][2] = x("最新の最初の");
$langmsg['search'][3] = x("古い順");
$langmsg['search'][4] = x("探す");
$langmsg['search'][5] = x("日付の範囲");


$langmsg['install'][0] = x("データベース接続情報");
$langmsg['install'][1] = x("あなたのMySQLサーバ情報を、以下を入力します。");
$langmsg['install'][2] = x("サーバー：");
$langmsg['install'][3] = x("（通常はlocalhost）");
$langmsg['install'][4] = x("ユーザー名：");
$langmsg['install'][5] = x("パスワード：");
$langmsg['install'][6] = x("データベース：");
$langmsg['install'][7] = x("接続テスト");
$langmsg['install'][8] = x("サーバーへの接続：");
$langmsg['install'][9] = x("データベースの選択：");
$langmsg['install'][10] = x("777には、このファイルCHMODはしてください。db.phpに書き込めません");
$langmsg['install'][11] = x("アカウント情報");
$langmsg['install'][12] = x("以下のアカウントの詳細を入力します。このログインに使用されます。");
$langmsg['install'][13] = x("Eメール：");
$langmsg['install'][14] = x("パスワードの確認：");
$langmsg['install'][15] = x("継続");
$langmsg['install'][16] = x("してくださいユーザー名を入力");
$langmsg['install'][17] = x("してください電子メールアドレスを入力します。");
$langmsg['install'][18] = x("あなたのパスワードを入力します。");
$langmsg['install'][19] = x("プレスをインストールするインストールを完了する");
$langmsg['install'][20] = x("あなたのパスワードが一致しません");
$langmsg['install'][21] = x("インストール");
$langmsg['install'][22] = x("インストールの確定");
$langmsg['install'][23] = x("サクセス！");
$langmsg['install'][24] = x("Ñ - 13ニュースがインストールされています。");
$langmsg['install'][25] = x("ログインは、管理エリアがあります。");
$langmsg['install'][26] = x("ポート：");
$langmsg['install'][27] = x("ソケット：");
$langmsg['install'][28] = x("拡張子：");
$langmsg['install'][29] = x("（デフォルトは空白のまま）");
$langmsg['install'][30] = x("インストール...しばらくお待ちください。");
$langmsg['install'][31] = x("mysqli_connect関数が見つかりませんでした。");
$langmsg['install'][32] = x("もし既に関数が見つかりませんでした。");
?>