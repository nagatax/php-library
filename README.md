# PHPのライブラリ集

## はじめに

PHPのライブラリをまとめたものです。

## 使用方法

### PHPUnitの使用方法

プロジェクトルートで下記を実行する。

```bash
./vendor/bin/phpunit
```

### PHPCsの使用方法

プロジェクトルートで下記を実行する。

```bash
./vendor/bin/phpcs --standard=PSR2 src/ tests/
```

### PHPMdの使用方法

プロジェクトルートで下記を実行する。

```bash
./vendor/bin/phpmd src/ text codesize,controversial,design,naming,unusedcode
```

- codesize：循環的複雑度などコードサイズ関連部分を検出するルール
- controversial：キャメルケースなど議論の余地のある部分を検出するルール
- design：ソフトの設計関連の問題を検出するルール
- naming：長すぎたり、短すぎたりする名前を検出するルール
- unusedcode：使われていないコードを検出するルール
