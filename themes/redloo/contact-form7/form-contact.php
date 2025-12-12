<div class="contact-form-body">
    <div class="row">
        <div class="col-12 col-md-4">
            <label class="required"><span>必須</span>お名前</label>
        </div>
        <div class="col-12 col-md-8">
            <div class="name-fields">
                <span>姓：</span> [text* last-name class:input]
                <span>名：</span> [text* first-name class:input]
            </div>            
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-4">
            <label class="required"><span>必須</span>電話番号</label>
        </div>
        <div class="col-12 col-md-8">
            <div class="tel-fields">
                [text tel-1 class:input class:tel] <span>-</span>
                [text tel-2 class:input class:tel] <span>-</span>
                [text tel-3 class:input class:tel]
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-4">
            <label class="required"><span>必須</span>メールアドレス</label>
            <label class="confirm-mail-label d-none d-md-block">確認用</label>
        </div>
        <div class="col-12 col-md-8">
            <div class="mail-adress">
                [email* email class:input class:full]
                [email* email-confirm class:input class:full]<label class="confirm-mail-label d-md-none">確認用</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-4">
            <label class="required"><span>必須</span>項目</label>
        </div>
        <div class="col-12 col-md-8">
            <span class="checkbox-group">
            [checkbox* inquiry-items use_label_element
            "ウェットスーツの購入について"
            "リペア（修理）について"
            "その他ご相談"]
        </span>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-4">
            <label class="required"><span>必須</span>お問い合わせ内容</label>
        </div>
        <div class="col-12 col-md-8">
            [textarea* message class:textarea class:full]
        </div>
    </div>
</div>

<div class="privacy">
    個人情報の取り扱いについては<a href="/privacy-policy/">プライバシーポリシー</a>を<br class="d-sm-none">ご確認いただき、同意の上送信してください。
</div>

<div class="form-submit">
    [submit class:btn-blue "送信する"]
</div>