<div class="contact-form-body">
    <div class="form-section form-type">
        <h4 class="text-center mb-4">お問い合わせの種類を<br class="d-sm-none">お選びください</h4>
        [radio inquiry-type default:1 use_label_element "無料採寸ご予約" "再オーダー"]
    </div>

    <div class="form-section customer-info">
        <div class="form-title-template">
            <span>お客様情報</span>
            <h3>YOUR INFORMATION</h3>
        </div>

        <!-- 名前 -->
        <div class="row form-block">
            <div class="col-12 col-md-4">
                <label class="required"><span>必須</span> お名前</label>
            </div>
            <div class="col-12 col-md-8 name-fields">
                <span>姓：</span> [text* last-name class:input]
                <span>名：</span> [text* first-name class:input]
            </div>
        </div>

        <!-- 電話番号 -->
        <div class="row form-block">
            <div class="col-12 col-md-4">
                <label class="required"><span>必須</span> 電話番号</label>
            </div>
            <div class="col-12 col-md-8 tel-fields">
                [text tel-1 class:input class:tel] <span>-</span>
                [text tel-2 class:input class:tel] <span>-</span>
                [text tel-3 class:input class:tel]
            </div>
        </div>

        <!-- メール -->
        <div class="row form-block">
            <div class="col-12 col-md-4">
                <label class="required"><span>必須</span> メールアドレス</label>
                <label class="confirm-mail-label d-none d-md-block">確認用</label>
            </div>
            <div class="col-12 col-md-8 mail-fields">
                [email* email class:input class:full]
                [email* email-confirm class:input class:full]
                <label class="confirm-mail-label d-md-none">確認用</label>
            </div>
        </div>

        <!-- 住所 -->
        <div class="row form-block">
            <div class="col-12 col-md-4">
                <label class="required"><span>必須</span> 住所</label>
            </div>
            <div class="col-12 col-md-8 address-fields">

                <div class="zip-row">
                    <span>〒</span>
                    [text* zip-1 class:input class:zip maxlength:3]
                    -
                    [text* zip-2 class:input class:zip maxlength:4]

                    <button type="button" class="zip-search-btn">住所検索</button>
                </div>

                <div class="address-row">
                    <label>都道府県</label>
                    [text* prefecture class:input]
                </div>

                <div class="address-row">
                    <label>市区町村</label>
                    [text* city class:input]
                </div>

                <div class="address-row">
                    <label>町名番地など</label>
                    [text* address-1 class:input]
                </div>

                <div class="address-row">
                    <label>建物名</label>
                    [text address-2 class:input]
                </div>

            </div>
        </div>
    </div>

    <div class="form-section referred-date js-preferred-date">
        <div class="form-title-template">
            <span>採寸予約日（無料採寸ご希望の方のみ）</span>
            <h3>PREFERRED DATE</h3>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
                <label class="required"><span>必須</span> ご希望日時</label>
            </div>

            <div class="col-12 col-md-8 preferred-date-fields">

                <!-- 第一希望（必須） -->
                <div class="date-field">
                    <span class="label">第一希望</span>
                    [date date-1 class:input class:full]
                    [select time-1 class:input class:full
                    "未指定"
                    "10:30"
                    "11:00"
                    "11:30"
                    "13:00"
                    "13:30"
                    "14:00"
                    "14:30"
                    "15:00"
                    "15:30"
                    "16:00"
                    "16:30"
                    "17:00"
                    "17:30"
                    "18:00"
                    "18:30"
                    "19:00"
                    "19:30"
                    "20:00"
                    "20:30"
                    ]
                </div>

                <!-- 第二希望（任意） -->
                <div class="date-field">
                    <span class="label">第二希望</span>
                    [date date-2 class:input class:full]
                    [select time-2 class:input class:full
                    "未指定"
                    "10:30"
                    "11:00"
                    "11:30"
                    "13:00"
                    "13:30"
                    "14:00"
                    "14:30"
                    "15:00"
                    "15:30"
                    "16:00"
                    "16:30"
                    "17:00"
                    "17:30"
                    "18:00"
                    "18:30"
                    "19:00"
                    "19:30"
                    "20:00"
                    "20:30"
                    ]
                </div>

                <!-- 第三希望（任意） -->
                <div class="date-field">
                    <span class="label">第３希望</span>
                    [date date-3 class:input class:full]
                    [select time-3 class:input class:full
                    "未指定"
                    "10:30"
                    "11:00"
                    "11:30"
                    "13:00"
                    "13:30"
                    "14:00"
                    "14:30"
                    "15:00"
                    "15:30"
                    "16:00"
                    "16:30"
                    "17:00"
                    "17:30"
                    "18:00"
                    "18:30"
                    "19:00"
                    "19:30"
                    "20:00"
                    "20:30"
                    ]
                </div>

                <p class="notes">
                    ※受付時間：10:30〜21:00（12:00〜13:00は除く）<br>
                    ※休業日：日、祝日
                </p>

            </div>
        </div>
    </div>

    <div class="section order-details">
        <div class="form-title-template">
            <span>オーダー内容</span>
            <h3>ORDER DETAILS</h3>
            <p>掲載モデルやおすすめ仕様をご参考に、ご希望の内容を分かる範囲でご入力ください。 </p>
            <p class="notes">※仕様の組み合わせによっては、内容の確認や調整をお願いする場合があります。</p>
        </div>

        <!-- 商品ページからの遷移情報（ある時だけJSで表示） -->
        <div class="selected-product-box js-selected-product">
            <div class="row">
                <div class="col-12 col-md-4">
                    <label class="title">選択されたスタイル</label>
                </div>
                <div class="col-12 col-md-8">
                    [text selected-style id:selected-style readonly class:plain-input]
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-12 col-md-4">
                    <label class="title">参考ページ</label>
                </div>
                <div class="col-8 value">
                    [text selected-url id:selected-url readonly class:plain-input]
                </div>
            </div>

            <!-- 送信用 hidden 値 -->
            [hidden selected-style-hidden id:selected-style-hidden]
            [hidden selected-url-hidden id:selected-url-hidden]
        </div>

        <div class="border-bottom-title">
            <h4>基本仕様</h4>
        </div>

        <!-- スタイル -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">スタイル</label></div>
            <div class="col-12 col-md-8">
                [checkbox style-type use_label_element
                "ロングチェストジップ"
                "バックジップ"
                "ノンジップ（冬は不可）"
                "ネックエントリー"]
            </div>
        </div>

        <!-- タイプ -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">タイプ</label></div>
            <div class="col-12 col-md-8 type-grid">
                [checkbox suit-type use_label_element
                "フルスーツ"
                "シーガル"
                "ロングスプリング"
                "スプリング"
                "ロングジョン"
                "ショートジョン"
                "ロングタッパー"
                "ショートタッパー"
                "ベスト"
                "ハーフパンツ"
                "ドライスーツ"
                "その他"]
            </div>
        </div>

        <!-- 着脱部 -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">着脱部</label></div>
            <div class="col-12 col-md-8">
                [checkbox zipper-type use_label_element
                "前ファスナー"
                "後ファスナー"
                "肩マジックテープ"]
            </div>
        </div>

        <!-- 生地の厚み -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">生地の厚み</label></div>
            <div class="col-12 col-md-8">
                [checkbox fabric-thickness use_label_element
                "5mm/5mm"
                "5mm/3mm"
                "3mm/3mm"
                "3mm/2mm"
                "2mm/2mm"]
            </div>
        </div>

        <!-- 生地素材 -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">生地素材</label></div>
            <div class="col-12 col-md-8 fabric-material">
                [checkbox fabric-material use_label_element
                "エアーフレイムブースト（裏起毛）"
                "ノーマルジャージ（伸びやすい素材）"
                "ネッスルジャージ（通常）"
                "ネッスルスキン（ラバー素材・耐久性は弱）"
                "メッシュスキン（耐久性高）"]

                <p class="notes">
                    ※ 裏起毛は黒のみ<br>
                    ※ カラー変更は別途有料<br>
                    ※ スキン系はオプション
                </p>
            </div>
        </div>

        <div class="border-bottom-title">
            <h4>オプション</h4>
        </div>

        <!-- デザイン -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">デザイン</label></div>
            <div class="col-12 col-md-8">
                [checkbox design-option use_label_element
                "なし（標準）"
                "デザイン追加（別途見積）"]
            </div>
        </div>

        <!-- 色追加 -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">生地の色追加</label></div>
            <div class="col-12 col-md-8">
                [checkbox color-addition use_label_element
                "２色まで（標準）"
                "３色以上（別途見積）"]
            </div>
        </div>

        <!-- ステッチ -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">ステッチカラー</label></div>
            <div class="col-12 col-md-8">
                [checkbox stitch-color use_label_element
                "生地と同色（標準）"
                "変更（＋500円〜）"]
            </div>
        </div>

        <!-- ロゴ -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">ロゴマーク</label></div>
            <div class="col-12 col-md-8">
                [checkbox logo-mark use_label_element
                "２箇所まで同色（標準）"
                "追加・変更"]

                <p class="notes">
                    ※ 1箇所追加＋500円<br>
                    ※ ロゴ無し＋1000円
                </p>
            </div>
        </div>

        <!-- 裏テープ -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">全身裏テープ</label></div>
            <div class="col-12 col-md-8">
                [checkbox tape-finish use_label_element
                "なし（標準）"
                "あり（＋1,000円）"]
            </div>
        </div>

        <!-- ヒザPAD -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">ヒザPAD</label></div>
            <div class="col-12 col-md-8">
                [checkbox knee-pad use_label_element
                "なし"
                "Aタイプ（＋1,000円）"
                "Bタイプ（＋2,000円）"]
            </div>
        </div>

        <!-- 肘PAD -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">肘PAD</label></div>
            <div class="col-12 col-md-8">
                [checkbox elbow-pad use_label_element
                "なし"
                "Aタイプ（＋4,000円）"
                "Bタイプ（＋4,000円）"]
            </div>
        </div>

        <!-- 手首 -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">手首仕上げ</label></div>
            <div class="col-12 col-md-8">
                [checkbox wrist-finish use_label_element
                "切りっぱなし"
                "すべり止め"
                "折り返し縫い"
                "裏スキン"
                "二重スキン"]
            </div>
        </div>

        <!-- 足首 -->
        <div class="row spec-row">
            <div class="col-12 col-md-4"><label class="title">足首仕上げ</label></div>
            <div class="col-12 col-md-8">
                [checkbox ankle-finish use_label_element
                "切りっぱなし"
                "すべり止め"
                "折り返し縫い"
                "裏スキン"
                "二重スキン"]
            </div>
        </div>

        <!-- メッセージ -->
        <div class="row spec-row">
            <div class="col-12 col-md-4">
                <label class="title">メッセージ</label>
            </div>
            <div class="col-12 col-md-8">
                [textarea message class:textarea class:full]
            </div>
        </div>

        <p class="text-center">基本使用、カスタム・オプションの概要はこちらのページをご覧ください。</p>
        <div class="btn-area justify-center gap-x-5">
            <a class="btn-black" href="/order-guide">基本仕様</a>
            <a class="btn-black" href="/custom">カスタム・オプション</a>
        </div>
    </div>
</div>

<div class="privacy">
    個人情報の取り扱いについては<a href="/privacy-policy/" target="_blank">プライバシーポリシー</a>を<br class="d-sm-none">ご確認いただき、同意の上送信してください。
</div>

<div class="form-submit">
    [submit class:btn-blue "送信する"]
</div>