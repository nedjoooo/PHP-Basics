<?php
session_start();
?>
<p>Enter HTML tags:</p>
<form method="post">
    <input type="text" name="input">
    <input type="submit" name="submit">
</form>
<?php
$htmlTags = array('html', 'head', 'title', 'base', 'link', 'meta', 'style',
    'script', 'noscript', 'template', 'body', 'section', 'nav',
    'article', 'aside', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
    'header', 'footer', 'address', 'main', 'p', 'hr', 'pre',
    'blockquote', 'ol', 'ul', 'li', 'dl', 'dt', 'figure',
    'figcaption', 'div', 'a', 'em', 'strong', 'small', 's',
    'cite', 'q', 'dfn', 'abbr', 'data', 'time', 'code', 'var',
    'samp', 'kbd', 'sub', 'sup', 'i', 'b', 'u', 'mark', 'ruby',
    'rt', 'rp', 'bdi', 'bdo', 'span', 'br', 'wbr', 'ins', 'del',
    'img', 'iframe', 'embed', 'object', 'param', 'video', 'audio',
    'source', 'track', 'canvas', 'map', 'area', 'svg', 'math',
    'table', 'caption', 'colgroup', 'col', 'tbody', 'thead',
    'tfoot', 'tr', 'td', 'th', 'form', 'fieldset', 'legend',
    'label', 'input', 'button', 'select', 'datalist', 'optgroup',
    'option', 'textarea', 'keygen', 'output', 'progress',
    'meter', 'details', 'summary', 'menuitem', 'menu');

if(isset($_POST['submit'])){
    $isThere=false;
    $input=$_POST['input'];

    foreach($htmlTags as $tag) {
        if($tag==$input) {
            if(!isset($_SESSION['count'])) {
                $_SESSION['count']=1;
            } else {
                $_SESSION['count']++;
            }
            $isThere=true;
            break;
        }
    }

    if($isThere==false) {
        ?><p><h3><?php echo "Invalid HTML tag!";?></h3></p><?php
        ?><p><h3><?php echo "Score: ".$_SESSION['count'];?></h3></p><?php
    } else {
        ?><p><h3><?php echo "Valid HTML tag!";?></p></h3><?php
        ?><p><h3><?php echo "Score: ".$_SESSION['count'];?></h3></p><?php
    }

}
