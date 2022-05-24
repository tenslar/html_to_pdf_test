# やったこと

https://blog.websandbag.com/entry/2020/11/23/221039
を参考にload_font.phpを使ってIPAのttfをいい感じにしてフォントを利用・・・したかった

# 結果

うまく適用されなかった。
直接htmlにアクセスしてもフォントが適用されていないので、適用の仕方自体に問題がある？

# 動かし方

```zsh
docker build -t nktpdftest .
docker run --rm -p 9081:80 -v "$(pwd):/var/www/html" nktpdftest
```

↑でコンテナ起動した後localhost:9081にアクセスすると閲覧できる

EX)
- localhost:9081/index.html （アルファベットしかないサンプル領収書）
- localhost:9081/index.jp.html （日本語のサンプル領収書）
- localhost:9081/pdf_dl.php (htmlをPDFに変換してDL。どのhtmlをDLするかはファイルにベタガキ）
