<!DOCTYPE HTML>
<html>
<head>
    <title> Матемэйт </title>
    <meta name "Description" content "Сайт о современных маркетинговых технологиях">
    <meta charset="utf-8">
    <meta name "Keywords" content="Web-marketing, маркетинг, искусство продаж ">
    <meta http-equiv="Content-type" content= text/html >
</head>
<body>
    
    
    <h1 align="center"> Это блог о маркетинговых технологиях  </h1>       
    <div align="center">  <img src="images/roi.jpg" alt="картинка для фона"> </div>
    <p align="center"> Сейчас тут можно:</p>
    <div align="center">
            
     <ol>
        <li>Зарегистрироваться</li>
        <li>Написать пост</li>
        <li>Написать к посту коментарий</li>
         <li> <a href="templates/blog">Страница блога </a></li>
    </ol>
    
    </div>
<! в файле  templates/blog >
    
<ul id="pages">
    <? if($page>1):?>
    <li><a href="index.php?action=home&method=index&page=<?=$page-1;?>"></a></li>
        <? endif;?>
    
        <?if($page<$total):?>
    <li><a href="index.php?action=home$method=index&page=<?=$page+1;?>">></a></li>
    <? endif;?>
</ul>
    
    
<style>
    #pages{list-style:none}
    #pages li{float:left, margin:auto 10px;}
    #pages a {text-decoration:none;}
</style>
    
<?    
/*
    
    <! в файле home controller>
    
public function index)()
    {
        $this->LoadModel('Messages');
        $model = new MessagesModel();
        
    
        $page=isset($_GET['page']) ? $_GET['page']:1;
    
    $data['page']=$page;
    $data['total']=$model->getMessagesCount();
    $data['messages']= $model->getAllMessages($page);
    $this->>LoadPage('home',$data);
}
    
<? 
    <! в файле messages model>
    
    
    
    private $postPerList = 5;
    
    public function getMessagesCount()
    {
    $db=$this->connection();
    $result=$db->query("SELECT COUNT(*) as `count` FROM `messages`");
    $r=$result->fetchAll();
    return ceil($r[0]['count']/$this->PostsPerList);
    
    }
    
    public function getAllMessages($page=1,$limit='0')
    
    {
        $page = ($page<1) ?? 1;
        $limitStart = ($page - 1) * $this-> postPerList;
        $limit=$limitStart.,",".$this->postsPerList;
        $db = $this->connection();
        $result=$db->query("SELECT * FROM `messages` LIMIT {$limit}");
        return $result -> fetchALL();
    
    
    
    }
    
    
    }
    
    
?>    
    
    
*/
?>
    
</body>
</html>