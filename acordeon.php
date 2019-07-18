<html>
<head>
<style>
*{
    margin:0 auto;
}
nav{
    width:400px;
    height:auto;
    font-family:'Arial';
    margin:10px auto;
    overflow:hidden;
}
.item ul{
    list-style:none;
    width:100%;
    max-height:0px;
    overflow:hidden;
    transition: all .4s linear;
}
.item ul li a{
    width:100%;
    height:20px;
    padding:10px;
    margin-left:-40px;
    display:block;
    text-decoration:none;
    background-color:#000022;
    border-bottom:solid 2px #999999;
    color:#f0f0f9;
}
.item input{
    
}
.item input:checked ~ ul{
    height:auto;
    max-height:200px;
    transform:all;
}
.item label{
    display:block;
    padding:10px;
    background-color:#113737;
    font-size:20px;
    cursor:pointer;
    border-bottom:solid 2px #999999;
    margin:0px auto;
}
.item label:hover{
    background:#335555;
}
.item ul li a:hover{
    background-color:#000099;
}


</style>
</head>
<body>

<nav>
    <div class="item">
    <input type="checkbox" id="check1">
    <label for="check1">Menu</label>
        <ul>
        <li><a href="">contato</a></li>
        <li><a href="">noticias</a></li>
        </ul>
    </div>
    <div class="item">
    <input type="checkbox" id="check2">
    <label for="check2">Menu2</label>
        <ul>
        <li><a href="">contato</a></li>
        <li><a href="">noticias</a></li>
        </ul>
    </div>
    <div class="item">
    <input type="checkbox" id="check3">
    <label for="check3">Menu3</label>
        <ul>
        <li><a href="">contato</a></li>
        <li><a href="">noticias</a>
        <ul>
        <li><a href="">contato</a></li>
        <li><a href="">noticias</a></li>
        <li><a href="">contato</a></li>
        <li><a href="">noticias</a></li>
        </ul>
        </li>
        </ul>
    </div>
    <div class="item">
    <input type="checkbox" id="check4">
    <label for="check4">Menu4</label>
        <ul>
        <li><a href="">contato</a></li>
        <li><a href="">noticias</a></li>
        </ul>
    </div>
    <div class="item">
    <input type="checkbox" id="check5">
    <label for="check5">Menu5</label>
        <ul>
        <li><a href="">contato</a></li>
        <li><a href="">noticias</a></li>
        </ul>
    </div>
</nav>
</body>
</html>