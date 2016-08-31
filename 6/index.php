<?php
    session_start ();
    require_once ("data.php");
    require_once ("connection.php");
    require_once ("template1.php");
//ROUTING
// http://domain.com/index.php?c=post&a=read
    
    $controller = $_GET ['c'];
    $action = $_GET ['a'];
    
    switch ($controller){
            
        case 'post' :
            
            switch ($action) {
                    
                case 'add' :
                    postAdd ();
                    break;
                case 'addSave':
                    postAddsave ();
                case 'postRead':
                    postRead ();
                //case 'postEdit':
                // case ''
                    break;
            }
            break;
        default :
            index ();
            break;
    }



function postAddSave ()
{
    if (checkToken ()) {
        if (db_addPost ($_POST ['text'])) {
            index ();
        }
        else {
            errorPage (__FUNCTION__);
            
        }
    }

    else { 
    errorPage (__FUNCTION__, "token");
}
}

function postAdd()
{
    echo template("template.php",[
            'body' => template ("postAdd.php",[
                '_aft'=> makeToken()
            ])
        ]);

}


function postRead ()
{
    echo template ("template.php", [
        'body' => template ("postRead.php",[
            'data'=> getPosts()
        ])
    ]);
    
}

function errorPage($message) {
    echo "error: {$message} ";
    
}

function index()
{   //postAdd ();
    postRead ();
    echo "адын" ;}

funstion postEdit ()
{
    
}