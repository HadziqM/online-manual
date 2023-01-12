<p class="logo">
    <a onclick="loadArticle('')"></a>
</p>
<ul class="categories">
    <li id="toppage" class="category">
        <button class="category_title" type="button"><span class="mark"></span>Home</button>
        <ul class="sub_categories">
            <dl class="sub_categories_list">
                <li id="home" class="sub_category" onclick="loadArticle()">Home</li>
                <li id="news" class="sub_category" onclick="loadArticle('news/')">Update History</li>
            </dl>
        </ul>
    </li>
    <li id="entry" class="category">
        <button class="category_title" type="button"><span class="mark"></span>Sign Up</button>
        <ul class="sub_categories">
            <dl class="sub_categories_list">
                <li id="acccreate" class="sub_category" onclick="loadArticle('entry/', 'acccreate/')">Account Creation Procedure</li>
                <li id="acclink" class="sub_category" onclick="loadArticle('entry/', 'acclink/')">Account Linking Procedure</li>
            </dl>
        </ul>
    </li>
    <li class="category">
        <button id="begin" class="category_title" type="button"><span class="mark"></span>Starting the Game</button>
        <ul class="sub_categories">
            <dl class="sub_categories_list">
                <li id="start" class="sub_category" onclick="loadArticle('begin/', 'start/')">How to Start the Game</li>
                <li id="menu" class="sub_category" onclick="loadArticle('begin/', 'menu/')">Title Menu</li>
                <li id="character" class="sub_category" onclick="loadArticle('begin/', 'character/')">Character Creation</li>
                <li id="adddelete" class="sub_category" onclick="loadArticle('begin/', 'adddelete/')">Adding and Deleting Characters</li>
                <li id="world" class="sub_category" onclick="loadArticle('begin/', 'world/')">World Selection</li>
                <li id="tutorial" class="sub_category" onclick="loadArticle('begin/', 'tutorial/')">Tutorial</li>
                <li id="multiple" class="sub_category" onclick="loadArticle('begin/', 'multiple/')">Multiple Launch of the Game</li>
                <li id="quit" class="sub_category" onclick="loadArticle('begin/', 'quit/')">Quit the Game</li>
            </dl>
        </ul>
    </li>
</ul>