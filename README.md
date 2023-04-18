# Text File Search PHP version

## Overview

Simple Text Search is a small PHP application that allows you to search for keywords within multiple `scripts_improved.txt` text files located in the subfolders of the current directory. It is designed for personal use, and as it exposes text files in the current directory, it is not recommended for use in a publicly accessible environment.

## Installation

1. Clone this repository or download the zip file and extract it into your desired folder.
2. Run `composer install` to install the required dependencies.
3. Configure your web server to point to the `public` folder of the application.
4. Make sure the `.htaccess` file is working properly on your server. If not, you may need to enable the Apache `mod_rewrite` module.

## Usage

1. Place `scripts_improved.txt` files within subfolders of the current directory.
2. Access the application through your web browser and enter the keywords you want to search for in the provided search field.
3. The application will display the search results, showing the occurrences of the keywords within the `scripts_improved.txt` files.

## Notes

- This application is designed for personal use only, and it is not suitable for use in a publicly accessible environment due to the exposure of text files in the current directory.
- Ensure that you have proper file permissions set for the application to be able to read the `scripts_improved.txt` files.

## License

This project is licensed under the MIT License.

---

# Text File Search PHP version

## 概要

Text File Search PHP versionは、現在のディレクトリのサブフォルダにある複数の `scripts_improved.txt` テキストファイルを横断的に検索するための小さなPHPアプリケーションです。個人利用を目的として設計されており、現在のディレクトリにテキストファイルが公開されているため、公開環境での使用は推奨されません。

## インストール手順

1. このリポジトリをクローンするか、zipファイルをダウンロードして希望するフォルダに展開します。
2. `composer install` を実行して、必要な依存関係をインストールします。
3. Webサーバーをアプリケーションの `public` フォルダを指すように設定します。
4. `.htaccess` ファイルがサーバー上で正しく動作していることを確認します。そうでない場合は、Apache の `mod_rewrite` モジュールを有効にする必要があります。

## 使い方

1. 現在のディレクトリのサブフォルダに `scripts_improved.txt` ファイルを配置します。
2. Webブラウザからアプリケーションにアクセスし、提供された検索フィールドに検索したいキーワードを入力します。
3. アプリケーションは検索結果を表示し、`scripts_improved.txt`ファイル内のキーワードの出現箇所を示します。

## 注意点

- このアプリケーションは個人利用のみを目的として設計されており、現在のディレクトリにテキストファイルが公開されているため、公開環境での使用には適していません。
- アプリケーションが `scripts_improved.txt` ファイルを読み取ることができるよう、適切なファイル権限が設定されていることを確認してください。

## 免責事項

このアプリケーションは個人の利用範囲での使用を前提としており、外部からのアクセスが容易であることから、公開環境での使用は避けてください。また、アプリケーションの使用によって生じたいかなる損害や不利益についても、開発者は責任を負いません。

## ライセンス

このプロジェクトはMITライセンスでライセンスされています。