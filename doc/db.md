# 資料庫規劃

- DB name: s1100413

- scheme
  |欄位名|資料型態|主鍵|預設值|自動遞增|備註|
  |:-:|:-:|:-:|:-:|:-:|:-:|
  |id|int(5)|yes|-|yes|流水號|
  |pri_color]|text|-|-|-|主顏色|
  |acc_color]|text|-|-|-|強調色|
  |bg_color]|text|-|-|-|背景色|
- admin
  |欄位名|資料型態|主鍵|預設值|自動遞增|備註|
  |:-:|:-:|:-:|:-:|:-:|:-:|
  |id|int(5)|yes|-|yes|流水號|
  |acc|text|-|-|-|帳號|
  |pw|text|-|-|-|密碼|
- about
  |欄位名|資料型態|主鍵|預設值|自動遞增|備註|
  |:-:|:-:|:-:|:-:|:-:|:-:|
  |id|int(5)|yes|-|yes|流水號|
  |brief|text|-|-|-|簡介|
  |habit|text|-|-|-|興趣|
  |skill|text|-|-|-|技能|
- work_exp
  |欄位名|資料型態|主鍵|預設值|自動遞增|備註|
  |:-:|:-:|:-:|:-:|:-:|:-:|
  |id|int(5)|yes|-|yes|流水號|
  |position|text|-|-|-|職稱|
  |company|text|-|-|-|公司名|
  |start|date|-|-|-|起|
  |end|date|-|-|-|迄|
  |sum|text|-|-|-|工作概要|
  |sh|int(1)|-|0|-|顯示|
- works
  |欄位名|資料型態|主鍵|預設值|自動遞增|備註|
  |:-:|:-:|:-:|:-:|:-:|:-:|
  |id|int(5)|yes|-|yes|流水號|
  |title|text|-|-|-|作品名稱|
  |idea|text|-|-|-|概念|
  |tag|text|-|-|-|標籤|
  |img_url|text|-|-|-|圖片路徑|
  |demo_url|text|-|-|-|網站連結|
  |g_url|text|-|-|-|Github|
  |sh|int(1)|-|0|-|顯示|
- message
  |欄位名|資料型態|主鍵|預設值|自動遞增|備註|
  |:-:|:-:|:-:|:-:|:-:|:-:|
  |id|int(5)|yes|-|yes|流水號|
  |name|text|-|-|-|留言者名|
  |email|text|-|-|-|信箱|
  |company|text|-|-|-|公司|
  |subject|text|-|-|-|標題|
  |message|text|-|-|-|訊息|
  |time|timestamp|-|current_timestamp()|-|提交時間|
