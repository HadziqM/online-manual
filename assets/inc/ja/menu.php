<p class="logo">
    <a onclick="loadArticle('')"></a>
</p>
<ul class="categories">
    <li id="toppage" class="category">
        <button class="category_title" type="button"><span class="mark"></span>トップページ</button>
        <ul class="sub_categories">
            <dl class="sub_categories_list">
                <li id="home" class="sub_category" onclick="loadArticle()">トップページ</li>
                <li id="news" class="sub_category" onclick="loadArticle('news/')">更新履歴</li>
            </dl>
        </ul>
    </li>
    <li id="entry" class="category">
        <button class="category_title" type="button"><span class="mark"></span>会員登録</button>
        <ul class="sub_categories">
            <dl class="sub_categories_list">
                <li id="acccreate" class="sub_category" onclick="loadArticle('entry/', 'acccreate/')">アカウント作成手順</li>
                <li id="acclink" class="sub_category" onclick="loadArticle('entry/', 'acclink/')">アカウント連携手順</li>
            </dl>
        </ul>
    </li>
    <li class="category">
        <button id="begin" class="category_title" type="button"><span class="mark"></span>ゲームを始めるまで</button>
        <ul class="sub_categories">
            <dl class="sub_categories_list">
                <li id="start" class="sub_category" onclick="loadArticle('begin/', 'start/')">ゲームの始め方</li>
                <li id="menu" class="sub_category" onclick="loadArticle('begin/', 'menu/')">メニュー画面</li>
                <li id="character" class="sub_category" onclick="loadArticle('begin/', 'character/')">キャラクタークリエイション</li>
                <li id="adddelete" class="sub_category" onclick="loadArticle('begin/', 'adddelete/')">キャラクターの追加・削除</li>
                <li id="world" class="sub_category" onclick="loadArticle('begin/', 'world/')">ワールドを選ぼう</li>
                <li id="tutorial" class="sub_category" onclick="loadArticle('begin/', 'tutorial/')">チュートリアル</li>
                <li id="multiple" class="sub_category" onclick="loadArticle('begin/', 'multiple/')">ゲームの多重起動</li>
                <li id="quit" class="sub_category" onclick="loadArticle('begin/', 'quit/')">ゲームの終了</li>
            </dl>
        </ul>
    </li>
</ul>