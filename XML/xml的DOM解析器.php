<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/15
 * Time: 10:46
 */
//创建了一个 DOMDocument-Object
$xml_dom=new DOMDocument();
// "note.xml" 中的 XML 载入这个文档对象中
$xml_dom->load("test.xml");
//saveXML() 函数把内部 XML 文档放入一个字符串，这样我们就可以输出它。
print $xml_dom->saveXML();
?>

<?php
//当 XML 生成时，它通常会在节点之间包含空白。XML DOM 解析器把它们当作普通的元素，如果您不注意它们，有时会产生问题。
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item)
{
    print $item->nodeName . " = " . $item->nodeValue . "<br />";
}
?>
