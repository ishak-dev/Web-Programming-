<?php

require_once __DIR__.'/BaseService.class.php';
require_once __DIR__.'/../dao/CommentDao.class.php';


class CommentService extends BaseService{

  
  public __construct(){
    parent::__construct(new CommentDao());
  }

}

 ?>
