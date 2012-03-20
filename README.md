# Readability Button

Wordpressに[Readability button](http://www.readability.com/developers/)を
追加する為のプラグインです。

記事のタイトル下に設置されます。

※このプラグインでは、wp-contentの手前に、オフィシャルの適当なコードを追加しているだけであり、記事のタイトルなどを埋め込むような処理は一切おこなっていません。テーマファイルを直接編集出来る方などはそちらをお勧めします。

## Install
下記のファイルをダウンロードし、プラグインフォルダに設置してください。

[Download readability-button.php](https://github.com/downloads/hazisarashi/wp-readability-button/readability-button.php)

## Tips

テーマファイルによってはタイトルよりも、記事に近い位置にReadability buttonが設置され、タイトルと記事の間が広く開いてしまう場合があります。

そのような場合は下記のCSSを追加してみてください。

    .rdbWrapper {
        position: relative;
        top: -22px;
        margin-bottom: -35px;
        height: 35px;
    }

