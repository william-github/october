<?php

return [
    'app' => [
        'name' => 'October CMS',
        'motto' => '基本に戻ろう！',
    ],
    'locale' => [
        'en' => 'English',
        'nl' => 'Dutch',
        'ja' => 'Japanese',
        'se' => 'Swedish',
        'tr' => 'Turkish',
        'de' => 'German',
        'ru' => 'Russian',
        'fr' => 'French',
        'it' => 'Italian',
        'ro' => 'Romana',
        'pt-br' => 'Brazilian Portuguese',
    ],
    'directory' => [
        'create_fail' => "ディレクトリーが作成できません： :name",
    ],
    'file' => [
        'create_fail' => "ファイルが作成できません： :name",
    ],
    'system' => [
        'name' => 'システム',
        'menu_label' => 'システム',
    ],
    'plugin' => [
        'unnamed' => '名前なしプラグイン',
        'name' => [
            'label' => 'プラグイン名',
            'help' => '重複しないプラグイン名を付けてください。（例：RainLab.Blog）',
        ],
    ],
    'project' => [
        'name' => 'プロジェクト',
        'owner_label' => '所有者',
        'attach' => 'プロジェクト追加',
        'detach' => 'プロジェクト切り離し',
        'none' => '無し',
        'id' => [
            'label' => 'プロジェクトID',
            'help' => 'プロジェクトIDの見つけ方',
            'missing' => '使用するプロジェクトのIDを指定してください。',
        ],
        'detach_confirm' => 'このプロジェクトを切り離しますか？',
        'unbind_success' => 'プロジェクトを切り離しました。',
    ],
    'settings' => [
        'menu_label' => '設定',
        'missing_model' => 'モデルの定義が見つかりません。',
        'update_success' => ':name を設定しました。',
        'return' => 'システム設定へ戻る',
    ],
    'email' => [
        'menu_label' => 'メール設定',
        'menu_description' => 'メール設定の管理',
        'general' => '全般',
        'method' => 'メール方法',
        'sender_name' => '送信者名',
        'sender_email' => '送信者メール',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTPアドレス',
        'smtp_authorization' => 'SMTP認証が必要',
        'smtp_authorization_comment' => 'SMTPサーバーの認証が必要な場合、チェックしてください。',
        'smtp_username' => 'ユーザー名',
        'smtp_password' => 'パスワード',
        'smtp_port' => 'SMTPポート',
        'smtp_ssl' => 'SSL接続が必要',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmailパス',
        'sendmail_path_comment' => 'Sendmailプログラムへのパスを指定してください。',
    ],
    'install' => [
        'project_label' => 'プロジェクト追加',
        'plugin_label' => 'プラグインインストール',
        'missing_plugin_name' => 'インストールするプラグインの名前を指定してください。',
        'install_completing' => 'インストールを仕上げ中',
        'install_success' => 'プラグインをインストールしました。',
    ],
    'updates' => [
        'title' => 'アップデート管理',
        'name' => 'ソフトウェアアップデート',
        'menu_label' => 'アップデート',
        'check_label' => 'アップデート確認',
        'retry_label' => '再実行',
        'plugin_name' => '名前',
        'plugin_description' => '説明',
        'plugin_version' => 'バージョン',
        'plugin_author' => '作者',
        'core_build' => '現在のビルド',
        'core_build_old' => '現在のビルド :build',
        'core_build_new' => 'ビルド :build',
        'core_build_new_help' => '新しいビルドが存在します。',
        'core_downloading' => 'アプリケーションファイルのダウンロード中',
        'core_extracting' => 'アプリケーションファイルの展開中',
        'plugin_downloading' => 'プラグインダウンロード中： :name',
        'plugin_extracting' => 'プラグイン展開中： :name',
        'plugin_version_none' => '新プラグイン',
        'plugin_version_old' => '現在 v:version',
        'plugin_version_new' => 'v:version',
        'update_label' => 'ソフトウェアアップデート',
        'update_completing' => 'アップデート仕上げ中',
        'update_loading' => 'アップデートロード中…',
        'update_success' => 'アップデートしました。',
        'update_failed_label' => 'アップデート失敗',
        'force_label' => '強制アップデート',
        'found' => [
            'label' => '新しいアップデートあり',
            'help' => 'アップデートしたいソフトウェアをクリックしてください。',
        ],
        'none' => [
            'label' => 'アップデートなし',
            'help' => '新しいアップデートが見つかりません。',
        ],
    ],
    'server' => [
        'connect_error' => 'サーバー接続エラー。',
        'response_not_found' => '更新サーバーが見つかりません。',
        'response_invalid' => 'サーバーからの無効なレスポンス。',
        'response_empty' => 'サーバーから空のレスポンス。',
        'file_error' => 'サーバーがパッケージ配布に失敗。',
        'file_corrupt' => 'サーバーからのファイルが壊れています。',
    ],
    'behavior' => [
        'missing_property' => ':class クラスは、 :behavior ビヘイビアーにより使用される、 :property プロパティーを定義する必要があります。',
    ],
    'config' => [
        'not_found' => ':location で、 :file 設定ファイルが見つかりません。',
        'required' => ':location　の中の設定で、値の指定が必要な、 :property が見つかりません。',
    ],
    'zip' => [
        'extract_failed' => "コアファイル： ':file' が取り出せません。",
    ],
];
